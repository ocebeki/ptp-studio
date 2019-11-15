<?php

get_header();
?>

<?php  while ( have_posts() ) : the_post(); ?>
<main>
    <section class="contact">
        <div class="container">
            <div class="contact__outer-wrapper">
                <div class="contact__wrapper">
                    <div class="contact__title-wrapper">
                        <h1 class="contact__title">Get in touch with me</h1>
                        <div class="line line-black"></div>
                        <p class="contact__subtitle">Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała
                            zawartość strony, kiedy ten chce zobaczyć sam jej wygląd.</p>
                    </div>
                    <div class="contact__info-title-wrapper">
                        <div class="contact__info-title-left test">
                            <h2 class="contact__form-title">Contact<br /> details</h2>
                            <div class="line line-black"></div>
                        </div>
                        <div class="contact__info-title-right test visible">
                            <h2 class="contact__form-title">Contact<br /> form</h2>
                            <div class="line line-black"></div>
                        </div>
                    </div>
                    <div class="contact__form-wrapper">
                        <div class="contact__left">
                            <div class="contact__info-wrapper">
                                <p class="contact__form-subtitle">Contact Me</p>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">Location</h3>
                                    <p class="contact__form-info"><?php the_field('address'); ?></p>
                                </div>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">E-mail</h3>
                                    <p class="contact__form-info"><?php the_field('mail'); ?></p>
                                </div>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">Phone</h3>
                                    <p class="contact__form-info"> <?php the_field('phone'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__right contact__show-info">
                            <div class="contact__form contact__show-info">
                                <p class="contact__form-subtitle">Contact me, I will answer as soon as possible
                                    <?php echo do_shortcode('[contact-form-7 id="246" title="Contact eng"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main> <?php endwhile; ?> <?php

get_footer();   