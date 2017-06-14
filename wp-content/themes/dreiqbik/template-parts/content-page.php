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
		<div class="container--inner">

			<header class="entry__header">
				<h1 class="entry__title"><?php the_title(); ?></h1>
			</header>

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
	</section>


	<!-- GRID example -->
	<section class="container h-container--dom-rdy">
		<div class="container--inner">

			<div class="row">

				<div class="col col-xs-12 col-md-6">
					<div class="card h-equal-01">
						<figure class="card__img-wrapper">
							<img src="http://placehold.it/600x400" class="card__img">
						</figure>
						<div class="card__content">
							<h3 class="card__heading">Card</h3>
							<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa.</p>
						</div>
					</div>
				</div>
				<div class="col col-xs-12 col-md-6">
					<div class="card h-equal-01">
						<figure class="card__img-wrapper">
							<img src="http://placehold.it/600x400" class="card__img">
						</figure>
						<div class="card__content">
							<h3 class="card__heading">Card</h3>
							<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
					</div>
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
