<?php get_header(); ?>

<main class="homepage">
    <h1>Popular</h1>
    <div class="content">

        <div class="popular-news-section">
            <?php

            $popular_posts = get_posts(array(
                'posts_per_page' => 2,
                'orderby' => 'rand',
            ));

            foreach ($popular_posts as $post) : setup_postdata($post); ?>
                <div class="popular-news-container">
                    <div class="popular-news">
                        <?php if (has_post_thumbnail()) { ?>
                            <img class="image" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        <div class="text-container">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <p class="date"><b>Published: </b><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>

    
        <div class="categories">
            <h4>Categories</h4>
            <ul>
                <?php
                $categories = get_categories();
                foreach ($categories as $cat) { ?>
                    <li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>
