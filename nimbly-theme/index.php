<?php include 'header.php' ?>

<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php nimbly_hero(); ?>
  
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="nine_span one_space">
          <h1><?php the_title();?></h1>
          <?php the_content();?>
         
          <?php 
            if(is_single()){
              nimbly_post_meta();
              include 'parts/next_previous_links.php';  
            }
          ?>  
        </div>
        <div class="three_span">
          <?php nimbly_side_info_content(); ?>
        </div>
      </div>
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