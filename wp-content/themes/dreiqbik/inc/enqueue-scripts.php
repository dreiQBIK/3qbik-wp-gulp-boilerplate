<?php
/**
 * ***********************************************************************************************
 * ENQUEUE_SCRIPTS
 *
 * @package dreiQbik
 *********************************************************************************************** */


/**
 * ***********************************************************************************************
 * ENQUEUE_THEME_SCRIPTS
 *********************************************************************************************** */

function dreiqbik_scripts() {
    // CSS files
    if (WP_DEBUG) {
        wp_enqueue_style('dreiqbik-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'dreiqbik-login', get_stylesheet_directory_uri() . '/style-login.css' );
    } else {
        wp_enqueue_style('dreiqbik-style', get_template_directory_uri() . '/style.min.css');
        wp_enqueue_style( 'dreiqbik-login', get_stylesheet_directory_uri() . '/style-login.min.css' );
    }

    // JS files
    if (WP_DEBUG) {
        wp_enqueue_script( 'dreiqbik-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '16111501', true );
    } else {
        wp_enqueue_script( 'dreiqbik-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '16111501', true );
    }
}
add_action( 'wp_enqueue_scripts', 'dreiqbik_scripts' );


// Enqueue CSS file
function dreiqbik_login_stylesheet() {
    if (WP_DEBUG) {
        wp_enqueue_style( 'dreiqbik-login', get_stylesheet_directory_uri() . '/style-login.css' );
    } else {
        wp_enqueue_style( 'dreiqbik-login', get_stylesheet_directory_uri() . '/style-login.min.css' );
    }
}
add_action( 'login_enqueue_scripts', 'dreiqbik_login_stylesheet' );


// Connect the WordPress post editor to your custom stylesheet
function my_theme_add_editor_styles() {
  if (WP_DEBUG) {
      add_editor_style( 'style-tinymce.css' );
  } else {
      add_editor_style( 'style-tinymce.min.css' );
  }
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );
