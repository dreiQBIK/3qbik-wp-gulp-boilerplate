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

		    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-page.php</p>

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
	<section class="container h-container--dom-rdy">
		<div class="container--inner">
			<div class="row">
				<div class="col col-xs-12 col-md-6">
					<div class="card h-equal-01">
						<img src="http://placehold.it/600x100" style="width:100%; height:auto; margin-bottom: 20px;">
						<br>
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-md-6">
					<div class="card h-equal-01">
						<img src="http://placehold.it/600x150" style="width:100%; height:auto; margin-bottom: 20px;">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container-inner -->
	</section>

	<section class="container">
		<div class="container--inner">
			<div class="row">
				<div class="col col-xs-12 col-sm-6 col-md-3">
					<div class="card h-equal-02">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-sm-6 col-md-3">
					<div class="card h-equal-02">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-sm-6 col-md-3">
					<div class="card h-equal-02">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
				<div class="col col-xs-12 col-sm-6 col-md-3">
					<div class="card h-equal-02">
						<h3 class="card__heading">Card</h3>
						<p class="card__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container-inner -->
	</section>

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
