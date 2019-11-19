<section class="gallery">
    <div class="container column">
        <div class=gallery__wrapper>
            <div class="gallery__text-wrapper">
                <div class="gallery__title-wrapper">
                    <h2 class="gallery__title">Portfolio</h2>
                    <div class="gallery__btn-wrapper">
                        <div class="gallery__btn gallery__btn--single">
                            <?php get_template_part('assets/images/svg/single.svg'); ?>
                        </div>
                        <div class="gallery__btn gallery__btn--grid gallery__btn--active">
                            <?php get_template_part('assets/images/svg/grid.svg'); ?>
                        </div>
                    </div>
                </div>
                <div class="gallery__filters-wrapper">
                    <?php if( have_rows('filters') ): 
                    $count = 0;
                     while ( have_rows('filters') ) : the_row(); ?>
                    <div class="gallery__filter <?php 
              if (!$count) { ?>gallery__filter--active<?php }?>" data-filter="<?php the_sub_field('category'); ?>">
                        <?php the_sub_field('filter'); ?></div>
                    <div class='gallery__separator'>/</div>
                    <?php 
                    $count++;
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="gallery__grid-wrapper gallery__grid-wrapper--grid" id="lightgallery">
                <?php if( have_rows('gallery') ): ?>
                <?php while ( have_rows('gallery') ) : the_row(); ?>
                <div class="gallery__gutter-sizer"></div>
                <a class="gallery__image-wrapper gallery__grid-sizer <?php the_sub_field('klasa'); ?> <?php the_sub_field('wszystkie'); ?>"
                    href=<?php the_sub_field('image'); ?>>
                    <img class="gallery__image" src=<?php the_sub_field('image'); ?> />
                </a>
                <?php endwhile; ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>