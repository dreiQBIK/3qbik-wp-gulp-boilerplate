<?php
/* *********************************************************************

 		PAGE-SINGLE.PHP
			> GET_H_MAIN
			> GET_CONTENT
            > GET_SIDEBAR
			> GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-single.php</p>
<?php endif ?>



<div class="page p_single">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

		<?php
        /* ************************************************************************
                    GET_CONTENT
        *************************************************************************** */
        ?>
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
		?>

			<section class="container container--s_single s_single">
				<div class="container__inner container__inner--s_single">

					<div class="n_wp-post">
						<?php the_post_navigation(); ?>
					</div>

				</div><!-- end container__inner -->
			</section>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
	</main>


	<?php
	/* ************************************************************************
				GET_SIDEBAR
	*************************************************************************** */
	?>
	<?php get_sidebar(); ?>


	<?php
	/* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_main'); ?>
	<?php get_footer(); ?>
