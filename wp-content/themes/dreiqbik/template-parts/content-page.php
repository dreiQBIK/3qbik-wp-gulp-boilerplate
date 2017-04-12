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

	<section class="container">
		<div class="container--inner">

		    <p class="file-path"><span class="file-path--highlight">Datei-Info:&nbsp;</span>content-page.php</p>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">

					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dreiqbik' ),
							'after'  => '</div>',
						) );
					?>

			</div><!-- .entry-content -->

		</div>
	</section>


	<!-- GRID example -->
	<section class="container">
		<div class="container--inner">
			<div class="row">
				<div class="col col-xs-12 col-md-6">
					<div class="card">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-md-6">
					<div class="card">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12 col-md-6">
					<div class="card">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-md-6">
					<div class="card">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container teaser--fullwidth">
			<div class="container--inner">
				<h3>Full-Width-Section</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			</div>
		</div>
	</section>
	<!-- end GRID example -->


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">

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

		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-## -->
