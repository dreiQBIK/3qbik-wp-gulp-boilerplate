<?php
/* ********************************************************************

        _EXAMPLE.PHP
            > MODULE_01
            > MODULE_02

*********************************************************************** */
?>
<?php if ( TEMPLATE_PATH ): ?>
    <p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>_example.php</p>
<?php endif ?>

<section class="container s_SECTION-NAME">
    <div class="container__inner container__inner--s_SECTION-NAME">

        <?php
        /* ************************************************************************
    				MODULE_01
    	*************************************************************************** */
        ?>
        <?php get_template_part( 'template-modules/_example.php'); ?>


        <?php
        /* ************************************************************************
    				MODULE_02
    	*************************************************************************** */
        ?>
        <?php get_template_part( 'template-modules/_example.php'); ?>


    </div><!-- end container__inner -->
</section>
