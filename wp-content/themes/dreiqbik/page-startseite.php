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
		<!-- END | GRID Example -->

	</main>

<?php
get_sidebar();
get_footer();
