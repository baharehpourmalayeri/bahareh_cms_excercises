<?php get_header(); ?>

<main class="single-news-page">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <p class="p50">
                <strong>Published on:</strong> <?php echo get_the_date(); ?> | <strong>Category:</strong> <?php echo get_the_category_list(', '); ?> | <strong>Author:</strong> <?php get_post_custom_values() ?>
            </p>
            <?php if (has_post_thumbnail()) { ?>
                <img class="image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
            <div class="p50 article">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
