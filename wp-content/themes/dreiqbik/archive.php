<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

get_header(); ?>

	<div id="primary" class="content-area">

        <p class="file-path"><span class="file-path--highlight">Datei-Info:&nbsp;</span>archive.php</p>

		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<section class="container">
					<div class="container--inner">

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

					</div>
				</section>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
