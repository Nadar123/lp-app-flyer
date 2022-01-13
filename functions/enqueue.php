<?php

function loadCssJs() {
    // webpack laravel mix css
    wp_register_style( 'style-css', esc_url( get_stylesheet_directory_uri() ) . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style( 'style-css' );

    //load jquery
    wp_enqueue_script('jquery');

    // webpack laravel mix js
    wp_register_script('app-js', esc_url( get_stylesheet_directory_uri() ) . '/dist/app.js', ['jquery'], 1, true );
    wp_enqueue_script('app-js');

    
    //TODO:: MOVE WIDGET TO WEBPACK
    wp_register_script( 'revies-widget', "//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js", 1, true );
    wp_enqueue_script( 'revies-widget' );

}
add_action( 'wp_enqueue_scripts', 'loadCssJs', 1001 );

  function font_css() {
    // font Raleway
    wp_register_style( 'google-font', "https://fonts.googleapis.com/css?family=Raleway:300,400,500,600&display=swap" );
    wp_enqueue_style( 'google-font' );

  }
  add_action( 'wp_enqueue_scripts', 'font_css', 1001 );




