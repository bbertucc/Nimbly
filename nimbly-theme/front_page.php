<?php include 'header.php' ?>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $hero_content = get_field('hero_content');
  if($hero_content): 
    $post = $hero_content; setup_postdata( $post ); 
?>
  <div id="hero" style="background-image:url(<?php echo get_field('hero_image_fallback')['url'].get_field('hero_image')['url']; ?>)">
    <a href="<?php the_permalink();?>" class="twelve_span">
      <?php $hero_media_type = get_field('hero_media_type'); 
      if($hero_media_type == 'video_loop'):?>
      <video autoplay loop>
        <source src="<?php echo get_field('hero_mp4_video')['url'];?>" type="video/mp4">
        <source src="<?php echo get_field('hero_ogg_video')['url'];?>" type="video/ogg">
        <source src="<?php echo get_field('hero_webm_video')['url'];?>" type="video/webm">
      </video>
      <?php endif;?>
      <div class="nested_content container">
        <h1><?php the_title();?></h1>
      </div>
    </a>
  </div>
  <?php wp_reset_postdata(); endif; ?>
  <?php $small_hero_content = get_field('small_hero_content');
  if( $small_hero_content ): ?>
  <div id="small_hero">
    <?php foreach( $small_hero_content as $post): setup_postdata($post); ?>
    <a href="<?php the_permalink();?>" class="four_span" style="<?php echo get_field('hero_image_fallback')['url'].get_field('hero_image')['url']; ?>">
      <div class="nested_content container">
        <h2><?php the_title();?></h2>
      </div>
    </a>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <?php  endif;?>
<?php endwhile; endif; ?>
<?php include 'parts/featured_articles.php' ?>
<?php include 'footer.php' ?>
