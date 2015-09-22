  <div id="footer">
    <div class="container row">
      <?php dynamic_sidebar( 'footer_widgets' ); ?>
    </div>
    <p><?php echo get_theme_mod( 'copyright_information'); ?></p>
  </div>
  <?php echo get_theme_mod( 'tracking_codes'); ?>
  <?php wp_footer(); ?> 
</body>
</html>