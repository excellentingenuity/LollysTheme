<?php 
require_once('wp_bootstrap_navwalker.php');
require_once('top_menu_walker.php');

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}

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

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
    );
    
    return $fields;
}
add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    return $args;
}
add_action('comment_form', 'bootstrap3_comment_button' );
function bootstrap3_comment_button() {
    echo '<button class="btn btn-default comment-submit-btn" type="submit">' . __( 'Leave comment' ) . '</button>';
}

/** add image support */
add_theme_support( 'post-thumbnails' );


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

function register_widgets() {
	register_sidebar( array(
		'name' => 'Subscribe Area',
		'id' => 'subscription_1',
		'before_widget' => '<div class="subscribe-container">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="subscribe-header">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Left',
		'id' => 'footer_left_1',
		'before_widget' => '<div class="footer-left">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-left-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => 'Footer Right',
		'id' => 'footer_right_1',
		'before_widget' => '<div class="footer-right">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-right-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Social Icons',
		'id' => 'footer_bar_social_icons',
		'before_widget' => '<div class="social-icons">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="social-icons-header hidden">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'register_widgets' );

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
			'speaker_with_heart_bg'=> array('bg_type' => $titan->getOption('speaker-background'), 'image_src' => get_image_source_from_titan_option($titan, 'speaker_with_heart_background')),
			'awards_background_bg'=> array('bg_type' => $titan->getOption('awards-background'), 'image_src' => get_image_source_from_titan_option($titan, 'awards_background_image')),
		)
    );
}
add_action('wp_enqueue_scripts', 'lolly_load_scripts');
?>