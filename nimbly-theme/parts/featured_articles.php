<?php 
  $args = array( 'posts_per_page' => 8, 'post__in' => get_option('sticky_posts'));
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
  ?>
  <div id="featured_articles" style="background-image:url(<?php echo get_theme_mod( 'custom_background_image' ); ?>)">
    <div class="container row">
      <?php 
        $featured_articles_title = get_theme_mod( 'featured_articles_title'); 
        if($featured_articles_title) echo '<h1 class="section_title">'.$featured_articles_title.'</h2>';
      ?>
      <?php  while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="three_span">
        <?php 
          include 'hero_image_variables.php';
        ?><?php echo $post_id ?>
        <span class="thumbnail" style="background-image: url(<?php echo $thumbnail_hero_url; ?>)"></span>
        <span class="category"><?php echo get_the_category()[0]->cat_name;?></span>
        <span class="title"><?php the_title();?></span>
      </a>
      <?php endwhile;?>
    </div>  
  </div>
<?php endif; ?>