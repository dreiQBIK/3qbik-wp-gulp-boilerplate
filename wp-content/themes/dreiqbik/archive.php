<?php
/* *********************************************************************

 		PAGE_ARCHIVE
			> GET_H_HEADER
			> S_ARCHIVE
            > GET_CONTENT
            > GET_SIDEBAR
			> GET_F_FOOTER

************************************************************************ */
get_header();
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page-archive.php</p>
<?php endif ?>



<div class="page p_archive">

	<?php
	/* ************************************************************************
				GET_H_HEADER
	*************************************************************************** */
	?>
	<?php get_template_part( 'template-header/h_header'); ?>


	<main class="page-main">

        <?php
		/* ************************************************************************
					S_ARCHIVE
		*************************************************************************** */
		?>
    	<?php if ( have_posts() ) : ?>
    		<section class="container container--s_archive">
    			<div class="container__inner container__inner--s_archive">

    				<div class="s_archive__content">
						<h1 class="heading-1 s_archive__heading"><?php the_archive_title(); ?></h1>
						<div class="s_archive__description"><?php the_archive_description(); ?></div>
    				</div>

    			</div><!-- end container__inner -->
    		</section>


        <?php
        /* ************************************************************************
                    GET_CONTENT
        *************************************************************************** */
        ?>
        <?php
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();
    				get_template_part( 'template-parts/content', get_post_format() );
    			endwhile;

    			the_posts_navigation();

    		else :
    			get_template_part( 'template-parts/content', 'none' );
    		endif;
        ?>

    </main>


    <?php
    /* ************************************************************************
                GET_SIDEBAR
    *************************************************************************** */
    ?>
    <?php get_sidebar(); ?>


    <?php
    /* ************************************************************************
                GET_F_FOOTER
    *************************************************************************** */
    ?>
    <?php get_template_part( 'template-footer/f_footer'); ?>
    <?php get_footer(); ?>
