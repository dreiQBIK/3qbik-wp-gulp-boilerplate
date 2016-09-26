<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dreiQbik
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<h3 class="file-path">footer.php</h3>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dreiqbik' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dreiqbik' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dreiqbik' ), 'dreiqbik', '<a href="http://underscores.me/" rel="designer">dreiQbik</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
