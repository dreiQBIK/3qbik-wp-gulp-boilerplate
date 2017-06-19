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

		<section class="container container--intro">
			<div class="container--inner">

				<h1 class="heading-1"><?php the_title(); ?></h1>
				<p class="text">Verwenden Sie dieses Formular, um uns eine Nachricht zu senden. Wir melden uns umgehend bei Ihnen!</p>

			</div>
		</section>

		<section class="container container--form">
			<div class="container--inner">

				<?php echo do_shortcode('[contact-form-7 id="18" title="Kontaktformular"]'); ?>

			</div>
		</section>

	</main>

<?php
get_footer();
