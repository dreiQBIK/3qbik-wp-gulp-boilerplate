<?php
/* *********************************************************************

 		CONTENT-PAGE.PHP
			> CONTENT
			> FOOTER

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-page.php</p>
<?php endif ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('container c_page'); ?>>
	<div class="container__inner">

        <?php
        /* ************************************************************************
                    CONTENT
        *************************************************************************** */
        ?>
		<div class="c_page__wrapper">
			<h1 class="heading-1 c_page__heading">
                <?php the_title(); ?>
            </h1>

			<div class="m_wp-content c_page__content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="m_wp-content__links">' . esc_html__( 'Pages:', 'dreiqbik' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div><!-- end c_page__wrapper -->
	</div><!-- end container__inner -->


    <?php
    /* ************************************************************************
                FOOTER
    *************************************************************************** */
    ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="c_page__footer">
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
