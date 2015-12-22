<?php 
//WP Customizer
require_once('includes/wp_customize.php');

//Register Widget Areas
require_once('includes/theme_widgets.php');

//Include Advanced Custom Fields Plugin, Repeater Plugin, ACF Options and Fields 
include_once('plugins/acf/acf.php' );
include_once('plugins/acf-repeater/acf-repeater.php');
require_once('includes/acf_custom_options.php');

//Load Scripts and Styles
require_once('includes/enqueue_options.php');

//Nimbly Hooks
require_once('includes/hooks.php');

//Register Menu
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'nimbly' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

//Add SVG Support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Set Default Image Sizes
if ( ! function_exists( 'nimbly_theme_activated' ) ) {
  function nimbly_theme_activated() {
    update_option( 'thumbnail_size_w', 530 );
    update_option( 'thumbnail_size_h', 350 );
    update_option('medium_size_w', 1060);
    update_option('medium_size_h', 1060);
    update_option('large_size_w', 2120);
    update_option('large_size_h', 2120);
  }
  add_action( 'after_switch_theme', 'nimbly_theme_activated' );
}

//Set Excerpt Length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Remove Gravity Forms Styles
function remove_gravityforms_style() {
	wp_dequeue_style('gforms_css');
}
add_action('wp_print_styles', 'remove_gravityforms_style');

//Load /developer Functions
require_once('developer/custom_functions.php');
?>
