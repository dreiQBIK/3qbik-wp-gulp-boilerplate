<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package dreiQbik
 */

get_header(); ?>

    <?php if ( TEMPLATE_PATH ): ?>
    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>search.php</p>
    <?php endif ?>

	<main class="site__main">

		<?php
		if ( have_posts() ) : ?>

			<section class="container">
				<div class="container--inner">

					<header class="search__header">
						<h1 class="search__title"><?php printf( esc_html__( 'Suchergebnisse für: %s', 'dreiqbik' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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

	</main>

<?php
get_sidebar();
get_footer();
