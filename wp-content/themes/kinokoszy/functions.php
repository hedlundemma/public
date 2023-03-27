<?php

add_action('init', function (){
    // Create new custom type "Ice cream", needs to be its own context so we create it our self 
    register_post_type('films', array(
        'labels' => array(
            'name' => __('Films'),
        ),
        'public'=> true,
        'has_archive' => true
    ));
    
  
        
});