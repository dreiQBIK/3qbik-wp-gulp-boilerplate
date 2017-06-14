<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dreiQbik
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta name="description" content="Description Text">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<div class="site">

	<header class="site__header">

		<div id="h-breakpoint-js"></div>

		<?php if ( TEMPLATE_PATH ): ?>
			<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>header.php</p>
		<?php endif ?>

		<div class="nav-main__burger">
			<span class='nav-main__burger-bar'></span>
		</div>
		<nav class="nav-main">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>

	</header>

	<div class="site__content">
