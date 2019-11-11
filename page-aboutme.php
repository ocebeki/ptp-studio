<?php

get_header();
?>

<?php  while ( have_posts() ) : the_post(); ?>
<main>
    <section class="about-me">
        <div class="container about-me__container">
            <div class="about-me__wrapper">
                <div class="about-me__box-left">
                    <img class="about-me__img" src=<?php the_field('image'); ?> />
                </div>
                <div class="about-me__box-right">
                    <div class="about-me__title-wrapper">
                        <p class="about-me__introduction">KILKA SŁÓW O MNIE</p>
                        <h1 class="about-me__title"> <?php the_field('title'); ?></h1>
                        <div class="line line-black"></div>
                    </div>
                    <div class="about-me__text-wrapper">
                        <p class="about-me__text"><?php the_field('about_me_top'); ?></p>

                        <div class="about-me__read-more-wrapper">
                            <p class="about-me__read-more">CZYTAJ WIĘCEJ</p>
                            <div class="about-me__arrow">
                                <?php get_template_part('assets/images/svg/right-arrow.svg'); ?>
                            </div>
                        </div>
                        <?php if( have_rows('about_me__bottom') ): ?>
                        <div class="about-me__text-addition-wrapper">
                            <?php while ( have_rows('about_me__bottom') ) : the_row(); ?>
                            <p class="about-me__text about-me__text-additional">
                                <?php the_sub_field('text'); ?>
                            </p>
                            <?php endwhile; ?>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php endwhile; ?> <?php

get_footer();   