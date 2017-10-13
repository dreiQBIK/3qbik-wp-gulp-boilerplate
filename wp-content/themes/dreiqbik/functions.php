<?php
/**
 * ***********************************************************************************************
 * FUNCTIONS.PHP
 *
 *  > CORE_WORDPRESS_SETUP
 *  > REGISTER_WIDGET_AREA
 *  > ENQUEUE_SCRIPTS
 *  > CUSTOM_TEMPLATE_TAGS
 *  > CUSTOM_FUNCTIONS
 *  >
 *
 * Include functions for this theme.
 *
 * NOTE: Do not write any functions in this file - only file includes here.
 *********************************************************************************************** */


/**
 * ***********************************************************************************************
 * CORE_WORDPRESS_SETUP
 *********************************************************************************************** */

require get_template_directory() . '/inc/setup.php';


/**
 * ***********************************************************************************************
 * REGISTER_WIDGET_AREA
 *********************************************************************************************** */

require get_template_directory() . '/inc/widgets.php';


/**
 * ***********************************************************************************************
 * ENQUEUE_SCRIPTS
 *********************************************************************************************** */

require get_template_directory() . '/inc/enqueue-scripts.php';


/**
 * ***********************************************************************************************
 * CUSTOM_TEMPLATE_TAGS
 *********************************************************************************************** */

require get_template_directory() . '/inc/template-tags.php';


/**
 * ***********************************************************************************************
 * CUSTOM_FUNCTIONS
 *
 * Custom functions that act independently of the theme templates.
 *********************************************************************************************** */

require get_template_directory() . '/inc/wp-extras.php';
require get_template_directory() . '/inc/theme-extras.php';
