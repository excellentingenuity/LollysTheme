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
	if(lolly_scripts_js_vars.speaker_with_heart_bg.bg_type == 'image' && lolly_scripts_js_vars.speaker_with_heart_bg.image_src !== '') {
		jQuery('.speaker-with-heart').backstretch(lolly_scripts_js_vars.speaker_with_heart_bg.image_src);
	}
});