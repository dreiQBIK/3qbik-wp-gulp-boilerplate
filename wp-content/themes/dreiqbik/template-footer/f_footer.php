<?php
/* *********************************************************************

 		FOOTER_F_FOOTER
 			> CONTENT

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>h_footer.php</p>
<?php endif ?>



</div><!-- end page -->

<?php if (is_front_page()) : ?>
    <footer class="container container--f_footer f_footer container--no-hgap">
<?php else : ?>
    <footer class="container container--f_footer f_footer">
<?php endif; ?>  
        <div class="container__inner container__inner--f_footer">

            <?php
            /* ************************************************************************
                        CONTENT
            *************************************************************************** */
            ?>

            <div class="f_footer__content">
                <p class="f_footer__copy">
                    <span>&copy; 2017 | </span>
                    <a class="f_footer__link" href="http://dreiqbik.de" target="_blank">dreiQBIK</a>
                </p>
            </div>

        </div><!-- end container__inner -->
    </footer>
