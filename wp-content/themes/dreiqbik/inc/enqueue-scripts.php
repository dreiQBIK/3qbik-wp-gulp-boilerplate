<?php
/**
 * Enqueue Scripts and Stylesheets
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package dreiQbik
 */


function dreiqbik_scripts() {
    // CSS files
    wp_enqueue_style('dreiqbik-style', get_template_directory_uri() . '/style.css');

    // JS files
    wp_enqueue_script( 'dreiqbik-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '160921', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'dreiqbik_scripts' );
