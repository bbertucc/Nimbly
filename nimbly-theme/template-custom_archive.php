<?php 

/* Template Name: Custom Hero Archive */

include 'header.php';

?>
<div id="custom_post_archive">
  <div class="row">
  <?php 
  $archive_categories = get_field('archive_categories');      
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $the_query = new WP_Query( array( 
    'posts_per_page'  => 13, 
    'category__in' => $archive_categories,
    'paged' => $paged
  ));
  if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ) : $the_query->the_post();

    $post_count = $the_query->post_count; 
    $post_number++;
    include 'parts/hero_image_variables.php' ?>
    
    <a title="Link to <?php the_title();?>" href="<?php the_permalink();?>" class="listed_post <?php if($post_count <= 3) { echo 'twelve_span'; }elseif(($post_count >= 4) & ($post_number <= 4)){ echo 'six_span'; }else{ echo 'four_span'; }?>" style="background-image:url(<?php if($post_count <= 3) echo $large_hero_url; if($post_count > 3) echo $medium_hero_url;?>)">
      <div class="nested_content">
        <span class="title"><?php the_title();?></span>
        <span class="excerpt"><?php the_excerpt();?></span>
      </div>
    </a>
    <?php endwhile; ?>
  </div>

  <?php if ($the_query->max_num_pages > 1) { ?>
  <div class="container">
    <div id="next_previous_links" class="row">
      <div class="left"><?php echo get_next_posts_link( '<i class="fa fa-chevron-left"></i> Older Entries', $the_query->max_num_pages );  ?></div>
      <div class="right"><?php echo get_previous_posts_link( 'Newer Entries <i class="fa fa-chevron-right"></i>' );  ?></div>
      </div>
    </div>
  </div>
  <?php } ?>

    
    <?php else: echo '<p>'._e('The selected categories have no posts.').'</p>'; ?>  
 
  <?php endif; ?>


<?php include 'footer.php' ?>