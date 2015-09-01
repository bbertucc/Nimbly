<?php include 'header.php' ?>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $hero_content = get_field('hero_content');
  if($hero_content):
    $hero_image = get_field('hero_image'); 
    $hero_image_fallback = get_field('hero_image_fallback'); 
    $size = 'large'; 
    $hero_image_attachment = wp_get_attachment_image_src( $hero_image, $size );  
    $hero_image_fallback_attachment = wp_get_attachment_image_src( $hero_image_fallback, $size );  
?>
  <div id="hero" style="background-image:url(<?php echo $hero_image_fallback_attachment[0].$hero_image_attachment[0]; ?>)">
    <div class="nested_content container">
      <?php $hero_media_type = get_field('hero_media_type'); 
      if($hero_media_type == 'video_loop'):?>
      <video autoplay loop>
        <source src="<?php echo get_field('hero_mp4_video')['url'];?>" type="video/mp4">
        <source src="<?php echo get_field('hero_ogg_video')['url'];?>" type="video/ogg">
        <source src="<?php echo get_field('hero_webm_video')['url'];?>" type="video/webm">
      </video>
      <?php endif;?>
    </div>
  </div>
  <?php endif;?>
<div id="post" class="<?php if(!$hero_content) echo 'light_bg'?> container">
  <div class="row">
    <div class="nine_span one_space">
      <h1><?php the_title();?>e</h1>
      <?php the_content(); ?>
    </div>
    <div class="three_span">
      <?php $info_section_title = get_field('info_section_title'); if($info_section_title) echo '<h3>'.$info_section_title.'</h3>';?>
      <div id="side_info">
        <?php 
        $info_section_media_type = get_field('info_section_media_type'); 
        if($info_section_media_type == 'image'){ 
          $info_section_image = get_field('info_section_image'); 
          $size = 'large'; 
          $info_section_image_attachment = wp_get_attachment_image_src( $info_section_image, $size );  
          echo '<img alt="'.$info_section_image['alt'].'" src="'.$info_section_image_attachment[0].'">';
        }
        if($info_section_media_type == 'map') include 'parts/map.php';
        if($info_section_media_type == 'video_embed') the_field('info_section_video_embed_code');
        $info_section_text = get_field('info_section_text'); if($info_section_text) echo '<p>'.$info_section_text.'</p>';
        if( have_rows('info_section_links') ): while ( have_rows('info_section_links') ) : the_row();
        ?>
        <ul>
          <li><a title="Link to <?php the_sub_field('link_name'):?>" href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_name');?></a></li>
        </ul>
        <?php  endwhile; endif; ?>
      </div>
    </div>
  </div>
  <?php $show_post_meta = get_field('show_post_meta'); if($show_post_meta):?>
  <div class="row">
    <div class="nine_span one_space">
      <div class="meta">
        Posted: <?php the_date(); ?> <span class="right">Share: <a target="blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter fa-lg"></i></a> <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook fa-lg"></i></a> <a target="blank" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin fa-lg"></i></a></span>
      </div>
      <?php include 'parts/next_previous_links.php' ?>  
    </div>
  </div>
  <?php endif; ?>
</div>
<?php endwhile; endif; ?>
<?php include 'parts/featured_articles.php' ?>
<?php include 'footer.php' ?>
