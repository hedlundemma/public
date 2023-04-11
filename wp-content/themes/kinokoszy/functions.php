<?php

// Create new custom types
add_action('init', function () {

    register_post_type('book', array(
        'labels' => array(
            'name' => __('Book'),
        ),
        'rewrite' => array('slug' => 'joanna/books'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('custom-field', 'title')
    ));

    register_post_type('photo', array(
        'labels' => array(
            'name' => __('Photo'),
        ),
        'rewrite' => array('slug' => 'joanna/photos'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('custom-field')
    ));

    register_post_type('film,', array(
        'labels' => array(
            'name' => __('Film'),
        ),
        'rewrite' => array('slug' => 'kino/films'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('custom-field', 'title')
    ));

    register_post_type('film-article,', array(
        'labels' => array(
            'name' => __('Film-article'),
        ),
        'public' => true,
        'supports' => array('custom-field', 'title')
    ));

    register_post_type('exhibition', array(
        'labels' => array(
            'name' => __('Exhibition'),
        ),
        'rewrite' => array('slug' => 'joanna/exhibitions'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('custom-field', 'title')

    ));
    register_nav_menus(array(
        'kino-nav-menu' => __('Kino Nav-Menu'),
        'joanna-nav-menu' => __('Joanna Nav-Menu'),
        'joanna-footer-menu' => __('Joanna Footer-Menu'),
        'kino-footer-menu' => __('Kino Footer-Menu')

    ));
});

// Register theme support
add_action('after_setup_theme', function () {
    add_theme_support('image');
    add_theme_support('paragraph');
    add_theme_support('url');
});

the_post_navigation(array(
    'prev_text'  => __('<< PREVIOUS BOOK'),
    'next_text'  => __('NEXT BOOK >>'),
));


function custom_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('exhibition', get_template_directory_uri() . '/assets/css/exhibition.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
    wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css');
    wp_enqueue_style('home-kino', get_template_directory_uri() . '/assets/css/home-kino.css');
    wp_enqueue_style('film', get_template_directory_uri() . '/assets/css/film.css');
    wp_enqueue_style('books', get_template_directory_uri() . '/assets/css/books.css');
    wp_enqueue_style('photos', get_template_directory_uri() . '/assets/css/photos.css');
    wp_enqueue_style('about-page', get_template_directory_uri() . '/assets/css/about-page.css');
}

function scripts()
{

    if (is_home()) {
        wp_enqueue_script('front-page-script', get_template_directory_uri() . '/assets/js/front-page.js', array(), false, true);
    }


    if (is_singular('film')) {
        wp_enqueue_script('single-film-script', get_template_directory_uri() . '/assets/js/single-film.js', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'custom_styles');
add_action('wp_enqueue_scripts', 'scripts');