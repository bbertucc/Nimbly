<?php 
  $featured_articles_category = get_theme_mod( 'featured_articles_category'); 
  $args = array( 'posts_per_page' => 6, 'cat' => $featured_articles_category);
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
  ?>
  <div id="featured_articles" style="background-image:url(<?php echo get_theme_mod( 'custom_background_image' ); ?>)">
    <div class="container row">
      <h1 class="section_title">
        <?php if($featured_articles_category){
          $featured_articles_category_name = get_cat_name($featured_articles_category);
          $featured_articles_category_link = get_category_link($featured_articles_category);
          echo '<a href="'.$featured_articles_category_link.'" title="Link to '.$featured_articles_category_name.' Category Page">'.$featured_articles_category_name.'</a>';
          }else{
            echo __('Featured Articles');
          }
        ?>
      </h1>
      <?php  while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="four_span post">
        <?php include 'hero_image_variables.php'; ?>
        <span class="thumbnail" style="background-image: url(<?php echo $thumbnail_hero_url; ?>)"></span>
        <span class="category"><?php echo get_the_category()[0]->cat_name;?></span>
        <span class="title"><?php the_title();?></span>
      </a>
      <?php endwhile;?>
    </div>  
  </div>
<?php endif; ?>