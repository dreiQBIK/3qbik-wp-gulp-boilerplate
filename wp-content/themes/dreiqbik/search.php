<?php
/* *********************************************************************

 		SEARCH.PHP
 			> GET_H_MAIN
 			> S_SEARCH
            > GET_CONTENT_SEARCH
            > GET_SIDEBAR
			> GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-search.php</p>
<?php endif ?>



<div class="page p_search">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

        <?php if ( have_posts() ) : ?>

            <?php
    		/* ************************************************************************
    					S_SEARCH
    		*************************************************************************** */
    		?>
			<section class="container s_search">
				<div class="container__inner container__inner--s_search">

					<header class="s_search__header">
						<h1 class="heading-1 s_search__heading">
                            <?php printf( esc_html__( 'Suchergebnisse für: %s', 'dreiqbik' ), '<span>' . get_search_query() . '</span>' ); ?>
                        </h1>
					</header>

				</div><!-- end container__inner -->
			</section>


            <?php
    		/* ************************************************************************
    					GET_CONTENT_SEARCH
    		*************************************************************************** */
    		?>
			<?php
            /* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;

			the_posts_navigation();

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>

	</main>


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
