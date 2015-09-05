<?php include 'header.php' ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php include 'parts/hero.php';  ?>

  <div id="post">
    <div class="container">
      <div class="row">
        <div class="nine_span one_space">
          <h1><?php the_title();?></h1>
          <?php the_content();?>
        </div>
        <div class="three_span">
          <?php $info_section_title = get_field('info_section_title'); 
            if($info_section_title) echo '<h3>'.$info_section_title.'</h3>';?>
          <div id="side_info">
            <?php 
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
            if($info_section_media_type == 'vide
            o_embed') the_field('info_section_video_embed_code');
            $info_section_text = get_field('info_section_text'); if($info_section_text) echo '<p>'.$info_section_text.'</p>';
            if( have_rows('info_section_links') ):?>
            <ul>          
              <?php while ( have_rows('info_section_links') ) : the_row();?>
              <li><a title="Link to <?php the_sub_field('link_name');?>" href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_name');?></a></li>
              <?php endwhile;?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if(is_single()):?>
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
  </div>
<?php 
  endwhile;
    else: echo '
    <div id="post">
      <div class="container">
        <p>'.__('This page contains no posts.').'</p>
      </div>
    </div>';  
 endif; ?>

<?php include 'parts/featured_articles.php' ?>
<?php include 'footer.php' ?>
