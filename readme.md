# Nimbly Theme
A very nimble and easy-to-use WordPress theme by [Blake Bertuccelli].

### Admin Customizations
Nimbly includes a number of simple customizations. WordPress Administers can add a logo, update a background image, change segment titles, insert social media links, and add tracking codes using the WP Customizer under the Appearance menu. Nimbly also includes customizable widget areas in the footer and the ability to add a custom header menu.

### /developer
The "developer" folder can be used to further customize Nimbly. Developers can add [WordPress Action Hooks] to the "custom_functions.php" files, add their styles to "custom_styles.css" or add javascript to "custom_scripts.js". "/developer" will not be effected by future Nimbly updates, so any code that you write or files that you addcan can be stored in the folder.

**Custom Theme Hooks**
* `nimbly_post_meta`: Hook functions into the post page meta section. Additional actions hooked into `nimbly_post_meta` includes:
  * `nimbly_post_share_buttons`: Adds basic Facebook and Twitter share buttons.
  *`nimbly_post_data`: Adds the post date.
* `nimbly_hero`: Hook functions into the top hero section. Additional actions hooked into `nimbly_hero` include:
  * `nimbly_hero_content`: Adds optional hero images and video.
*More Nimbly-specific Action Hooks coming soon...*

### Custom Theme Hooks

* `nimbly_post_meta`: Hook function for a the meta section, right bellow a post's content. Additional actions hooked into `nimbly_post_meta` include:
  * `nimbly_post_share_buttons`: Adds basic Facebook and Twitter share buttons.
  * `nimbly_post_data`: Adds the post date.

*More Nimbly-specific hooks coming soon...*

### Post Customizations
Hero media can be added to each post or page and Nimbly includes a special sidebar meta section where users can add maps, images, or embed video content. All this custom content can be updated with editing any post or page.

### Custom Archives
Nimbly includes two templates for archive pages. When editing any page, select which template you want to use from the post layout dropdown. The "Custom Archive" is a full width, responsive layout that emphasizes images. The "Standard Archive" displays posts and excerpts in two fixed columns. Limit posts in the archives to a particular categories by updating the "Archive Categories" field. 

### Included Plugins
This theme includes the free [Advanced Custom Fields] plugin (version 4.4.3) and the [ACF Repeater Field plugin] (version 1.1.1). Nimbly also includes configured extra styles for the [Gravity Forms] plugin, [Sticky-kit], [jQuery], and the [Font Awesome] icon font.

### Design & Style
The design and style for Nimbly was inspired by the [Media Temple blog], which is built to standard Flat Design fundamentals.  

### Contributing to Nimbly
This is an Alpha release of Nimbly. Features may be completely scrapped and bugs may still need to be squashed. Feedback is much appreciated.

Thanks!

-Bb.

[WordPress Action Hooks]:https://codex.wordpress.org/Theme_Development#Plugin_API_Hooks
[Blake Bertuccelli]:https://www.linkedin.com/in/blakebertuccelli
[Advanced Custom Fields]:https://github.com/elliotcondon/acf
[ACF Repeater Field plugin]:http://www.advancedcustomfields.com/resources/repeater/y87rzmvcd82Ta6JK
[Gravity Forms]:http://www.gravityforms.com/
[Sticky-kit]:https://github.com/leafo/sticky-kit
[jQuery]:https://github.com/jquery
[Snazzy Maps]:https://snazzymaps.com/
[Font Awesome]:https://fortawesome.github.io/Font-Awesome/
[collection of custom controls]:https://github.com/paulund/wordpress-theme-customizer-custom-controls
[Media Temple blog]:http://mediatemple.com/blog
[collection of customizer controls]:https://github.com/paulund/wordpress-theme-customizer-custom-controls
