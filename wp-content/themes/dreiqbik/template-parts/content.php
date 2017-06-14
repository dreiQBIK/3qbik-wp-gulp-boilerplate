<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-article'); ?>>

	<section class="container">
		<div class="container--inner">

		    <?php if ( TEMPLATE_PATH ): ?>
		    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content.php</p>
		    <?php endif ?>

			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php dreiqbik_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dreiqbik' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dreiqbik' ),
						'after'  => '</div>',
					) );
				?>

			</div><!-- .entry-content -->

		</div>
	</section>

</article><!-- #post-## -->
