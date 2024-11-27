<?php

function enqueue_page_specific_styles() {
  if (is_front_page() || is_home()) {
      wp_enqueue_style('home-css', get_template_directory_uri() . '/css/pages/home.css', array(), '1.0');
  } elseif (is_page('news')) {
    wp_enqueue_style('news-css', get_template_directory_uri() . '/css/pages/news-list.css', array(), '1.0');
  } elseif (is_page('about')) {
    wp_enqueue_style('about-css', get_template_directory_uri() . '/css/pages/about.css', array(), '1.0');
  } elseif (is_page('contact')) {
      wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/pages/contact.css', array(), '1.0');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_page_specific_styles');

function my_theme_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('menus');

}
add_action('after_setup_theme', 'my_theme_setup');
