<?php
/* *********************************************************************

 		SECTION_S_COMMENTS
			> NAV_COMMENTS_ABOVE
			> COMMENTS_LIST
			> NAV_COMMENTS_BELOW
			> NO_COMMENTS
			> COMMENTS_FORM

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>comments.php</p>
<?php endif ?>

<?php
	/*
	 * If the current post is protected by a password and
	 * the visitor has not yet entered the password we will
	 * return early without loading the comments.
	 */
	if ( post_password_required() ) {
		return;
	}
?>



<section class="container container--s_comments s_comments">
	<div class="container__inner container__inner--s_comments">
		<div class="s_comments__content">

			<?php if ( have_comments() ) : ?>
				<h2 class="heading-2 s_comments__heading">
					<?php
						printf( // WPCS: XSS OK.
							esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'dreiqbik' ) ),
							number_format_i18n( get_comments_number() ),
							'<span>' . get_the_title() . '</span>'
						);
					?>
				</h2>


				<?php
				/* ************************************************************************
							NAV_COMMENTS_ABOVE
				*************************************************************************** */
				?>
				<?php
					// Are there comments to navigate through?
					if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
					<nav class="n_comments--above">
						<h2 class="n_comments__heading screen-reader-text">
							<?php esc_html_e( 'Comment navigation', 'dreiqbik' ); ?>
						</h2>
						<div class="n_comments__links">
							<div class="n_comments__previous">
								<?php previous_comments_link( esc_html__( 'Older Comments', 'dreiqbik' ) ); ?>
							</div>
							<div class="n_comments__next">
								<?php next_comments_link( esc_html__( 'Newer Comments', 'dreiqbik' ) ); ?>
							</div>
						</div>
					</nav>

					<?php endif; // Check for comment navigation. ?>


					<?php
					/* ************************************************************************
								COMMENTS_LIST
					*************************************************************************** */
					?>
					<ol class="s_comments__list">
						<?php
							wp_list_comments( array(
								'style'      => 'ol',
								'short_ping' => true,
							) );
						?>
					</ol>


				<?php
				/* ************************************************************************
							NAV_COMMENTS_BELOW
				*************************************************************************** */
				?>
				<?php
					// Are there comments to navigate through?
					if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
					<nav class="n_comments n_comments--below" role="navigation">
						<h2 class="n_comments__heading screen-reader-text">
							<?php esc_html_e( 'Comment navigation', 'dreiqbik' ); ?>
						</h2>
						<div class="n_comments__links">
							<div class="n_comments__previous">
								<?php previous_comments_link( esc_html__( 'Older Comments', 'dreiqbik' ) ); ?>
							</div>
							<div class="n_comments__next">
								<?php next_comments_link( esc_html__( 'Newer Comments', 'dreiqbik' ) ); ?>
							</div>
						</div>
					</nav>

				<?php endif; // Check for comment navigation. ?>
			<?php endif; // Check for have_comments(). ?>


			<?php
			/* ************************************************************************
						NO_COMMENTS
			*************************************************************************** */
			?>
			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="h-no-comments">
					<?php esc_html_e( 'Comments are closed.', 'dreiqbik' ); ?>
				</p>

			<?php endif; ?>


			<?php
			/* ************************************************************************
						COMMENTS_FORM
			*************************************************************************** */
			?>
			<?php comment_form(); ?>


		</div><!-- end s_comments__content -->
	</div><!-- end container__inner -->
</section>
