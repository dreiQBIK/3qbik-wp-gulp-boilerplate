<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

get_header(); ?>

    <?php if ( TEMPLATE_PATH ): ?>
    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>archive.php</p>
    <?php endif ?>

	<main class="site__main">

		<?php
		if ( have_posts() ) : ?>

			<section class="container">
				<div class="container--inner">

					<header class="archive__header">
						<h1 class="archive__heading"><?php the_archive_title(); ?></h1>
						<div class="archive__description"><?php the_archive_description(); ?></div>
					</header>

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

	</main>

<?php
get_sidebar();
get_footer();
