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

	<section class="container container--search">
		<div class="container__inner">

			<div class="search__box">
				<header class="entry__header">
					<h2 class="entry__title"><a href="<?php echo the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

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

		</div>
	</section>

</article>
