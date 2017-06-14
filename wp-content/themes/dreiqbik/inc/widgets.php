<?php
/**
 * Register widget area.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package dreiQbik
 */


function dreiqbik_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'dreiqbik' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'dreiqbik' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'dreiqbik_widgets_init' );
