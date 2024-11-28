<?php get_header(); ?>

<main class="about-page contact-page">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();

            the_content();
        endwhile;
    }
    ?>
</main>

<?php get_footer(); ?>
