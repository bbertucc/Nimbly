<?php 

/* Template Name: Post Archive - Standard */

include 'header.php'

if ( have_posts() ) : ?>
  <div id="post_archive" style="background:url(<?php echo get_theme_mod( 'custom_background_image' ); ?>)">
    <div class="container">
      <h1 class="section_title"><?php the_title()?></h2>
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink();?>" class="post six_span">
          <?php 
            $hero_image = get_field('hero_image'); 
            $hero_image_fallback = get_field('hero_image_fallback'); 
            $size = 'thumbnail'; 
            $hero_image_attachment = wp_get_attachment_image_src( $hero_image, $size );  
            $hero_image_fallback_attachment = wp_get_attachment_image_src( $hero_image_fallback, $size );  
            echo '<img alt="'.$hero_image['alt'].$hero_image_fallback['alt'].'" src="'.$hero_image_attachment[0].$hero_image_attachment[0].'">';
          ?>
          <span class="title"><?php the_title();?></span>
          <span class="excerpt"><?php the_excerpt();?></span>
        </a>    
        <?php endwhile;?>
      </div>
      <?php include 'parts/next_previous_links.php' ?>  
    </div>
  </div>
<?php endif;?>

<?php include 'footer.php' ?>