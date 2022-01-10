<?php

function loadCssJs() {
    wp_register_style( 'style-css', esc_url( get_stylesheet_directory_uri() ) . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style( 'style-css' );

    wp_enqueue_script('jquery');

    wp_register_script('app-js', esc_url( get_stylesheet_directory_uri() ) . '/dist/app.js', ['jquery'], 1, true );
    wp_enqueue_script('app-js');

}
add_action( 'wp_enqueue_scripts', 'loadCssJs', 1001 );

  // function start_child_css() {
  //   //bootstrap-css
  //   wp_register_style( 'bootstrap-css', esc_url( get_stylesheet_directory_uri() ) . '/build/css/bootstrap/bootstrap.min.css', array(),time() );
  //   wp_enqueue_style( 'bootstrap-css' );

  //   //custom scss/css
  //   wp_register_style( 'main-style-child', esc_url( get_stylesheet_directory_uri() ) . '/build/css/style.css', array(),time() );
  //   wp_enqueue_style( 'main-style-child' );
  // }
  // add_action( 'wp_enqueue_scripts', 'start_child_css', 1001 );


  // function load_js () {

  //   //load popper.js
  //   wp_register_script('popper-js', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/popper.min.js', [], '1.0.0', true);
  //   wp_enqueue_script('popper-js');

  //   //load bootstrap.js
  //   wp_register_script('bootstrap-js', esc_url( get_stylesheet_directory_uri() ) . '../assets/js/bootstrap.min.js', [], '1.0.0', true);
  //   wp_enqueue_script('bootstrap-js');

  //   //load vue.js
  //   wp_register_script('vuejs', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/vue.js', [], '1.0.0', true);
  //   wp_enqueue_script('vuejs');

  //   //custom js
  //   wp_register_script('custom', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/app.js', array('jquery'), '1.0.0', true);
  //   wp_enqueue_script('main ');


  //   $site_settings = array(
  //     'nonce' => wp_create_nonce('request_post'),
  //     'ajaxurl' => admin_url( 'admin-ajax.php' ),
  //     'page_id' => get_the_ID(),
  //   );
  //   wp_localize_script( 'custom', 'site_settings', $site_settings );
  //   wp_enqueue_script('custom');

  // }
  // add_action('wp_enqueue_scripts', 'load_js');

  ?>
