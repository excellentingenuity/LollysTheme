jQuery(document).ready(function( $ ) {

	/*
		Background slideshow (coming soon section)
	*/
	if(lolly_scripts_js_vars.coming_soon_bg.images_number == 1) {
		jQuery('.featured-fade-slideshow').backstretch(lolly_scripts_js_vars.coming_soon_bg.images_src);
	}
	else if(lolly_scripts_js_vars.coming_soon_bg.images_number > 1) {
		jQuery('.featured-fade-slideshow').backstretch(lolly_scripts_js_vars.coming_soon_bg.images_src, {duration: 3000, fade: 750});
	}
});