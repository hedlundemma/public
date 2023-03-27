<?php



   
    
    
 // Create new custom type "books"
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

    
  
        
});

 // Create new custom type "books"
 add_action('init', function (){
   
    register_post_type('exhibition', array(
        'labels' => array(
            'name' => __('Exhibition'),
        ),
        'public'=> true,
        'has_archive' => true
    ));
    
  
        
});