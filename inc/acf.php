<?php
/****************************************
 * Required - ACF *
 ****************************************/
// Define path and URL to the ACF plugin.
define( 'BX_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'BX_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( BX_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'bx_acf_settings_url');
function bx_acf_settings_url( $url ) {
   return BX_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'bx_acf_settings_show_admin');
function bx_acf_settings_show_admin( $show_admin ) {
    return false;
}
