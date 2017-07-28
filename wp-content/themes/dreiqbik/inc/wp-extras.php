<?php
/**
 * ***********************************************************************************************
 * THEME_EXTRAS
 *
 *  > CUSTOM_BODY_CLASSES
 *  > ADD_PINGBACK_URL
 *  >
 *
 * Custom functions that act independently of the theme templates.
 *
 * @package dreiQbik
 *********************************************************************************************** */


/**
 * ***********************************************************************************************
 * CUSTOM_BODY_CLASSES
 *
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 *********************************************************************************************** */

function dreiqbik_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'dreiqbik_body_classes' );


/**
 * ***********************************************************************************************
 * ADD_PINGBACK_URL
 *
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 *
 *********************************************************************************************** */

function dreiqbik_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'dreiqbik_pingback_header' );
