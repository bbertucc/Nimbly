<?php
//Hide ACF Admin Menu Item
define( 'ACF_LITE' , true );

//ACF Fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_nimbly-custom-archive-options',
		'title' => 'Nimbly Custom Archive Options',
		'fields' => array (
			array (
				'key' => 'field_55e4b10e40a74',
				'label' => 'Archive Categories',
				'name' => 'archive_categories',
				'type' => 'taxonomy',
				'instructions' => 'Select categories of posts to display. If no categories are selected, the archive will display all posts.',
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
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
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'featured_image',
				6 => 'categories',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_nimbly-content-options-2',
		'title' => 'Nimbly Content Options',
		'fields' => array (
			array (
				'key' => 'field_55fdfcca487e7',
				'label' => 'Show Featured Articles Section',
				'name' => 'show_featured_articles_section',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'posts_page',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-custom_archive.php',
					'order_no' => 0,
					'group_no' => 3,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
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
				'type' => 'relationship',
				'instructions' => 'Select three pieces of content that will appear bellow the homepage hero.',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 3,
			),
			array (
				'key' => 'field_55fdf9b42da93',
				'label' => 'Post List Categories',
				'name' => 'post_list_categories',
				'type' => 'taxonomy',
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
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
				'label' => 'Hero Media',
				'name' => 'hero_media_type',
				'type' => 'select',
				'choices' => array (
					'none' => 'None',
					'image' => 'Image',
					'video_loop' => 'Video Loop',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_55e1f4a29108a',
				'label' => 'Hero Image',
				'name' => 'hero_image',
				'type' => 'image',
				'instructions' => 'Recommended Image Size: 2120px by 1400px',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'image',
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
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'video_loop',
						),
					),
					'allorany' => 'all',
				),
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
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'video_loop',
						),
					),
					'allorany' => 'all',
				),
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
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'video_loop',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'library' => 'all',
			),
			array (
				'key' => 'field_55e1f5b99108f',
				'label' => 'Hero Image Fallback',
				'name' => 'hero_image_fallback',
				'type' => 'image',
				'instructions' => 'Upload an image to display on devices that don\'t support video.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e1f47491089',
							'operator' => '==',
							'value' => 'video_loop',
						),
					),
					'allorany' => 'all',
				),
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
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'posts_page',
					'order_no' => 1,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-custom_archive.php',
					'order_no' => 2,
					'group_no' => 0,
				),
				array (
					'param' => 'ef_media',
					'operator' => '!=',
					'value' => 'all',
					'order_no' => 3,
					'group_no' => 0,
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
				'label' => 'Info Section Added Media',
				'name' => 'info_section_media_type',
				'type' => 'select',
				'choices' => array (
					'none' => 'None',
					'image' => 'Image',
					'map' => 'Map',
					'video_embed' => 'Video Embed',
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
				'instructions' => 'Recommended Image Size: 1060px by 700px',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e46bc8bacb9',
							'operator' => '==',
							'value' => 'image',
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
							'value' => 'map',
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
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55e46bc8bacb9',
							'operator' => '==',
							'value' => 'video_embed',
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
				'formatting' => 'html',
			),
			array (
				'key' => 'field_55e4c23ed8c0c',
				'label' => 'Info Section Links',
				'name' => 'info_section_links',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_55e4c255d8c0d',
						'label' => 'Link Name',
						'name' => 'link_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_55e4c25fd8c0e',
						'label' => 'Link URL',
						'name' => 'link_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56bcaeb8b68c6',
						'label' => 'Link Target',
						'name' => 'link_target',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							'_self' => 'Same Window',
							'_blank' => 'New Window',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => '+ Add Link',
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
				array (
					'param' => 'page_type',
					'operator' => '!=',
					'value' => 'posts_page',
					'order_no' => 1,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-custom_archive.php',
					'order_no' => 2,
					'group_no' => 0,
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