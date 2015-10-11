<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head();?>
</head>
<body>
  <div id="header">
    <div id="navigation" class="container">
      <a title="<?php bloginfo( 'name' ); ?> - Home" href="<?php echo home_url(); ?>" id="logo" style="background-image:url(<?php echo get_theme_mod( 'logo' ); ?>)"></a>
      <input type="checkbox" id="mobile_navigation_toggler">
      <label class="mobile_navigation_toggle navicon-button x" for="mobile_navigation_toggler"><div class="navicon"></div></label>
      <?php wp_nav_menu( array(
        'menu_class' => 'page_navigation',
        'theme_location' => 'primary',
        'container' => '',
      )); ?> 
    </div>
  </div>