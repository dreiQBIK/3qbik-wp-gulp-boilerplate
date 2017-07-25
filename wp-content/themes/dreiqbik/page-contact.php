<?php
/* *********************************************************************

		Template Name: Page: Contact

 		PAGE_CONTACT
 			> GET_H_HEADER
 			> S_CONATCT
			> S_FORM
			> GET_F_FOOTER

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-contact.php</p>
<?php endif ?>



<div class="page p_contact">

	<?php
	/* ************************************************************************
				GET_H_HEADER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_header'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					S_CONTACT
		*************************************************************************** */
		?>
		<section class="container container--s_contact s_contact">
			<div class="container__inner container__inner--s_contact">

				<div class="s_contact__content">
					<h1 class="heading-1 s_contact_heading"><?php the_title(); ?></h1>
					<p class="text s_contact__text">
						Verwenden Sie dieses Formular, um uns eine Nachricht zu senden.
						Wir melden uns umgehend bei Ihnen!
					</p>
				</div>

			</div><!-- end container__inner -->
		</section>


		<?php
		/* ************************************************************************
					S_FORM
		*************************************************************************** */
		?>
		<section class="container container--s_form s_form">
			<div class="container__inner container__inner--s_form">

				<?php echo do_shortcode('[contact-form-7 id="18" title="Kontaktformular"]'); ?>

			</div><!-- end container__inner -->
		</section>

	</main>


	<?php
	/* ************************************************************************
				GET_F_FOOTER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_footer'); ?>
	<?php get_footer(); ?>
