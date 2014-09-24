<?php

 /*
 * When using the embedded framework, use it only if the framework
 * plugin isn't activated.
 */
 
// Don't do anything when we're activating a plugin to prevent errors
// on redeclaring Titan classes
if ( ! empty( $_GET['action'] ) && ! empty( $_GET['plugin'] ) ) {
    if ( $_GET['action'] == 'activate' ) {
        return;
    }
}
// Check if the framework plugin is activated
$useEmbeddedFramework = true;
$activePlugins = get_option('active_plugins');
if ( is_array( $activePlugins ) ) {
    foreach ( $activePlugins as $plugin ) {
        if ( is_string( $plugin ) ) {
            if ( stripos( $plugin, '/titan-framework.php' ) !== false ) {
                $useEmbeddedFramework = false;
                break;
            }
        }
    }
}
// Use the embedded Titan Framework
if ( $useEmbeddedFramework && ! class_exists( 'TitanFramework' ) ) {
    require_once( trailingslashit( dirname( __FILE__ ) ) . 'titan-framework/titan-framework.php' );
}

/** Titan Framework Configuration */
$titan = TitanFramework::getinstance( 'lolly' );

$panel = $titan->createAdminPanel(array("name" => "Lollys Theme Options"));
$homepanel = $panel->createAdminPanel(array("name" => "HomePage Options"));
$blogpanel = $panel->createAdminPanel(array("name" => "Blog Options"));

require_once('includes/tabs/general-options.php');
require_once('includes/tabs/home-page.php');
require_once('includes/tabs/blog-options.php');

// additional functions
require_once('includes/theme-functions.php');

?>