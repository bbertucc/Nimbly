<?php include 'header.php' ?>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $hero_content = get_field('hero_content');
  $show_featured_articles_section = get_field('show_featured_articles_section');
  $small_hero_content = get_field('small_hero_content');
  $post_list_categories = get_field('post_list_categories');
  
  if($hero_content): 
    $post = $hero_content; setup_postdata( $post ); 
?>
  <?php nimbly_hero(); ?>
  <?php wp_reset_postdata(); endif; ?>
  <?php if( $small_hero_content ): ?>
  <div id="small_hero">
    <?php foreach( $small_hero_content as $post): setup_postdata($post); ?>
    <a href="<?php the_permalink();?>" class="four_span" style="background-image:url(<?php echo get_field('hero_image_fallback')['url'].get_field('hero_image')['url']; ?>)">
      <div class="nested_content container">
        <h2><?php the_title();?></h2>
      </div>
    </a>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <?php  endif;?>
  <?php if($show_featured_articles_section) include 'parts/featured_articles.php'; ?>
  <?php if($post_list_categories): ?>
  <div id="post_list">
    <div class="container row">
      <h1 class="section_title">
        <?php foreach( $post_list_categories as $post_list_category ): 
          $post_list_category_name = get_cat_name($post_list_category);
          $post_list_category_link = get_category_link($post_list_category);
        ?>
        <a href="<?php echo $post_list_category_link ?>" title="Link to <?php echo $post_list_category_name ?> Category Page" class="category_link"><?php echo $post_list_category_name ?></a>
        <?php endforeach; ?>
      </h1>
      <?php 
      $the_query = new WP_Query( array( 
        'posts_per_page'  => 8, 
        'category__in' => $post_list_categories,
      ));
      if ( $the_query->have_posts() ):
        while ( $the_query->have_posts() ) : $the_query->the_post();
        include 'includes/hero_image_variables.php' ?>
      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="three_span listed_post">
        <span class="thumbnail" style="background-image: url(<?php echo $thumbnail_hero_url; ?>)"></span>
        <span class="category"><?php echo get_the_category()[0]->cat_name;?></span>
        <span class="title"><?php the_title();?></span>
      </a>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <?php  endif;?>  
<?php endwhile; endif; ?>
<?php include 'footer.php' ?>