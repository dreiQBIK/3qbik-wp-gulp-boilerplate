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

    <?php if ( TEMPLATE_PATH ): ?>
    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-search.php</p>
    <?php endif ?>

	<section class="container">
		<div class="container--inner">

			<header class="entry__header">
				<h2 class="entry__title"><a href="%s" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry__meta">
					<?php dreiqbik_posted_on(); ?>
				</div>
				<?php endif; ?>

			</header>

			<div class="entry__summary">
				<?php the_excerpt(); ?>
			</div>

		</div>
	</section>

</article>
