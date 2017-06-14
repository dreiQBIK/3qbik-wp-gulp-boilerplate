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

	</div><!-- .site__content -->

	<footer class="site__footer">

        <?php if ( TEMPLATE_PATH ): ?>
            <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>footer.php</p>
        <?php endif ?>

		<div class="footer__info">
			<p class="footer__copy">&copy; 2017 | <a href="http://dreiqbik.de" target="_blank" class="footer__link">dreiQBIK</a></p>
		</div>

	</footer>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
