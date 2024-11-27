<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    <?php wp_head() ?>

<?php wp_body_open() ?>
</head>
<body <?php body_class(); ?>>

<header>
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo">
    </a>
    <?php wp_nav_menu(array('container' => 'nav')); ?>
</header>
