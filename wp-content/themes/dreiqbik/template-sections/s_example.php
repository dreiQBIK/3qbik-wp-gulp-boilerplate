<?php
/* ********************************************************************

        S_EXAMPLE.PHP
            > HEADING
            > CARDS

*********************************************************************** */
?>

<section class="container s_example">
    <div class="container__inner container__inner--s_example">

        <?php
        /* ************************************************************************
    				HEADING
    	*************************************************************************** */
        ?>

        <div class="s_example__heading-wrapper">
            <h1 class="heading-1 s_example__heading"><?php the_title(); ?></h1>
        </div>


        <?php
        /* ************************************************************************
    				CARDS
    	*************************************************************************** */
        ?>
        <div class="row">
            <div class="col col-xs-12 col-md-6">
                <div class="m_card h-equal-01">
                    <figure class="m_card__img-wrapper">
                        <img class="m_card__img" src="http://placehold.it/600x400">
                    </figure>
                    <div class="m_card__content">
                        <h3 class="m_card__heading m_card__number">2500</h3>
                        <p class="m_card__text">
                            Aenean commodo ligula eget dolor. Aenean massa.
                        </p>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col col-xs-12 col-md-6">
                <div class="m_card h-equal-01">
                    <figure class="m_card__img-wrapper">
                        <img class="m_card__img" src="http://placehold.it/600x400">
                    </figure>
                    <div class="m_card__content">
                        <h3 class="m_card__heading">Card</h3>
                        <p class="m_card__text">
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus.
                        </p>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- end container__inner -->
</section>
