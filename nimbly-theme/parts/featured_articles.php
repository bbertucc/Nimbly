<?php 
  $args = array( 'posts_per_page' => 8, 'post__in' => get_option('sticky_posts'));
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
  ?>
  <div id="featured_articles" style="background:url(<?php echo get_theme_mod( 'custom_background_image' ); ?>)">
    <div class="container row">
      <?php 
        $featured_articles_title = get_theme_mod( 'featured_articles_title'); 
        if($featured_articles_title) echo '<h1 class="section_title">'.$featured_articles_title.'</h2>';
      ?>
      <?php  while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>">
        <?php 
          $hero_image = get_field('hero_image'); 
          $hero_image_fallback = get_field('hero_image_fallback'); 
          $size = 'thumbnail';
          $hero_image_attachment = wp_get_attachment_image_src( $hero_image, $size );  
          $hero_image_fallback_attachment = wp_get_attachment_image_src( $hero_image_fallback, $size );  
          echo '<img alt="'.$hero_image['alt'].$hero_image_fallback['alt'].'" src="'.$hero_image_attachment[0].$hero_image_attachment[0].'">';
        ?>
        <span class="category"><?php the_category();?></span>
        <span class="title"><?php the_permalink();?></span>
      </a>
      <?php endwhile;?>
    </div>  
  </div>
<?php endif; ?>