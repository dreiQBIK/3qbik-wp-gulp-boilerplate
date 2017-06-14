<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dreiQbik
 */

get_header(); ?>

	<?php if ( TEMPLATE_PATH ): ?>
		<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>404.php</p>
	<?php endif ?>

	<main class="site__main">

		<div class="error-404 not-found">

			<section class="container">
				<div class="container--inner">

					<header class="error__header">
						<h1 class="error__title"><?php esc_html_e( 'Ups! Diese Seite wurde nicht gefunden.', 'dreiqbik' ); ?></h1>
					</header>

					<a href="/" class="btn">Zurück zur Startseite</a>

				</div>
			</section>

		</div>

	</main>

<?php
get_footer();
