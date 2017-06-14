<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments__wrapper">

	<?php if ( TEMPLATE_PATH ): ?>
		<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>comments.php</p>
	<?php endif ?>

	<section class="container">
		<div class="container--inner">

			<div class="comments">

				<?php
				if ( have_comments() ) : ?>

					<h2 class="comments__title">
						<?php
							printf( // WPCS: XSS OK.
								esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'dreiqbik' ) ),
								number_format_i18n( get_comments_number() ),
								'<span>' . get_the_title() . '</span>'
							);
						?>
					</h2>

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
					<nav class="nav-comments--above" role="navigation">

						<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'dreiqbik' ); ?></h2>

						<div class="nav-comments__links">
							<div class="nav-comments__previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'dreiqbik' ) ); ?></div>
							<div class="nav-comments__next"><?php next_comments_link( esc_html__( 'Newer Comments', 'dreiqbik' ) ); ?></div>
						</div>

					</nav>
					<?php endif; // Check for comment navigation. ?>

					<ol class="comments__list">
						<?php
							wp_list_comments( array(
								'style'      => 'ol',
								'short_ping' => true,
							) );
						?>
					</ol>

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
					<nav class="nav-comments--below" role="navigation">

						<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'dreiqbik' ); ?></h2>

						<div class="nav-comments__links">

							<div class="nav-comments__previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'dreiqbik' ) ); ?></div>
							<div class="nav-comments__next"><?php next_comments_link( esc_html__( 'Newer Comments', 'dreiqbik' ) ); ?></div>

						</div>

					</nav>
					<?php
					endif; // Check for comment navigation.

				endif; // Check for have_comments().


				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

					<p class="h-no-comments"><?php esc_html_e( 'Comments are closed.', 'dreiqbik' ); ?></p>
				<?php
				endif;

				comment_form();
				?>

			</div>

		</div>
	</section>

</div><!-- #comments -->
