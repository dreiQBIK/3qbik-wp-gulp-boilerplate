<?php
/* *********************************************************************

		Template Name: Page: Contact

 		PAGE-CONTACT.PHP
 			> GET_H_MAIN
 			> GET_S_CONTACT
			> GET_S_FORM
			> GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-contact.php</p>
<?php endif ?>



<div class="page p_contact">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					GET_S_CONTACT
		*************************************************************************** */
		?>
		<?php get_template_part( 'template-sections/s_contact'); ?>


		<?php
		/* ************************************************************************
					GET_S_FORM
		*************************************************************************** */
		?>
		<?php get_template_part( 'template-sections/s_form'); ?>

	</main>


	<?php
	/* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_main'); ?>
	<?php get_footer(); ?>
