<?php

function loadScript() {
    // webpack laravel mix css
    wp_register_style( 
      'style-css', 
      esc_url( get_stylesheet_directory_uri() ) . '/dist/app.css', 
      [], 1, 'all'
    );
    wp_enqueue_style( 'style-css' );

    // font Gilroy
    wp_register_style( 
      'font_gilroy',  
      esc_url( get_stylesheet_directory_uri() ) . '/dist/fonts/style.css', 
      [], 1, 'all'
    );
    wp_enqueue_style( 'font_gilroy' );

    //load jquery
    wp_enqueue_script('jquery');

    // webpack laravel mix js
    wp_register_script(
      'app-js', 
      esc_url( get_stylesheet_directory_uri() ) . 
      '/dist/app.js', ['jquery'], 
      1, true 
    );
    wp_enqueue_script('app-js');

}
add_action( 'wp_enqueue_scripts', 'loadScript', 1001 );