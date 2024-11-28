<?php get_header(); ?>

<h1>All News</h1>


<main class="news-container">
    <section class="news-list">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><strong>Published on:</strong> <?php the_date(); ?> | <strong>Category:</strong> <?php the_category(', '); ?></p>
                <div class="news-content">
                    <?php if (has_post_thumbnail()) { ?>
                        <img class="image" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>
                    <div class="description"><?php the_excerpt(); ?></div>
                </div>
            </article>
        <?php endwhile;
    } else {
        echo '<p>No posts available.</p>';
    }
    ?>
    </section>
</main>

<?php get_footer(); ?>
