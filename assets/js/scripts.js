jQuery(document).ready(function() {

	/*
	    Wow
	*/
	new WOW().init();
	
    /*
	    Top menu
	*/
	jQuery('.show-menu a, .hide-menu a').tooltip();
	// show/hide menu
	jQuery('.show-menu a').on('click', function(e) {
		e.preventDefault();
		jQuery(this).fadeOut(100, function(){ jQuery('nav').slideDown(); });
	});
	jQuery('.hide-menu a').on('click', function(e) {
		e.preventDefault();
		jQuery('nav').slideUp(function(){ jQuery('.show-menu a').fadeIn(); });
	});
	// navigation
	jQuery('nav a.scroll-link').on('click', function(e) {
		e.preventDefault();
		var element_class = jQuery(this).attr('href').replace('#', '.');
		var scroll_to = 0;
		if(element_class != '.top') {
			scroll_to = jQuery(element_class).offset().top - jQuery('nav').height();
		}
		if(jQuery(window).scrollTop() != scroll_to) {
			jQuery('html, body').stop().animate({scrollTop: scroll_to}, 1000);
		}
	});
	
    /*
        Background slideshow (coming soon section)
    */
	if(lolly_scripts_js_vars.coming_soon_bg.images_number == 1) {
		jQuery('.coming-soon').backstretch(lolly_scripts_js_vars.coming_soon_bg.images_src);
	}
	else if(lolly_scripts_js_vars.coming_soon_bg.images_number > 1) {
		jQuery('.coming-soon').backstretch(lolly_scripts_js_vars.coming_soon_bg.images_src, {duration: 3000, fade: 750});
	}

	/*
		Fullscreen backgrounds
	*/
	if(lolly_scripts_js_vars.subscribe_bg.bg_type == 'image' && lolly_scripts_js_vars.subscribe_bg.image_src != '') {
		jQuery('.subscribe-container').backstretch(lolly_scripts_js_vars.subscribe_bg.image_src);
	}
	if(lolly_scripts_js_vars.the_project_bg.bg_type == 'image' && lolly_scripts_js_vars.the_project_bg.image_src != '') {
		jQuery('.about-container').backstretch(lolly_scripts_js_vars.the_project_bg.image_src);
	}
	if(lolly_scripts_js_vars.testimonials_bg.bg_type == 'image' && lolly_scripts_js_vars.testimonials_bg.image_src != '') {
		jQuery('.testimonials-container').backstretch(lolly_scripts_js_vars.testimonials_bg.image_src);
	}
	if(lolly_scripts_js_vars.about_us_bg.bg_type == 'image' && lolly_scripts_js_vars.about_us_bg.image_src != '') {
		jQuery('.whos-behind-container').backstretch(lolly_scripts_js_vars.about_us_bg.image_src);
	}
	if(lolly_scripts_js_vars.contact_bg.bg_type == 'image' && lolly_scripts_js_vars.contact_bg.image_src != '') {
		jQuery('.contact-container').backstretch(lolly_scripts_js_vars.contact_bg.image_src);
	}

    /*
        Countdown initializer
    */
    var countTo = lolly_scripts_js_vars.timer_count_to;
    jQuery('.timer').countdown(countTo, function(event) {
    	jQuery(this).find('.days').text(event.offset.totalDays);
    	jQuery(this).find('.hours').text(event.offset.hours);
    	jQuery(this).find('.minutes').text(event.offset.minutes);
    	jQuery(this).find('.seconds').text(event.offset.seconds);
    });
    
    /*
        Testimonials
    */
    jQuery('.testimonial-active').html('<div>' + jQuery('.testimonial-single:first .testimonial-single-text').html() + '</div>');
    jQuery('.testimonial-single:first .testimonial-single-image img').css('opacity', '1');
    
    jQuery('.testimonial-single-image img').on('click', function() {
    	jQuery('.testimonial-single-image img').css('opacity', '0.5');
    	jQuery(this).css('opacity', '1');
    	var new_testimonial_text = jQuery(this).parent('.testimonial-single-image').siblings('.testimonial-single-text').html();
    	jQuery('.testimonial-active div').fadeOut(300, function() {
    		jQuery(this).html(new_testimonial_text);
    		jQuery(this).fadeIn(400, function(){
    			if(lolly_scripts_js_vars.testimonials_bg.bg_type == 'image' && lolly_scripts_js_vars.testimonials_bg.image_src != '') {
    				// reload background
    				jQuery('.testimonials-container').backstretch("resize");
    			}
    		});
    	});
    });

    /*
	    Google maps
	*/
    var position = new google.maps.LatLng(lolly_scripts_js_vars.contact_map.lat, lolly_scripts_js_vars.contact_map.lng);
    jQuery('.contact-address .map').gmap({'center': position, 'zoom': 15, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() });	
        }
    });

    /*
        Subscription form
    */
    jQuery('.subscribe form').submit(function(e) {
    	e.preventDefault();        
        jQuery.post(lolly_scripts_js_vars.ajaxurl,
	    			{
	    				// wp ajax action
	    				action : 'lolly-ajax-subscribe-action',
	    				// vars
	    				email : jQuery('.subscribe form .subscribe-email').val(),
	    				// send the nonce along with the request
	    				nonce_subscribe : lolly_scripts_js_vars.nonce_subscribe
	    			},
	    			function(response) {
	    				if(response.valid == 0) {
	                        jQuery('.success-message, .error-message').hide();
	                        jQuery('.error-message').fadeIn(function(){
	                        	if(lolly_scripts_js_vars.subscribe_bg.bg_type == 'image' && lolly_scripts_js_vars.subscribe_bg.image_src != '') {
	                        		// reload background
		                			jQuery('.subscribe-container').backstretch("resize");
	                        	}
	                        });
	                    }
	                    else {
	                        jQuery('.success-message, .error-message, .subscribe form').hide();
	                        jQuery('.success-message').fadeIn(function(){
	                        	if(lolly_scripts_js_vars.subscribe_bg.bg_type == 'image' && lolly_scripts_js_vars.subscribe_bg.image_src != '') {
	                        		// reload background
		                			jQuery('.subscribe-container').backstretch("resize");
	                        	}
	                        });
	                    }
	    			}
    			);
        
    });
    
    /*
	    Contact form
	*/
    jQuery('.contact-form form input[type="text"], .contact-form form textarea').on('focus', function() {
    	jQuery('.contact-form form input[type="text"], .contact-form form textarea').removeClass('contact-error');
    });
	jQuery('.contact-form form').submit(function(e) {
		e.preventDefault();
	    jQuery('.contact-form form input[type="text"], .contact-form form textarea').removeClass('contact-error');
	    jQuery.post(lolly_scripts_js_vars.ajaxurl,
    			{
    				// wp ajax action
    				action : 'lolly-ajax-contact-action',
    				// vars
    				email : jQuery('.contact-form form .contact-email').val(),
    				subject : jQuery('.contact-form form .contact-subject').val(),
    				message : jQuery('.contact-form form .contact-message').val(),
    				// send the nonce along with the request
    				nonce_contact : lolly_scripts_js_vars.nonce_contact
    			},
    			function(response) {
    				if(response.emailMessage != '') {
    	                jQuery('.contact-form form .contact-email').addClass('contact-error');
    	            }
    	            if(response.subjectMessage != '') {
    	                jQuery('.contact-form form .contact-subject').addClass('contact-error');
    	            }
    	            if(response.messageMessage != '') {
    	                jQuery('.contact-form form .contact-message').addClass('contact-error');
    	            }
    	            if(response.emailMessage == '' && response.subjectMessage == '' && response.messageMessage == '') {
    	            	jQuery('.contact-form form').hide();
    	                jQuery('.contact-form .contact-success-message').fadeIn(function() {
    	                    if(lolly_scripts_js_vars.contact_bg.bg_type == 'image' && lolly_scripts_js_vars.contact_bg.image_src != '') {
                        		// reload background
	                			jQuery('.contact-container').backstretch("resize");
                        	}
    	                });
    	            }
    			}
			);
	});
	
	/*
		Old IE placeholders
	*/
	if (jQuery('html').is('.ie6, .ie7, .ie8, .ie9')) {
		var contact_email_placeholder = jQuery('.contact-email').attr('placeholder');
		var contact_subject_placeholder = jQuery('.contact-subject').attr('placeholder');
		var contact_message_placeholder = jQuery('.contact-message').attr('placeholder');
		var subscribe_email_placeholder = jQuery('.subscribe-email').attr('placeholder');
		jQuery('.contact-email, .contact-subject, .contact-message, .subscribe-email').removeAttr('placeholder');
		
		jQuery('.contact-email').val(contact_email_placeholder);
		jQuery('.contact-subject').val(contact_subject_placeholder);
		jQuery('.contact-message').text(contact_message_placeholder);
		jQuery('.subscribe-email').val(subscribe_email_placeholder);
    }

});