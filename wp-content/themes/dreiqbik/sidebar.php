<?php
/* *********************************************************************

 		SIDEBAR.PHP

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>sidebar.php</p>
<?php endif ?>

<?php
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
?>



<section class="container s_sidebar">
    <div class="container__inner container__inner--s_sidebar">

        <aside class="s_sidebar__content">
        	<?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside>

    </div><!-- end container__inner -->
</section>
