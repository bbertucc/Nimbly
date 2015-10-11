(function($) {
  
  //Toggle Minimized Navigation
  $(".navicon-button").click(function() {
    $(this).toggleClass("open");
  });
  
	//Stick Navigation - sticky-kit.min.js
	$( "#header, #hero" ).addClass("inside_sticky_area");
	$( ".inside_sticky_area" ).wrapAll( "<div id='sticky_wrapper' />");
	$("#header").stick_in_parent();
  $(window).resize(function () { $(document.body).trigger("sticky_kit:recalc") });

})( jQuery );