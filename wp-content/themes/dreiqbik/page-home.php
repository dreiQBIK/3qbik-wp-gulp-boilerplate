<?php
/* *********************************************************************

		Template Name: Page: Home

 		PAGE_HOME
 			> GET_H_HEADER
 			> GET_S_EXAMPLE
			> GET_SIDEBAR
			> GET_F_FOOTER

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-home.php</p>
<?php endif ?>



<div class="page p_home">

	<?php
	/* ************************************************************************
				GET_H_HEADER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_header'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					GET_S_EXAMPLE
		*************************************************************************** */
		?>
		<?php get_template_part( 'template-sections/s_example'); ?>

	</main><!-- end page__main -->


	<?php
	/* ************************************************************************
				GET_SIDEBAR
	*************************************************************************** */
	?>
	<?php get_sidebar(); ?>


	<?php
	/* ************************************************************************
				GET_F_FOOTER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_footer'); ?>
	<?php get_footer(); ?>
