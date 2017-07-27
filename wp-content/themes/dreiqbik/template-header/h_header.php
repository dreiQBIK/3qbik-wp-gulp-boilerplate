<?php
/* *********************************************************************

 		HEADER_H_HEADER
 		     > NAVIGATION

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>h_header.php</p>
<?php endif ?>



<header class="container container--h_header container--no-hgap h_header">
    <div class="container__inner container__inner--h_header">

        <?php
        /* ************************************************************************
    				NAVIGATION
    	*************************************************************************** */
        ?>
		<div class="n_nav-wrapper">
		    <div class="n_nav-burger">
		        <span class='n_nav-burger__bar'></span>
		    </div>
		    <nav class="n_nav">
		        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		    </nav>
		</div>

    </div><!-- end container__inner -->
</header>
