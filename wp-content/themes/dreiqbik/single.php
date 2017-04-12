<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dreiQbik
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<p class="file-path"><span class="file-path--highlight">Datei-Info:&nbsp;</span>single.php</p>

		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );
				?>

				<section class="container">
					<div class="container--inner">

						<div class="post-navigation">
							<?php the_post_navigation(); ?>
						</div>

					</div>
				</section>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
