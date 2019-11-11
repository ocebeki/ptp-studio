<section class="hero">
    <div class="container container-fluid">
        <div class="hero__prev-btn prev hero__slick-arrow">
            <img src="<?php print(get_template_directory_uri()); ?>/assets/images/001-left-arrow.png" />
        </div>
        <div class=" hero__text-wrapper">
            <h1 class="hero__title"><?php the_field('title'); ?></h1>
            <div class="line"></div>
            <p class="hero__subtitle"><?php the_field('subtitle'); ?> </p>
            <a class="hero__btn" href="#gallery">PORTFOLIO</a>
        </div>
        <div class="hero__wrapper">
            <?php if( have_rows('slider') ): ?>
            <?php while ( have_rows('slider') ) : the_row(); ?>
            <div class="hero__gallery">
                <div class="hero__item">
                    <img class="hero__image" src=<?php the_sub_field('image'); ?> />
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif;?>
        </div>
        <div class="hero__next-btn next hero__slick-arrow">
            <img src="<?php print(get_template_directory_uri()); ?>/assets/images/002-right-arrow.png" />
        </div>
    </div>
    <div id="gallery"></div>
</section>