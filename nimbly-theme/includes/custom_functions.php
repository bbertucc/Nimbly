<?php
//Add any Standard WordPress Action Hooks
function add_last_nav_item($items) {
  return $items .= '<li><div class="createsend-button" style="height:27px;display:inline-block;" data-listid="r/75/026/9B1/8D432290D3F9914D">
</div><script type="text/javascript">(function () { var e = document.createElement(\'script\'); e.type = \'text/javascript\'; e.async = true; e.src = (\'https:\' == document.location.protocol ? \'https\' : \'http\') + \'://btn.createsend1.com/js/sb.min.js?v=3\'; e.className = \'createsend-script\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(e, s); })();</script></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');

?>