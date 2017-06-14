<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

?>

<section class="no-results not-found">

	<?php if ( TEMPLATE_PATH ): ?>
		<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-none.php</p>
	<?php endif ?>

	<header class="none-header">
		<h1 class="none-title"><?php esc_html_e( 'Nothing Found', 'dreiqbik' ); ?></h1>
	</header>

	<div class="none-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dreiqbik' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dreiqbik' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dreiqbik' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div>

</section>
