<?php get_header(); ?>

<main class="homepage">
<?php
if (have_posts()) {
    while (have_posts()) : the_post();
        the_content();
    endwhile;
  }
?>

</main>

<?php get_footer(); ?>
