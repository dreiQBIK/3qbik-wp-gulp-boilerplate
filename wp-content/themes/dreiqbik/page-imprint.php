<?php
/* *********************************************************************

		Template Name: Page: Imprint

 		PAGE_IMPRINT
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
					S_IMPRINT
		*************************************************************************** */
		?>
		<section class="container container--s_imprint s_imprint">
			<div class="container__inner container__inner--s_imprint">

				<div class="s_imprint__content">
					<h1 class="heading-1 s_imprint__heading"><?php the_title(); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="text s_imprint__text">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>

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
