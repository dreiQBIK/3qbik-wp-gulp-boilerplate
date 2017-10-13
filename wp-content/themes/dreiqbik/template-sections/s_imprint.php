<?php
/* ********************************************************************

        S_IMPRINT.PHP

*********************************************************************** */
?>

<section class="container s_imprint">
    <div class="container__inner container__inner--s_imprint">

        <div class="s_imprint__content">
            <h1 class="heading-1 s_imprint__heading"><?php the_title(); ?></h1>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="text s_imprint__text">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

        </div>
    </div><!-- end container__inner -->
</section>