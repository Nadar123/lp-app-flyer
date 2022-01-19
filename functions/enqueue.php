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
    wp_register_script( 'revies-widget', "//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js", 1, false );
    wp_enqueue_script( 'revies-widget' );

    wp_register_script('aos-js', "https://unpkg.com/aos@2.3.0/dist/aos.js", false );
    wp_enqueue_script('aos-js');


}
add_action( 'wp_enqueue_scripts', 'loadCssJs', 1001 );

  function font_css() {
    // font Raleway
    wp_register_style( 'google-font', "https://fonts.googleapis.com/css2?family=Patua+One&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" );
    wp_enqueue_style( 'google-font' );
    //
    wp_register_style( 'aos-css', "https://unpkg.com/aos@2.3.0/dist/aos.css"  );
    wp_enqueue_style( 'aos-css' );

  }
  add_action( 'wp_enqueue_scripts', 'font_css', 1001 );
