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

	<section class="container container--entry">
		<div class="container__inner">

		    <?php if ( TEMPLATE_PATH ): ?>
		    	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content.php</p>
		    <?php endif ?>

			<header class="entry__header">
				<?php
				if ( is_single() ) : ?>

					<h1 class="entry__heading"><?php the_title(); ?></h1>

				<?php else : ?>

					<h2 class="entry__title"><a href="<?php echo esc_url( get_permalink() ); ?>" class="entry__link link link--inline" rel="bookmark"></a></h2>

				<?php endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry__meta">
					<?php dreiqbik_posted_on(); ?>
				</div>
				<?php
				endif; ?>
			</header>

			<div class="entry__content text">

				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dreiqbik' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="link link--inline">' . esc_html__( 'Pages:', 'dreiqbik' ),
						'after'  => '</div>',
					) );
				?>

			</div>

		</div>
	</section>

</article>
