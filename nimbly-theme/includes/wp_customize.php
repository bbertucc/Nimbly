<?php

//Register Custumizer, Sections, Settings and Controls
function cnos_customizer_register( $wp_customize ) {
  //Removed Unused Areas
  $wp_customize->remove_section( 'colors' );

  //Add Customizer Section 
  $wp_customize->add_section( 'theme_customizations', array(
      'title' => __('Nimbly Customizations'),
      'description' => __('Update look and feel.'),
      'priority' => 35,
    )
  );

  //Add Customizer Settings 
  $wp_customize->add_setting( 'logo');
  $wp_customize->add_setting( 'inverted_logo');
  $wp_customize->add_setting( 'custom_background_image');
  $wp_customize->add_setting( 'featured_articles_category');
  $wp_customize->add_setting( 'twitter_url');
  $wp_customize->add_setting( 'fb_url');
  $wp_customize->add_setting( 'linkedin_url');
  $wp_customize->add_setting( 'copyright_information');
  $wp_customize->add_setting( 'tracking_codes');
  
  //Add Customizer Controls   
  $wp_customize->add_control(
    new WP_Customize_Upload_Control( 
      $wp_customize, 
      'logo', 
        array(
    		'label'      => __( 'Logo', 'nimbly' ),
    		'section'    => 'theme_customizations',
    		'settings'   => 'logo',
    	)
    ) 
  ); 
  $wp_customize->add_control(
    new WP_Customize_Upload_Control( 
      $wp_customize, 
      'inverted_logo', 
        array(
    		'label'      => __( 'Inverted Logo', 'nimbly' ),
    		'section'    => 'theme_customizations',
    		'settings'   => 'inverted_logo',
    	)
    ) 
  ); 
  $wp_customize->add_control(
    new WP_Customize_Upload_Control( 
      $wp_customize, 
      'custom_background_image', 
        array(
    		'label'      => __( 'Custom Background Image', 'nimbly' ),
    		'section'    => 'theme_customizations',
    		'settings'   => 'custom_background_image',
    	)
    ) 
  ); 
  $wp_customize->add_control(
      new WP_Customize_Category_Control(
          $wp_customize,
          'featured_articles_category',
          array(
              'label'    => 'Featured Articles Category',
              'section'  => 'theme_customizations',
              'settings' => 'featured_articles_category',
          )
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

//Add custom Category control (Via http://code.tutsplus.com/articles/custom-controls-in-the-theme-customizer--wp-34556)
if (class_exists('WP_Customize_Control')) {
  class WP_Customize_Category_Control extends WP_Customize_Control {
    /**
     * Render the control's content.
     *
     * @since 3.4.0
     */
    public function render_content() {
      $dropdown = wp_dropdown_categories(
        array(
          'name'              => '_customize-dropdown-categories-' . $this->id,
          'echo'              => 0,
          'show_option_none'  => __( '&mdash; Select &mdash;' ),
          'option_none_value' => '0',
          'selected'          => $this->value(),
        )
      );

      // Hackily add in the data link parameter.
      $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
      printf(
        '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
        $this->label,
        $dropdown
      );
    }
  }
}
?>