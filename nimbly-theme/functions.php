<?php 
//WP Customizer
require_once('includes/wp_customer.php');

//Register Widget Areas
require_once('includes/theme_widgets.php');

//Include Advanced Custom Fields Plugin, Repeater Plugin, ACF Options and Fields 
include_once('plugins/advanced-custom-fields/acf.php' );
include_once('plugins/acf-repeater/acf-repeater.php');
require_once('includes/acf_custom_options.php');

//Load Scripts and Styles
require_once('includes/enqueue_options.php');

//Register Menu
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

// Add Minimum Upload image size
add_filter('wp_handle_upload_prefilter','tc_handle_upload_prefilter');
function tc_handle_upload_prefilter($file) {
  $img=getimagesize($file['tmp_name']);
  $minimum = array('width' => '530', 'height' => '350');
  $width= $img[0];
  $height =$img[1];

  if ($width < $minimum['width'] )
    return array("error"=>"Filetype is not allowed or image dimensions are too small. Minimum width is {$minimum['width']}px. Uploaded image width is $width px");

  elseif ($height <  $minimum['height'])
    return array("error"=>"Image dimensions are too small. Minimum height is {$minimum['height']}px. Uploaded image height is $height px");
  else
    return $file; 
}

?>