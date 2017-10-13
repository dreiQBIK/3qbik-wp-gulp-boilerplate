<?php
/* *********************************************************************

 		CONTENT-SEARCH.PHP
			> HEADER
			> EXCERPT

************************************************************************ */
?>
<?php if ( TEMPLATE_PATH ): ?>
	<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>content-search.php</p>
<?php endif ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('container c_search'); ?>>
	<div class="container__inner">

		<div class="c_search__wrapper">

            <?php
            /* ************************************************************************
                        HEADER
            *************************************************************************** */
            ?>
			<header class="c_search__header">
				<h2 class="heading-2 c_search__heading">
                    <a href="<?php echo the_permalink(); ?>" rel="bookmark">
                        <?php the_title(); ?>
                    </a>
                </h2>

				<?php if ( 'post' === get_post_type() ) : ?>

    				<div class="m_wp-meta c_search__wp-meta">
    					<?php dreiqbik_posted_on(); ?>
    				</div>
				<?php endif; ?>
			</header>


            <?php
            /* ************************************************************************
                        EXCERPT
            *************************************************************************** */
            ?>
			<div class="m_wp-excerpt c_search__wp-excerpt">
				<?php the_excerpt(); ?>
			</div>

		</div><!-- end c_search__wrapper -->
	</div><!-- end container__inner -->
</article>
