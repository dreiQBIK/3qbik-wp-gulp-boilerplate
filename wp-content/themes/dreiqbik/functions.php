<?php
/* ********************************************************************

        INCLUDE_FUNCTIONS

*********************************************************************** */

/**
 * Core WordPress Setup
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register Widget Area
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue Scripts
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
