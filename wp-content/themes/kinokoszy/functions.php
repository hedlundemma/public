<?php

// Create new custom types
add_action('init', function () {

    register_post_type('book', array(
        'labels' => array(
            'name' => __('Book'),
        ),
        'public' => true,
        'has_archive' => true
    ));

    register_post_type('photo', array(
        'labels' => array(
            'name' => __('Photo'),
        ),
        'public' => true,
        'has_archive' => true
    ));

    register_post_type('film,', array(
        'labels' => array(
            'name' => __('Film'),
        ),
        'public' => true,
        'has_archive' => true
    ));

    register_post_type('exhibition', array(
        'labels' => array(
            'name' => __('Exhibition'),
        ),
        'public' => true,
        'has_archive' => true
    ));
                register_nav_menus(
                    array(
                'kino-nav-menu' => __('Kino Nav-Menu'),
                'joanna-nav-menu' => __('Joanna Nav-Menu')
                
            ));
        

});

function praxis_wp_nav_menu_args( $args = '' ) {
 
    if( is_front_page() ) { 
        $args['kino-nav-menu'] = 'Kino Nav-Menu';
    } else { 
        $args['joanna-nav-menu'] = 'Joanna Nav-Menu';
    } 
        return $args;
    }

function custom_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'front-page', get_template_directory_uri() . '/assets/css/front-page.css' );
}
add_action('wp_enqueue_scripts', 'custom_styles');