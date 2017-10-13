<?php
/* *********************************************************************

 		404.PHP
			> GET_H_MAIN
			> S_ERROR_404
			> GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-404.php</p>
<?php endif ?>



<div class="page p_error-404">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					S_ERROR_404
		*************************************************************************** */
		?>
		<section class="container container--s_error-404 s_error-404">
			<div class="container__inner container__inner--s_error-404">

				<div class="s_error-404__content">
					<h1 class="heading-1 s_error-404__heading"><?php esc_html_e( 'Ups! Diese Seite wurde nicht gefunden.', 'dreiqbik' ); ?></h1>
					<a class="m_btn m_btn--light s_error-404__btn" href="/"><?php esc_html_e( 'Zurück zur Startseite', 'dreiqbik' ); ?></a>
				</div>

			</div><!-- end container__inner -->
		</section>

	</main>

	<?php
	/* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_main'); ?>
	<?php get_footer(); ?>
