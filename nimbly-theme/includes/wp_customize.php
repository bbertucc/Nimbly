<?php
function cnos_customizer_register( $wp_customize ) {
  //Removed Unused Areas
  $wp_customize->remove_section( 'colors' );

  //Add Listing Page Descriptions 
  $wp_customize->add_section( 'theme_customizations', array(
      'title' => __('Nimbly Customizations'),
      'description' => __('Update look and feel.'),
      'priority' => 35,
    )
  );

  $wp_customize->add_setting( 'logo');
  $wp_customize->add_setting( 'inverted_logo');
  $wp_customize->add_setting( 'custom_background_image');
  $wp_customize->add_setting( 'featured_articles_title');
  $wp_customize->add_setting( 'contact_tagline');
  $wp_customize->add_setting( 'contact_email');
  $wp_customize->add_setting( 'twitter_url');
  $wp_customize->add_setting( 'fb_url');
  $wp_customize->add_setting( 'linkedin_url');
  $wp_customize->add_setting( 'copyright_information');
  $wp_customize->add_setting( 'tracking_codes');

  $wp_customize->add_control( 'logo',
    array(
      'label' => 'Logo',
      'section' => 'theme_customizations',
      'type' => 'upload',
    )
  ); 
  $wp_customize->add_control( 'inverted_logo',
    array(
      'label' => 'Inverted Logo',
      'section' => 'theme_customizations',
      'type' => 'upload',
    )
  );
  $wp_customize->add_control( 'custom_background_image',
    array(
      'label' => 'Custom Background Image',
      'section' => 'theme_customizations',
      'type' => 'upload',
    )
  );
  $wp_customize->add_control( 'featured_articles_title',
    array(
      'label' => 'Featured Articles Title',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'contact_tagline',
    array(
      'label' => 'Contact Tagline',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'contact_email',
    array(
      'label' => 'Contact Email Address',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'twitter_url',
    array(
      'label' => 'Twitter URL',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'fb_url',
    array(
      'label' => 'Facebook URL',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'linkedin_url',
    array(
      'label' => 'LinkedIn URL',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'copyright_information',
    array(
      'label' => 'Copyright and attribution info',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'tracking_codes',
    array(
      'label' => 'Tracking Codes',
      'section' => 'theme_customizations',
      'type' => 'text',
    )
  );
}
add_action( 'customize_register', 'cnos_customizer_register' ); 
?>