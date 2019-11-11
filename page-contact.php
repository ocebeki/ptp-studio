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
                        <h1 class="contact__title">Skontaktuj się ze mną</h1>
                        <div class="line line-black"></div>
                        <p class="contact__subtitle">Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała
                            zawartość strony, kiedy ten chce zobaczyć sam jej wygląd.</p>
                    </div>
                    <div class="contact__info-title-wrapper">
                        <div class="contact__info-title-left test">
                            <h2 class="contact__form-title">Dane<br /> kontaktowe</h2>
                            <div class="line line-black"></div>
                        </div>
                        <div class="contact__info-title-right test visible">
                            <h2 class="contact__form-title">Formularz<br /> kontaktowy</h2>
                            <div class="line line-black"></div>
                        </div>
                    </div>
                    <div class="contact__form-wrapper">
                        <div class="contact__left">
                            <div class="contact__info-wrapper">
                                <p class="contact__form-subtitle">Skotanktuj się ze mną</p>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">Lokalizacja</h3>
                                    <p class="contact__form-info"><?php the_field('address'); ?></p>
                                </div>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">E-mail</h3>
                                    <p class="contact__form-info"><?php the_field('mail'); ?></p>
                                </div>
                                <div class=contact__row>
                                    <h3 class="contact__form-low-title">Telefon</h3>
                                    <p class="contact__form-info"> <?php the_field('phone'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__right contact__show-info">
                            <form method="post" class="contact__form contact__show-info" action="">
                                <p class="contact__form-subtitle">Wyślij do mnie wiadomość, odpisze tak szybko jak to
                                    możliwe.
                                </p>
                                <div class="contact__row-two-col">
                                    <input class="contact__input" type="text" placeholder="Imię" name="Name" />
                                    <input class="contact__input" type="text" name="Surrname" placeholder="Nazwisko" />
                                </div>
                                <div class="contact__row-two-col">
                                    <input class="contact__input" type="text" name="Email" placeholder="Email" />
                                    <input class="contact__input" type="text" name="Phone" placeholder="Telefon" />
                                </div>

                                <textarea class="contact__message" name="message" placeholder="Wiadomość"></textarea>
                                <button class="contact__btn" type="submit">WYŚLIJ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main> <?php endwhile; ?> <?php

get_footer();   