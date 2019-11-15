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
                    <div class="gallery__filter gallery__filter--active test" data-filter="*">ALL</div>
                    <div class='gallery__separator'>/</div>
                    <div class="gallery__filter" data-filter=".architektura">ARCHITECTURE</div>
                    <div class='gallery__separator'>/</div>
                    <div class="gallery__filter" data-filter=".portrety">PORTRAITS</div>
                    <div class='gallery__separator'>/</div>
                    <div class="gallery__filter" data-filter=".sport">SPORT</div>
                    <div class='gallery__separator'>/</div>
                    <div class="gallery__filter" data-filter=".pack-shot">PACK-SHOT</div>

                </div>
            </div>
            <div class="gallery__grid-wrapper gallery__grid-wrapper--grid">

                <?php if( have_rows('gallery') ): ?>
                <?php while ( have_rows('gallery') ) : the_row(); ?>
                <div class="gallery__gutter-sizer"></div>
                <a class="gallery__image-wrapper gallery__grid-sizer <?php the_sub_field('klasa'); ?>"
                    href=<?php the_sub_field('image'); ?> data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                    <img class="gallery__image" src=<?php the_sub_field('image'); ?> />
                </a>
                <?php endwhile; ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>


<!-- <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_03.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk"> <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_03.jpg" />
            </a>


            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_05.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk"> <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_05.jpg" />
            </a>


            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_07.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_07.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_10.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_10.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_14.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_14.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_17.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_17.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_20.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_20.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_21.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_21.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_21.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_24.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_28.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_28.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_29.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_29.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_30.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_30.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_33.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_33.jpg" />
            </a>

            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_36.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_36.jpg" />
            </a>
            <a class="gallery__image-wrapper"
                href="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_40.jpg"
                data-lightbox="gallery" data-title="fot. Paweł Tichoniuk">
                <img class="gallery__image"
                    src="<?php print(get_template_directory_uri()); ?>/assets/images/gallery/photo_40.jpg" />
            </a> -->