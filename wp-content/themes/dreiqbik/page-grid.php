<?php
/* *********************************************************************

		Template Name: Page: Grid

 		PAGE_HOME
 			> GET_H_HEADER
 			> GET_S_EXAMPLE
			> GET_SIDEBAR
			> GET_F_FOOTER

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-grid.php</p>
<?php endif ?>



<div class="page p_home">

	<?php
	/* ************************************************************************
				GET_H_HEADER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_header'); ?>


	<main class="page-main">

        <?php
    	/* ************************************************************************
    				GRID_WITH_FLEXBOX
    	*************************************************************************** */
    	?>
        <section class="container conatainer--s_grid-01 s_grid">
            <div class="container__inner container__inner--s_grid-01">

                <div class="s_grid__wrapper">
                    <h1 class="heading-1 s_grid__heading">Grid with Flexbox</h1>

                    <div class="row row--flex">
                        <div class="col col--flex col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="s_grid__item">
                                <p>Grid-Item - Item with a lot more content than the others items can handle.</p>
                            </div>
                        </div>
                        <div class="col col--flex col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="s_grid__item">
                                <p>Grid-Item</p>
                            </div>
                        </div>
                        <div class="col col--flex col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="s_grid__item">
                                <p>Grid-Item - Item with more content</p>
                            </div>
                        </div>
                        <div class="col col--flex col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="s_grid__item">
                                <p>Grid-Item</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container__inner -->
        </section>


        <?php
    	/* ************************************************************************
    				GRID_SOME_GAPS
    	*************************************************************************** */
    	?>
        <section class="container conatainer--s_grid-01 s_grid">
            <div class="container__inner container__inner--s_grid-01">

                <div class="s_grid__wrapper">
                    <h1 class="heading-1 s_grid__heading">Grid with some Gaps</h1>

                    <div class="row row--no-wgap-sm row--no-wgap-lg">
                        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-3 col--no-wgap-sm col--no-wgap-lg col--no-hgap-sm">
                            <div class="s_grid__item">
                                <p>Grid-Item - Item with some content</p>
                            </div>
                        </div>
                        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-3 col--no-wgap-sm col--no-wgap-lg col--no-hgap-sm">
                            <div class="s_grid__item s_grid__item--dark">
                                <p>Grid-Item - Item with some content</p>
                            </div>
                        </div>
                        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-3 col--no-wgap-sm col--no-wgap-lg col--no-hgap-sm">
                            <div class="s_grid__item">
                                <p>Grid-Item - Item with some content</p>
                            </div>
                        </div>
                        <div class="col col-xs-12 col-sm-6 col-md-4 col-lg-3 col--no-wgap-sm col--no-wgap-lg col--no-hgap-sm">
                            <div class="s_grid__item s_grid__item--dark">
                                <p>Grid-Item - Item with some content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container__inner -->
        </section>

	</main><!-- end page__main -->


	<?php
	/* ************************************************************************
				GET_F_FOOTER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-footer/f_footer'); ?>
	<?php get_footer(); ?>
