<?php
  get_template_part('/functions/enqueue');
  get_template_part('/functions/child-helper');
  get_template_part('/functions/types');


  if( function_exists('add_theme_support') ) {
    // menu suppport 
    add_theme_support('menus');
    //Thumbnail theme support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1000, '', true);
    add_image_size('medium', 450, '', true);
    add_image_size('small', 250, '', true);

    //Theme Support for yoast
    add_theme_support('title-tag');
    //enable post and comment RSS feed links to head
    add_theme_support('automtic-feed-links');
    // enable support for wp galleries with figure tag
    add_theme_support('htnl5', array('gallery'));
  }

  // Remove default galleries css style
  add_filter('use_default_gallery_style', '__return_false');

  function cc_mine_types($mines) {
    $mines['svg'] = 'images/svg+xml';
    return $mines;
  }
  add_filter('upload_mimes', 'cc_mine_types');

  // option page ACF
  if(function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }


  // function fivers_features() {
  //   register_nav_menu('headerMenu', 'Header Menu');
  //   add_theme_support('title-tag');
  // }
  // add_action('after_setup_theme', 'fivers_features');


  // add_action('wp_ajax_nopriv_get_post_data', 'get_post_data');
  // add_action('wp_ajax_get_post_data', 'get_post_data');

  // function get_post_data(){
  //   if(empty($_POST['nonce'])) wp_die();
  //   if(wp_verify_nonce($_POST['nonce'], 'request_post')) {
    
  //     global $wpdb;
  //     $res = $wpdb->get_results("SELECT * FROM wp_post");
  //     wp_die();
  //   }
  // }

