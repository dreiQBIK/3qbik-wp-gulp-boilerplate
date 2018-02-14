<?php
/**
 * ***********************************************************************************************
 * THEME_EXTRAS
 *
 *  > CHANGE_LOGIN_LOGO_URL
 *  > ADD_EXTRA_IMAGE_THUMBS
 *
 * Custom functions for this theme.
 *
 * @package dreiQbik
 *********************************************************************************************** */


/**
 * ***********************************************************************************************
 * CHANGE_LOGIN_LOGO_URL
 *********************************************************************************************** */

function dreiqbik_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'dreiqbik_login_logo_url' );



/**
 * ***********************************************************************************************
 * ADD_EXTRA_IMAGE_THUMBS
 *********************************************************************************************** */

// Make sure featured images are enabled
if ( function_exists('add_image_size') )  {
    add_theme_support( 'post-thumbnails' );
}
// Add featured image sizes
if ( function_exists('add_image_size') ) {
	add_image_size( 'own-thumb-xl', 1920, 9999 );
	add_image_size( 'own-thumb-l', 1600, 9999 );
    add_image_size( 'own-thumb-ml', 1200, 9999 );
    add_image_size( 'own-thumb-m', 900, 9999 );
    add_image_size( 'own-thumb-s', 600, 9999 );
    add_image_size( 'own-thumb-xs', 400, 9999 );

    //* Add new image sizes to media selection
    function post_image_sizes($sizes){
        $custom_sizes = array(
            'own-thumb-xl' => 'Special Size 1920w',
            'own-thumb-l'  => 'Special Size 1600w',
            'own-thumb-ml' => 'Special Size 1200w',
            'own-thumb-m'  => 'Special Size 900w',
            'own-thumb-s'  => 'Special Size 600w',
            'own-thumb-xs' => 'Special Size 400w'
        );
        return array_merge( $sizes, $custom_sizes );
    }
    add_filter('image_size_names_choose', 'post_image_sizes');
}
