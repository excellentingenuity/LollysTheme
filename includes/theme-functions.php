<?php 
require_once('wp_bootstrap_navwalker.php');
require_once('top_menu_walker.php');
/**
 * Get source of image uploaded to titan option
 */
function get_image_source_from_titan_option($titan, $option_id)
{
	$image_id = $titan->getOption( $option_id);
	$image_source = $image_id;
	if ( is_numeric( $image_id ) ) {
		$imageAttachment = wp_get_attachment_image_src( $image_id, "full" );
		$image_source = $imageAttachment[0];
	}
	return $image_source;
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

/** default menu retrival function */
function get_menu($args)
{
	return wp_nav_menu($args);
}
/** function to retrieve the top nav menu */
function get_top_menu($menu_name)
{
	$args = array(
		'theme_location'  => '',
		'menu'            => $menu_name,
		'depth' => 2,
		'container' => false,
		'menu_class' => 'nav navbar-nav',
		'fallback_cb' => 'wp_page_menu',
		//Process nav menu using our custom nav walker
		'walker' => new top_menu_walker()
	);
	return get_menu($args);
}

/** Register Menu Support in the theme */
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Naviagition Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function lolly_load_scripts() {
	$titan = TitanFramework::getInstance('lolly');
	wp_enqueue_script('lolly-backstretch-js', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), '2.0.4', true);
	wp_enqueue_script('lolly-wow-js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '0.1.9', true);
	wp_enqueue_script('lolly-maps-api-js', '//maps.google.com/maps/api/js?sensor=true', array('jquery'), null, true);
	wp_enqueue_script('lolly-ui-maps-js', get_template_directory_uri() . '/js/jquery.ui.map.min.js', array('jquery'), null, true);
	wp_enqueue_script('lolly-scripts-js', get_template_directory_uri() . '/js/script.js', array(), null, true);
	wp_localize_script('lolly-scripts-js', 'lolly_scripts_js_vars', array(
			'coming_soon_bg'       => lolly_coming_soon_slideshow($titan, 'header_slider_image_'),
			'ajaxurl'              => admin_url('admin-ajax.php'),
		)
    );
}
add_action('wp_enqueue_scripts', 'lolly_load_scripts');
?>