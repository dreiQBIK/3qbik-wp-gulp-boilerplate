<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="container">
		<div class="container--inner">

		    <p class="file-path"><span class="file-path--highlight">Datei-Info:&nbsp;</span>content-search.php</p>

			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">

					<?php dreiqbik_posted_on(); ?>

				</div><!-- .entry-meta -->
				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		</div>
	</section>

</article><!-- #post-## -->
