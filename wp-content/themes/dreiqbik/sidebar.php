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

            <p class="file-path"><span class="file-path--highlight">Datei-Info:&nbsp;</span>sidebar.php</p>

        	<?php dynamic_sidebar( 'sidebar-1' ); ?>

        </div>
    </section>

</aside><!-- #secondary -->
