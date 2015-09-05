  <div id="footer">
    <div class="container row">
      <div class="four_span">
        <a title="<?php bloginfo( 'name' ); ?> - Home" href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod( 'inverted_logo'); ?>" class="inverted_logo" alt="<?php bloginfo( 'name' ); ?> - Inverted Logo"></a>
        <h3><?php echo get_theme_mod( 'contact_tagline'); ?></h3>
        <div class="contact_links">
          <a title="Email Link" href="mailto:<?php echo get_theme_mod( 'contact_email'); ?>" title="Email"><?php echo get_theme_mod( 'contact_email'); ?></a>
				  <a target="blank" title="Twitter Link" href="<?php echo get_theme_mod( 'twitter_url'); ?>"><i class="fa fa-twitter fa-lg"></i></a> 
          <a target="blank" title="Facebook Link" href="<?php echo get_theme_mod( 'fb_url'); ?>"><i class="fa fa-facebook fa-lg"></i></a> 
          <a target="blank" title="LinkedIn Link" href="<?php echo get_theme_mod( 'linkedin_url'); ?>"><i class="fa fa-linkedin fa-lg"></i></a> 
        </div>
      </div>
      <div class="eight_span">
        <?php 
          dynamic_sidebar( 'footer_widget_one' );
          dynamic_sidebar( 'footer_widget_two' ); 
          dynamic_sidebar( 'footer_widget_three' ); 
        ?>
      </div>
    </div>
    <p><?php echo get_theme_mod( 'copyright_information'); ?></p>
  </div>
  <?php echo get_theme_mod( 'tracking_codes'); ?>
  <?php wp_footer(); ?> 
</body>
</html>