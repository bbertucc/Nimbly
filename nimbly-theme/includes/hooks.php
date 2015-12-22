<?php
  
  //Add Post Date
  function nimbly_post_meta() { 
        
    do_action( 'nimbly_post_meta' );
    
  }

  //Add Meta Share Buttons
  function nimbly_post_share_buttons() { 
    
    echo '<span class="share_buttons">Share: <a target="blank" href="https://twitter.com/home?status='.get_the_permalink().'"><i class="fa fa-twitter fa-lg"></i></a> <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'"><i class="fa fa-facebook fa-lg"></i></a> <a target="blank" href="https://www.linkedin.com/cws/share?url='.get_the_permalink().'"><i class="fa fa-linkedin fa-lg"></i></a></span>';
    
  }
  add_action('nimbly_post_meta','nimbly_post_share_buttons',2);

  //Add Meta Date
  function nimbly_post_data() { 
    
    echo '<span class="date">Posted: '.get_the_date().'</span>';
  
  }
  add_action('nimbly_post_meta','nimbly_post_data',1);


?>
