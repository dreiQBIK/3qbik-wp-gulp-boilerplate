<?php
/* *********************************************************************

 		PAGE
 			> GET_H_HEADER
 			> GET_CONTENT
			> GET_SIDEBAR
			> GET_F_FOOTER

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page.php</p>
<?php endif ?>



<div class="page">

	<?php
	/* ************************************************************************
				GET_H_HEADER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_header'); ?>


	<main class="page-main">

		<?php
		/* ************************************************************************
					GET_CONTENT
		*************************************************************************** */
		?>
		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. ?>

	</main>


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
