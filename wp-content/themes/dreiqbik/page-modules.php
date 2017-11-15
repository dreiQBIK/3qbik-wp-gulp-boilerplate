<?php
/* *********************************************************************

		Template Name: Page: Modules

 		PAGE-MODULES.PHP
 			> GET_H_MAIN
 			> GET_S_EXAMPLE
			> GET_SIDEBAR
			> GET_F_MAIN

************************************************************************ */
get_header();
?>


<div class="page p_modules">

    <?php
    /* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
    ?>
    <?php get_template_part( 'template-header/h_main'); ?>


    <main class="page-main">


        <div class="container">
            <div class="container__inner">

                <?php get_template_part( 'template-modules/m_example'); ?>

            </div>
        </div>


    </main><!-- end page__main -->


    <?php
    /* ************************************************************************
				GET_SIDEBAR
	*************************************************************************** */
    ?>
    <?php get_sidebar(); ?>


    <?php
    /* ************************************************************************
				GET_F_MAIN
	*************************************************************************** */
    ?>
    <?php get_template_part( 'template-footer/f_main'); ?>
    <?php get_footer(); ?>
