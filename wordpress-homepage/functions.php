<?php
function wordpress_homepage_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'wordpress_homepage_scripts');

function wordpress_homepage_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'wordpress-homepage')
    ]);
}
add_action('after_setup_theme', 'wordpress_homepage_setup');

function register_testimonials() {
    register_post_type('testimonial', [
        'label' => 'Testimonials',
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'register_testimonials');
?>
