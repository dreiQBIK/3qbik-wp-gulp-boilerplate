<?php
/* *********************************************************************

 		CONTENT-NONE.PHP
			> HEADER
			> CONTENT

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-none.php</p>
<?php endif ?>

<section class="container c_none">
	<div class="container__inner container__inner--c_none">


		<?php
		/* ************************************************************************
					HEADER
		*************************************************************************** */
		?>
		<header class="c_none__header">
			<h1 class="heading-1 c_none__heading">
				<?php esc_html_e( 'Nothing Found', 'dreiqbik' ); ?>
			</h1>
		</header>


		<?php
		/* ************************************************************************
					CONTENT
		*************************************************************************** */
		?>
		<div class="c_none__content">

			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dreiqbik' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>
				<p> <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dreiqbik' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dreiqbik' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!-- end c_none__content -->
	</div><!-- end container__inner -->
</section>
