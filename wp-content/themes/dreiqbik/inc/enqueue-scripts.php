<?php
/**
 * ***********************************************************************************************
 * ENQUEUE_SCRIPTS
 *
 *  > ENQUEUE_THEME_SCRIPTS
 *  > CHANGE_LOGIN_SCREEN_APPEARANCE
 *  >
 *
 * Enqueue Scripts and Stylesheets
 *
 * @package dreiQbik
 *********************************************************************************************** */


/**
 * ***********************************************************************************************
 * ENQUEUE_THEME_SCRIPTS
 *********************************************************************************************** */

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



/**
 * ***********************************************************************************************
 * CHANGE_LOGIN_SCREEN_APPEARANCE
 *********************************************************************************************** */

// Change logo img
function dreiqbik_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/dreiqbik-logo.png);
            height: 100px;
            width: 100px;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'dreiqbik_login_logo' );

// Enqueue CSS file
function dreiqbik_login_stylesheet() {
    wp_enqueue_style( 'dreiqbik-login', get_stylesheet_directory_uri() . '/login.css' );
}
add_action( 'login_enqueue_scripts', 'dreiqbik_login_stylesheet' );
