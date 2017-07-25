<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( TEMPLATE_PATH ): ?>
    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-page.php</p>
    <?php endif ?>

	<section class="container">
		<div class="container__inner">

			<div class="entry">
				<h1 class="heading-1 entry__heading"><?php the_title(); ?></h1>

				<div class="entry__content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="site__links">' . esc_html__( 'Pages:', 'dreiqbik' ),
							'after'  => '</div>',
						) );
					?>
				</div>
			</div>

		</div>
	</section>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry__footer">

			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'dreiqbik' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>

		</footer>
	<?php endif; ?>

</article>
