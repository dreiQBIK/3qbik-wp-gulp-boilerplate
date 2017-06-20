<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

get_header(); ?>

	<?php if ( TEMPLATE_PATH ): ?>
		<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page.php</p>
	<?php endif ?>

	<main class="site__main">

		<section class="container container--imprint">
			<div class="container--inner">

				<h1 class="heading-1"><?php the_title(); ?></h1>

				<?php
				while ( have_posts() ) : the_post(); ?>

				<div class="imprint">
					<?php the_content(); ?>
				</div>

				<?php endwhile; ?>

			</div>
		</section>

	</main>

<?php
get_footer();
