<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dreiQbik
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

    <section class="container">
        <div class="container--inner">

            <?php if ( TEMPLATE_PATH ): ?>
                <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>sidebar.php</p>
            <?php endif ?>

        	<?php dynamic_sidebar( 'sidebar-1' ); ?>

        </div>
    </section>

</aside><!-- #secondary -->
