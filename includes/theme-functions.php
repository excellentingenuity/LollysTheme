<?php 
require_once('wp_bootstrap_navwalker.php');
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
		'walker' => new wp_bootstrap_navwalker()
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
?>