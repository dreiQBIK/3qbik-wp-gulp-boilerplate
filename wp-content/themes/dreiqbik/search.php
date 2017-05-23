<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package dreiQbik
 */

get_header(); ?>

	<section id="primary" class="content-area">

        <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>search.php</p>

		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<section class="container">
					<div class="container--inner">

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'dreiqbik' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

					</div>
				</section>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
