<?php
/* *********************************************************************

 		HEADER_H_MAIN
 		     > NAVIGATION

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>h_main.php</p>
<?php endif ?>



<header class="container container--h_main container--no-hgap h_main">
    <div class="container__inner container__inner--h_main">

        <?php
        /* ************************************************************************
    				NAVIGATION
    	*************************************************************************** */
        ?>
		<div class="n_main-wrapper">
		    <div class="n_main-burger">
		        <span class='n_main-burger__bar'></span>
		    </div>
		    <nav class="n_main">
		        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		    </nav>
		</div>

    </div><!-- end container__inner -->
</header>
