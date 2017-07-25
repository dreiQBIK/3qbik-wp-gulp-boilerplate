<?php
/**
 * Core WordPress Setup
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package dreiQbik
 */


if ( ! function_exists( 'dreiqbik_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dreiqbik_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on dreiQbik, use a find and replace
     * to change 'dreiqbik' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'dreiqbik', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'dreiqbik' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'dreiqbik_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;
add_action( 'after_setup_theme', 'dreiqbik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dreiqbik_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'dreiqbik_content_width', 640 );
}
add_action( 'after_setup_theme', 'dreiqbik_content_width', 0 );



// Remove unwanted HTML comments
function remove_html_comments($content = '') {
	return preg_replace('/<!--(.|\s)*?-->/', '', $content);
}
