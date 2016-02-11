<?php

  //Info Section Hook
  function nimbly_side_info() { 
      do_action( 'nimbly_side_info_content' );
  }

  //Add Side Info Section
  function nimbly_side_info_content() { 
    $info_section_title = get_field('info_section_title'); 
    
    if($info_section_title) echo '<h3>'.$info_section_title.'</h3>';
          
    echo'<div id="side_info" class="row">';
    
    $info_section_media_type = get_field('info_section_media_type'); 

    if($info_section_media_type == 'image'){ 
      $info_section_image = get_field('info_section_image'); 
      echo '<img alt="'.$info_section_image[alt].'" src="'.$info_section_image['sizes'][medium].'">';
    }

    if($info_section_media_type == 'map'){
      include 'parts/acf_map.php';
      $location = get_field('info_section_map_location');
      if( !empty($location) ) echo '<div class="acf-map"><div class="marker" data-lat="'.$location['lat'].'" data-lng="'.$location['lng'].'"></div></div>';
    }
    
    if($info_section_media_type == 'video_embed') the_field('info_section_video_embed_code');
    
    $info_section_text = get_field('info_section_text'); 
    
    if($info_section_text) echo '<p>'.$info_section_text.'</p>';
    
    if( have_rows('info_section_links') ):
    
      echo '<ul>';
      
      while ( have_rows('info_section_links') ) : the_row();
      
        echo'<li><a target="'.get_sub_field('link_target').'" href="'.get_sub_field('link_url').'">'.get_sub_field('link_name').'</a></li>';
        
      endwhile;
            
      echo '</ul>';
      
    endif;
    
    echo '</div>';

  }
  add_action('nimbly_side_info','nimbly_side_info_content',3);

  //Post Meta Hook
  function nimbly_post_meta() { 
    echo '<div class="meta">';
      do_action( 'nimbly_post_meta' );
    echo '</div>';    
  }

  //Add Meta Share Buttons
  function nimbly_post_share_buttons() { 
    echo '<span class="share_buttons">Share: <a target="blank" href="https://twitter.com/home?status='.get_the_permalink().'"><i class="fa fa-twitter fa-lg"></i></a> <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'"><i class="fa fa-facebook fa-lg"></i></a> <a target="blank" href="https://www.linkedin.com/cws/share?url='.get_the_permalink().'"><i class="fa fa-linkedin fa-lg"></i></a></span>';
  }
  add_action('nimbly_post_meta','nimbly_post_share_buttons',2);

  //Add Meta Date
  function nimbly_meta_post_date() { 
    echo '<span class="date">Posted: '.get_the_date().'</span> ';
  }
  add_action('nimbly_post_meta','nimbly_meta_post_date',1);

  //Hero Hook
  function nimbly_hero() { 
    do_action( 'nimbly_hero' );
  }

  //Add Optional Hero Images and Video 
  function nimbly_hero_content() { 
    
    include 'hero_image_variables.php';

    if($hero_media_type != 'none' && $hero_media_type != null && $hero_media_type != '' )
      echo '<div id="hero" style="background-image:url('.$large_hero_url.')">'; 
      
    if(is_front_page())
      echo '<a href="'.get_permalink().'" class="twelve_span">';
      
     if($hero_media_type == 'video_loop'):?>
      <video id="looping_video" autoplay loop>
        <source src="<?php echo get_field('hero_mp4_video')['url'];?>" type="video/mp4">
        <source src="<?php echo get_field('hero_ogg_video')['url'];?>" type="video/ogg">
        <source src="<?php echo get_field('hero_webm_video')['url'];?>" type="video/webm">
      </video>
    <?php endif;?>
      
    <div class="nested_content container">
      <?php if(is_front_page()) echo '<h1>'.get_the_title().'</h1>';?>
    </div>

    <?php 
      
    if(is_front_page()) 
      echo '</a>';
      
    if($hero_media_type != 'none' && $hero_media_type != null && $hero_media_type != '' )
      echo '</div>'; 

  }
  add_action('nimbly_hero','nimbly_hero_content',1);

?>