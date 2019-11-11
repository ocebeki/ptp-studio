<?php

get_header();
?>

<?php  while ( have_posts() ) : the_post(); ?>
<main class="home">
    <?php get_template_part('components/hero'); ?>

    <?php get_template_part('components/gallery'); ?>

</main> <?php endwhile; ?> <?php

get_footer();   