<?php
function main_footer_widget_init() {
	register_sidebar( array(
		'name'          => 'Footer Widget One',
		'id'            => 'footer_widget_one',
		'before_widget' => '<div class="four_span">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget Two',
		'id'            => 'footer_widget_two',
		'before_widget' => '<div class="four_span">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget Three',
		'id'            => 'footer_widget_three',
		'before_widget' => '<div class="four_span">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'main_footer_widget_init' );
?>