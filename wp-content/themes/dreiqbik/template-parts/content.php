<?php
/* *********************************************************************

 		CONTENT.PHP
			> HEADER
			> EXCERPT

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content.php</p>
<?php endif ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('container c_content'); ?>>
	<div class="container__inner">

		<div class="c_content__wrapper">

			<?php
			/* ************************************************************************
						HEADER
			*************************************************************************** */
			?>
			<header class="c_content__header">
				<?php

				if ( is_single() ) : ?>
					<h1 class="heading-1 c_content__heading"><?php the_title(); ?></h1>

				<?php else : ?>
					<h2 class="heading-2">
						<a class="link c_content__link" href="<?php echo esc_url( get_permalink() ); ?>"  rel="bookmark">Titel?</a>
					</h2>

				<?php endif;

				if ( 'post' === get_post_type() ) : ?>
					<div class="m_wp-meta c_content_wp-meta">
						<?php dreiqbik_posted_on(); ?>
					</div>
				<?php
				endif; ?>
			</header>


			<?php
			/* ************************************************************************
						CONTENT
			*************************************************************************** */
			?>
			<div class="m_wp-content c_content__content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dreiqbik' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="m_wp-content__links">' . esc_html__( 'Pages:', 'dreiqbik' ),
						'after'  => '</div>',
					) );
				?>
			</div>

		</div><!-- end c_content__wrapper -->
	</div><!-- end container__inner -->
</article>
