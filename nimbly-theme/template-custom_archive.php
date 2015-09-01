<?php 

/* Template Name: Custom Archive*/

include 'header.php';

if ( have_posts() ) :  ?>
  <div id="custom_post_archive">
    <div class="row">
      <?php 
        while (have_posts()): the_post();
        
        $archive_categories = get_field('archive_categories');   
        $second_query = new WP_Query( array( 'posts_per_page'  => 4, 'cat' => $archive_categories ) );
        
        if ( $second_query->have_posts() ): while ( $second_query->have_posts() ) : $second_query->the_post();
        
          $hero_image = get_field('hero_image'); 
          $hero_image_fallback = get_field('hero_image_fallback'); 
          $size = 'large'; 
          $hero_image_attachment = wp_get_attachment_image_src( $hero_image, $size );  
          $hero_image_fallback_attachment = wp_get_attachment_image_src( $hero_image_fallback, $size );  
          ?>

      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="listed_post six_span" style="background-image:url(<?php echo $hero_image_fallback_attachment[0].$hero_image_attachment[0];?>)">
        <div class="nested_content">
          <span class="large_title"><?php the_title();?></span>
          <span class="excerpt"><?php the_excerpt();?></span>
        </div>
      </a>
      <?php endwhile; endif; ?>
      
      <?php 
      $third_query = new WP_Query( array( 'posts_per_page'  => 12, 'cat' => $archive_categories ) );
      if ( $third_query->have_posts() ): while ( $third_query->have_posts() ) : $third_query->the_post();
        
        $hero_image = get_field('hero_image'); 
        $hero_image_fallback = get_field('hero_image_fallback'); 
        $size = 'medium'; 
        $hero_image_attachment = wp_get_attachment_image_src( $hero_image, $size );  
        $hero_image_fallback_attachment = wp_get_attachment_image_src( $hero_image_fallback, $size );  
        ?>
      <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="listed_post four_span" style="background-image:url(<?php echo $hero_image_fallback_attachment[0].$hero_image_attachment[0];?>)">
        <div class="nested_content">
          <span class="large_title"><?php the_title();?></span>
          <span class="excerpt"><?php the_excerpt();?></span>
        </div>
      </a>
      <?php endwhile; endif; ?>
    </div>
    <div class="container">
      <?php include 'parts/next_previous_links.php' ?>  
    </div>
      <?php endwhile; ?>
  </div>
  <?php endif;?>
<?php include 'footer.php' ?>