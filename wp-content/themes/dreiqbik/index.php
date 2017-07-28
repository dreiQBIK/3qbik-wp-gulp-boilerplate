<?php
/* *********************************************************************

 		WP_INDEX
            > GET_H_MAIN
            > GET_CONTENT
            > GET_SIDEBAR
            > GET_F_MAIN

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>index.php</p>
<?php endif ?>



<div class="page p_index">

	<?php
	/* ************************************************************************
				GET_H_MAIN
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_main'); ?>


	<main class="page-main">

        <?php
    	/* ************************************************************************
    				GET_CONTENT
    	*************************************************************************** */
    	?>
		<?php if ( have_posts() ) :

    			/* Start the Loop */
    			while ( have_posts() ) : the_post();
    				get_template_part( 'template-parts/content', get_post_format() );
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
