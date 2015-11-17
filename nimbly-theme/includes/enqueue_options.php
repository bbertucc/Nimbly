<?php
function load_scripts_and_styles() {
	//Libraries
	wp_enqueue_script('jquery');
	//Styles
  wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'developer-custom-styles', get_template_directory_uri() . '/developer/custom_styles.css' );
  if ( class_exists( 'GFCommon' ) ) wp_enqueue_style( 'gravity-forms-components', get_template_directory_uri() . '/added_styles/gravity_forms.css' );

	//jQuery Dependent Scripts
  $jquery_scripts=array(
    'theme-scripts'=>'/scripts.js',
    'custom-scripts'=>'/developer/custom_scripts.js',    
  );
  foreach($jquery_scripts as $key=>$sc){
    wp_register_script( $key, get_template_directory_uri() . $sc, array('jquery'),'',true );
    wp_enqueue_script( $key );
  }
}
add_action('wp_enqueue_scripts', 'load_scripts_and_styles');
?>