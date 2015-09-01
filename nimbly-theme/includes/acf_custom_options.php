<?php
//Hide ACF Admin Menu Item
define( 'ACF_LITE' , true );

//ACF Fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_nimbly-content-options',
		'title' => 'Nimbly Content Options',
		'fields' => array (
			array (
				'key' => 'field_55e47650663cc',
				'label' => 'Show Post Meta',
				'name' => 'show_post_meta',
				'type' => 'true_false',
				'instructions' => 'Show social share links,	post date, and next/previous links.',
				'message' => '',
				'default_value' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'posts_page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-custom_archive.php',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nimbly-custom-archive-options',
		'title' => 'Nimbly Custom Archive Options',
		'fields' => array (
			array (
				'key' => 'field_55e4b10e40a74',
				'label' => 'Archive Categories',
				'name' => 'archive_categories',
				'type' => 'text',
				'instructions' => 'Enter category IDs to limit archive to display posts in one or more categories. Add comma between each new category ID. Leave blank to display all posts.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-custom_archive.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nimbly-front-page-options',
		'title' => 'Nimbly Front Page Options',
		'fields' => array (
			array (
				'key' => 'field_55e1f1fb40705',
				'label' => 'Hero Content',
				'name' => 'hero_content',
				'type' => 'post_object',
				'instructions' => 'Select the content that will appear most prominently on the homepage.',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e1f31d40706',
				'label' => 'Small Hero Content',
				'name' => 'small_hero_content',
				'type' => 'post_object',
				'instructions' => 'Select three pieces of content that will appear bellow the homepage hero.',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'featured_image',
				6 => 'categories',
				7 => 'tags',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nimbly-hero-options',
		'title' => 'Nimbly Hero Options',
		'fields' => array (
			array (
				'key' => 'field_55e1f47491089',
				'label' => 'Hero Media Type',
				'name' => 'hero_media_type',
				'type' => 'select',
				'choices' => array (
					'image' => 'Image',
					'video_loop' => 'Video Loop',
					'none' => 'None',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e1f4a29108a',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e1f4e29108b',
				'label' => 'Hero MP4 Video',
				'name' => 'hero_mp4_video',
				'type' => 'file',
				'instructions' => 'Upload each video codec so that videos play on a range of devices.',
				'required' => 1,
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e1f58f9108e',
				'label' => 'Hero OGG Video',
				'name' => 'hero_ogg_video',
				'type' => 'file',
				'instructions' => 'Upload each video codec so that videos play on a range of devices.',
				'required' => 1,
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e1f5799108d',
				'label' => 'Hero WebM Video',
				'name' => 'hero_webm_video',
				'type' => 'file',
				'instructions' => 'Upload each video codec so that videos play on a range of devices.',
				'required' => 1,
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e1f5b99108f',
				'label' => 'Hero Image Fallback',
				'name' => 'hero_image_fallback',
				'type' => 'image',
				'instructions' => 'Upload an image to display on devices that don\'t support video.',
				'save_format' => 'object',
				'preview_size' => 'large',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'posts_page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-custom_archive.php',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nimbly-side-info-section',
		'title' => 'Nimbly Side Info Section',
		'fields' => array (
			array (
				'key' => 'field_55e46b12bacb8',
				'label' => 'Info Section Title',
				'name' => 'info_section_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55e46bc8bacb9',
				'label' => 'Embedded Media Type',
				'name' => 'info_section_media_type',
				'type' => 'select',
				'choices' => array (
					'Image' => 'Image',
					'Map' => 'Map',
					'Video Embed' => 'Video Embed',
					'None' => 'None',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e46c86bacba',
				'label' => 'Image',
				'name' => 'info_section_image',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e46bc8bacb9',
							'operator' => '==',
							'value' => 'Image',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e46d03bacbb',
				'label' => 'Map Location',
				'name' => 'info_section_map_location',
				'type' => 'google_map',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e46bc8bacb9',
							'operator' => '==',
							'value' => 'Map',
						),
					),
					'allorany' => 'all',
				),
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
			array (
				'key' => 'field_55e46fbebacbc',
				'label' => 'Video Embed Code',
				'name' => 'info_section_video_embed_code',
				'type' => 'textarea',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e46bc8bacb9',
							'operator' => '==',
							'value' => 'Video Embed',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_55e47038bacbd',
				'label' => 'Info Section Text',
				'name' => 'info_section_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'posts_page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-custom_archive.php',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
}
?>