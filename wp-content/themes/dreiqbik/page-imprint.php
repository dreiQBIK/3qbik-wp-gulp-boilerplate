<?php
/* *********************************************************************

		Template Name: Page: Imprint

 		PAGE-IMPRINT.PHP
 			> GET_H_MAIN
 			> S_IMPRINT
			> GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-imprint.php</p>
<?php endif ?>



<div class="page p_imprint">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					GET_S_IMPRINT
		*************************************************************************** */
		?>
		<?php get_template_part( 'template-sections/s_imprint'); ?>

	</main>


	<?php
	/* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_main'); ?>
	<?php get_footer(); ?>
