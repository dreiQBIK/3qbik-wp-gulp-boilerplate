<?php
/* *********************************************************************

 		FOOTER_F_MAIN
 			> CONTENT

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>f_main.php</p>
<?php endif ?>



</div><!-- end page -->

<?php if (is_front_page()) : ?>
    <footer class="container container--f_main f_main container--no-hgap">
<?php else : ?>
    <footer class="container container--f_main f_main">
<?php endif; ?>
        <div class="container__inner container__inner--f_main">

            <?php
            /* ************************************************************************
                        CONTENT
            *************************************************************************** */
            ?>

            <div class="f_main__content">
                <p class="f_main__copy">
                    <span>&copy; 2017 | </span>
                    <a class="f_main__link" href="http://dreiqbik.de" target="_blank">dreiQBIK</a>
                </p>
            </div>

        </div><!-- end container__inner -->
    </footer>
