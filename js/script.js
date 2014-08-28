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
	if(lolly_scripts_js_vars.awards_background_bg.bg_type == 'image' && lolly_scripts_js_vars.awards_background_bg.image_src !== '') {
		jQuery('.awards-and-mentions').backstretch(lolly_scripts_js_vars.awards_background_bg.image_src);
	}


	//values boxes
	$('.values-inner').hover(function() {
		$(this).find('.values-content').animate({
			top: 0,
		}, 450);
		$(this).find('.values-inner-header').animate({
			top: '-.8em',
			lineHeight: '0.1em'
		}, 200);
	}, function() {
		$(this).find('.values-content').animate({
			top: '5em',
		}, 450);
		$(this).find('.values-inner-header').animate({
			top: 0,
			lineHeight:'1em'
		}, 200);
	});
});