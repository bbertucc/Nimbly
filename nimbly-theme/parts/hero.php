<?php include 'hero_image_variables.php'; ?>
<?php if($hero_media_type != 'none' && $hero_media_type != null && $hero_media_type != '' ):?>
<div id="hero" style="background-image:url(<?php echo $large_hero_url ?>)">
  <?php if(is_front_page()) echo '<a title="Link to '.get_the_title().'" href="'.get_the_permalink().'" class="twelve_span">'; ?>
    <?php if($hero_media_type == 'video_loop'):?>
    <video autoplay loop>
      <source src="<?php echo get_field('hero_mp4_video')['url'];?>" type="video/mp4">
      <source src="<?php echo get_field('hero_ogg_video')['url'];?>" type="video/ogg">
      <source src="<?php echo get_field('hero_webm_video')['url'];?>" type="video/webm">
    </video>
    <?php endif;?>
    <div class="nested_content container">
      <?php if(is_front_page()) echo '<h1>'.get_the_title().'</h1>';?>
    </div>
  <?php if(is_front_page()) echo '</a>';?>
</div>
<?php endif;?>
