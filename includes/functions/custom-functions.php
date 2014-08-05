<?php

/*
 * Gets the src of the image uploaded by the user (in the theme options)
 */
function lolly_get_image_src($titan_instance, $option_id) {
	$image_id = $titan_instance->getOption( $option_id );
	$imageSrc = $image_id;
	if ( is_numeric( $image_id ) ) {
		$imageAttachment = wp_get_attachment_image_src( $image_id, "full" );
		$imageSrc = $imageAttachment[0];
	}
	return $imageSrc;
}

/*
 * Coming soon section background slideshow
 */
function lolly_coming_soon_slideshow($titan_instance, $option_id) {
	$array_ids = array();
	$image_id_1 = $titan_instance->getOption( $option_id . '1' );
	$image_id_2 = $titan_instance->getOption( $option_id . '2' );
	$image_id_3 = $titan_instance->getOption( $option_id . '3' );
	$image_id_4 = $titan_instance->getOption( $option_id . '4' );
	$image_id_5 = $titan_instance->getOption( $option_id . '5' );
	
	if(!empty($image_id_1)) { $array_ids[] = $image_id_1; }
	if(!empty($image_id_2)) { $array_ids[] = $image_id_2; }
	if(!empty($image_id_3)) { $array_ids[] = $image_id_3; }
	if(!empty($image_id_4)) { $array_ids[] = $image_id_4; }
	if(!empty($image_id_5)) { $array_ids[] = $image_id_5; }
	
	$images_number = count($array_ids);
	$return_text = "";
	// only one background image
	if ( $images_number == 1 ) {
		$imageSrc = $array_ids[0];
		if ( is_numeric( $array_ids[0] ) ) {
    		$imageAttachment = wp_get_attachment_image_src( $array_ids[0], "full" );
    		$imageSrc = $imageAttachment[0];
    	}
    	$return_text = $imageSrc;
	}
	// multiple background images
	elseif ( $images_number >= 1 ) {
		$return_text = array();
		foreach ( $array_ids as $k => $value ) {
			$imageSrc = $value;
			if ( is_numeric( $value ) ) {
	    		$imageAttachment = wp_get_attachment_image_src( $value, "full" );
	    		$imageSrc = $imageAttachment[0];
	    	}
	    	$return_text[] = $imageSrc;
		}
	}
	return array('images_src' => $return_text, 'images_number' => $images_number);
}

/*
 * Returns an array with the chosen sections to display, in the chosen order
 */
function lolly_chosen_sections($titan_instance) {
	$array_sections = array('2' => 'subscribe', '3' => 'the-project', '4' => 'testimonials', 
							'5' => 'about-us', '6' => 'contact');
	$array_active_sections = array();
	foreach($array_sections as $k => $value) {
		if($titan_instance->getOption('tab_' . $k . '_display') == true) {
			$array_active_sections[] = array('order' => $titan_instance->getOption('tab_' . $k . '_order'), 'section' => $value);
		}
	}
	usort($array_active_sections, function($a, $b) {
		return $a['order'] - $b['order'];
	});
	return $array_active_sections;
}

/*
 * Returns an array with the active top menu items
 */
function lolly_top_menu_items($titan_instance) {
	$array_section_containers = array('2' => 'subscribe-container', '3' => 'about-container', '4' => 'testimonials-container', 
							'5' => 'whos-behind-container', '6' => 'contact-container');
	$array_menu_items = array();
	foreach($array_section_containers as $k => $value) {
		if($titan_instance->getOption('tab_' . $k . '_display') == true) {
			$array_menu_items[] = array('order' => $titan_instance->getOption('tab_' . $k . '_order'),
										'section-container' => $value,
										'menu-item-name' => $titan_instance->getOption('tab_' . $k . '_menu_name'));
		}
	}
	usort($array_menu_items, function($a, $b) {
		return $a['order'] - $b['order'];
	});
	return $array_menu_items;
}

/*
 * Returns an array with the active boxes
 */
function lolly_active_boxes($titan_instance, $tab) {
	$array_active_boxes = array();
	for($i = 1; $i <= 6; $i++) {
		if($titan_instance->getOption($tab . '_box_' . $i . '_display') == true) {
			$array_active_boxes[] = $i;
		}
	}
	return $array_active_boxes;
}

/*
 * Returns an array with the member's active social icons
 */
function lolly_active_member_social_icons($titan_instance, $tab, $box) {
	$array_active_icons = array();
	for($i = 1; $i <= 4; $i++) {
		if($titan_instance->getOption($tab . '_box_' . $box . '_social_icon_' . $i) != "") {
			$array_active_icons[] = $i;
		}
	}
	return $array_active_icons;
}

/*
 * Returns an array with the active address lines
 */
function lolly_active_address_lines($titan_instance, $tab) {
	$array_active_lines = array();
	for($i = 1; $i <= 5; $i++) {
		if($titan_instance->getOption($tab . '_address_line_' . $i . '_icon') != "") {
			$array_active_lines[] = $i;
		}
	}
	return $array_active_lines;
}

/*
 * Returns an array with the active footer social icons
 */
function lolly_active_footer_social_icons($titan_instance, $tab) {
	$array_active_icons = array();
	for($i = 1; $i <= 6; $i++) {
		if($titan_instance->getOption($tab . '_icon_' . $i) != "") {
			$array_active_icons[] = $i;
		}
	}
	return $array_active_icons;
}

/*
 * Enqueue scripts
 */
function lolly_load_scripts() {
	$titan = TitanFramework::getInstance('lolly');
	wp_enqueue_script('lolly-bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.1.1', true);
	wp_enqueue_script('lolly-backstretch-js', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js', array('jquery'), '2.0.4', true);
	wp_enqueue_script('lolly-wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '0.1.9', true);
	wp_enqueue_script('lolly-countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), '2.0.2', true);
	wp_enqueue_script('lolly-maps-api-js', '//maps.google.com/maps/api/js?sensor=true', array('jquery'), null, true);
	wp_enqueue_script('lolly-ui-maps-js', get_template_directory_uri() . '/assets/js/jquery.ui.map.min.js', array('jquery'), null, true);
	wp_enqueue_script('lolly-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
	wp_localize_script('lolly-scripts-js', 'lolly_scripts_js_vars', array(
	        'timer_count_to'       => $titan->getOption('tab_1_timer'),
			'coming_soon_bg'       => lolly_coming_soon_slideshow($titan, 'tab_1_background_image_'),
			'subscribe_bg'         => array('bg_type' => $titan->getOption('tab_2_bg'), 'image_src' => lolly_get_image_src($titan, 'tab_2_bg_image')),
			'ajaxurl'              => admin_url('admin-ajax.php'),
			'nonce_subscribe'      => wp_create_nonce('lolly-nonce-subscribe'),
			'the_project_bg'       => array('bg_type' => $titan->getOption('tab_3_bg'), 'image_src' => lolly_get_image_src($titan, 'tab_3_bg_image')),
			'testimonials_bg'      => array('bg_type' => $titan->getOption('tab_4_bg'), 'image_src' => lolly_get_image_src($titan, 'tab_4_bg_image')),
			'about_us_bg'          => array('bg_type' => $titan->getOption('tab_5_bg'), 'image_src' => lolly_get_image_src($titan, 'tab_5_bg_image')),
			'contact_bg'           => array('bg_type' => $titan->getOption('tab_6_bg'), 'image_src' => lolly_get_image_src($titan, 'tab_6_bg_image')),
			'nonce_contact'        => wp_create_nonce('lolly-nonce-contact'),
			'contact_map'          => array('lat' => $titan->getOption('tab_6_map_latitude'), 'lng' => $titan->getOption('tab_6_map_longitude')),
		)
    );
}
add_action('wp_enqueue_scripts', 'lolly_load_scripts');

/*
 * Send subscription
 */
function lolly_send_subscription() {
	// check nonce
	$nonce = $_POST['nonce_subscribe']; 	
	if( ! wp_verify_nonce($nonce, 'lolly-nonce-subscribe'))
		die('Busted!');
	$titan = TitanFramework::getInstance('lolly');
	$emailTo = $titan->getOption('tab_2_email');
	$subscriber_email = addslashes(trim($_POST['email']));
	// generate the response
	$response = "";
	if( ! lolly_is_email($subscriber_email)) {
        $response = array('valid' => 0);
    }
    else {
        $response = array('valid' => 1);
        // Send email
	    $subject = 'New Subscriber (lolly wp)!';
	    $body = "You have a new subscriber!\n\nEmail: " . $subscriber_email;
	    mail($emailTo, $subject, $body);
    }
    // response output
	header("Content-Type: application/json");
	echo json_encode($response);
	exit;
}
add_action('wp_ajax_lolly-ajax-subscribe-action', 'lolly_send_subscription');
add_action('wp_ajax_nopriv_lolly-ajax-subscribe-action', 'lolly_send_subscription');

/*
 * Send contact message
 */
function lolly_send_contact_message() {
	// check nonce
	$nonce = $_POST['nonce_contact']; 	
	if( ! wp_verify_nonce($nonce, 'lolly-nonce-contact'))
		die('Busted!');		
    $titan = TitanFramework::getInstance('lolly');
	$emailTo = $titan->getOption('tab_6_contact_form_email');

    $clientEmail = addslashes(trim($_POST['email']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));

    // generate the response
    $response = array('emailMessage' => '', 'subjectMessage' => '', 'messageMessage' => '');

    if( ! lolly_is_email($clientEmail)) {
        $response['emailMessage'] = 'Invalid email!';
    }
    if($subject == '') {
        $response['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $response['messageMessage'] = 'Empty message!';
    }
    if(lolly_is_email($clientEmail) && $subject != '' && $message != '') {
        // Send email
		$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		mail($emailTo, $subject . " (lolly wp)", $message, $headers);
    }
    // response output
	header("Content-Type: application/json");
	echo json_encode($response);
	exit;
}
add_action('wp_ajax_lolly-ajax-contact-action', 'lolly_send_contact_message');
add_action('wp_ajax_nopriv_lolly-ajax-contact-action', 'lolly_send_contact_message');

/*
 * Email address verification
 */
function lolly_is_email($email) {
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

/*
 * HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
 */
function lolly_ie_html5_shim_respond() {
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
    echo '<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_footer', 'lolly_ie_html5_shim_respond', 20);

?>