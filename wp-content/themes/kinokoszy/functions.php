<?php

// Create new custom type "film"
add_action('init', function () {

    register_post_type('film', array(
        'labels' => array(
            'name' => __('Film'),
        ),
        'public' => true,
        'has_archive' => true
    ));
});
// Create new custom type "book"
add_action('init', function () {

    register_post_type('book', array(
        'labels' => array(
            'name' => __('Book'),
        ),
        'public' => true,
        'has_archive' => true
    ));
});

// Create new custom type "exhibition"
add_action('init', function () {

    register_post_type('exhibition', array(
        'labels' => array(
            'name' => __('Exhibition'),
        ),
        'public' => true,
        'has_archive' => true
    ));
});
