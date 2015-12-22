<?php 

/* Template Name: Standard Archive */

include 'header.php';

?>
<div id="post_archive" style="background-image:url(<?php echo get_theme_mod( 'custom_background_image' ); ?>)" class="row">
  <div class="container">
    <h1 class="section_title"><?php single_cat_title()?></h1>
    <?php 
    $category_id = get_query_var('cat');
    $archive_categories = get_field('archive_categories'); 
    if (!$archive_categories) { $archive_categories = $category_id; };     

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $the_query = new WP_Query( array( 
      'category__in' => $archive_categories,
      'paged' => $paged
    ));
    if ( $the_query->have_posts() ):
      while ( $the_query->have_posts() ) : $the_query->the_post();
      $post_count = $the_query->post_count; 
      $post_number++;
      if($post_number % 2 != 0) echo '<div class="row">';
      include 'includes/hero_image_variables.php'
    ?>  
      <a href="<?php the_permalink();?>" class="post six_span">
        <div class="hero" style="background-image: url(<?php echo $medium_hero_url; ?>)"></div>
        <span class="title"><?php the_title();?></span>
        <span class="excerpt"><?php the_excerpt();?></span>
      </a>    
      <?php 
      if($post_number % 2 == 0 || $post_number == $post_count) echo '</div>';  
      endwhile;?>
    </div>
    
    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
    <div id="next_previous_links" class="container row">
      <div class="left"><?php echo get_next_posts_link( '<i class="fa fa-chevron-left"></i> Older Entries', $the_query->max_num_pages );  ?></div>
      <div class="right"><?php echo get_previous_posts_link( 'Newer Entries <i class="fa fa-chevron-right"></i>' );  ?></div>
    </div>
    <?php } ?>

    <?php  else: echo '<p>'._e('This category has no posts.').'</p>'; ?>  
      
  <?php endif;?>
</div>

<?php include 'footer.php'; ?>