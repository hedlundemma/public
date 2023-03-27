<?php

// Create new custom types
add_action('init', function (){
   
    register_post_type('book', array(
        'labels' => array(
            'name' => __('Book'),
        ),
        'public'=> true,
        'has_archive' => true
    ));

    register_post_type('photo', array(
        'labels' => array(
            'name' => __('Photo'),
        ),
        'public'=> true,
        'has_archive' => true
    ));

    register_post_type('film,', array(
        'labels' => array(
            'name' => __('Film'),
        ),
        'public'=> true,
        'has_archive' => true
    ));

    register_post_type('exhibition', array(
        'labels' => array(
            'name' => __('Exhibition'),
        ),
        'public'=> true,
        'has_archive' => true
    ));

   

    
  
        
});