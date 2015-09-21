<?php include 'header.php' ?>
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
  $hero_content = get_field('hero_content');
  $show_featured_articles_section = get_field('show_featured_articles_section');
  if($hero_content): 
    $post = $hero_content; setup_postdata( $post ); 
?>
  <?php include 'parts/hero.php' ?>
  <?php wp_reset_postdata(); endif; ?>
  <?php $small_hero_content = get_field('small_hero_content');
  if( $small_hero_content ): ?>
  <div id="small_hero">
    <?php foreach( $small_hero_content as $post): setup_postdata($post); ?>
    <a href="<?php the_permalink();?>" class="four_span" style="background-image:url(<?php echo get_field('hero_image_fallback')['url'].get_field('hero_image')['url']; ?>)">
      <div class="nested_content container">
        <h2><?php the_title();?></h2>
      </div>
    </a>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <?php  endif;?>
  <?php if($show_featured_articles_section) include 'parts/featured_articles.php'; ?>
<?php endwhile; endif; ?>
<?php include 'footer.php' ?>
