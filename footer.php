<footer class="footer">
    <div class="container column">
        <div class="footer__wrapper">
            <div class="footer__copy-rights-wrapper">
                <p class="footer__copy-rights">© 2017 PTP Studio</p>
            </div>
            <div class="footer__icons-wrapper">
                <a class="footer__icon" href=<?php the_field('facebook_url', 26); ?>>
                    <?php get_template_part('assets/images/svg/fb-icon.svg'); ?>
                </a>
                <a class="footer__icon" href=<?php the_field('instagram_url',26); ?>>
                    <?php get_template_part('assets/images/svg/instagram.svg'); ?>
                </a>
                <a class="footer__icon" href=<?php the_field('google_url',26); ?>>
                    <?php get_template_part('assets/images/svg/google.svg'); ?>
                </a>
                <a class="footer__icon" href=<?php the_field('linkedin_url',26); ?>>
                    <?php get_template_part('assets/images/svg/linkedin.svg'); ?>
                </a>
            </div>
            <div class="footer__copy-rights-wrapper">
                <p class="footer__copy-rights">Projekt i realizacja: propercolors.pl</p>
            </div>
        </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>