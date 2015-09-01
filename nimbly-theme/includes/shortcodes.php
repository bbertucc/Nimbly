<?php
// [contact_form email=email_value]
function contact_form_shortcode( $atts ) {
  $admin_email = get_bloginfo('admin_email');
  $a = shortcode_atts( array(
    'email' => $admin_email, //Default to Admin Email
  ), $atts );
  return '
  <form>
    <span><label for="full_name">Full Name</label><input type="text" id="full_name"></span>
    <span><label for="email_address">Email Address</label><input type="text" id="email_address"></span>
    <label for="comments">Comments</label><textarea id="comments"></textarea>
    <button>Submit</button>
  </form>
  ';
}
add_shortcode( 'bartag', 'contact_form_shortcode' );

?>