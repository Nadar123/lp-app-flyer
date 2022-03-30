<?php
/**
 * Theme Support
 */
if( function_exists('add_theme_support') ) {
    // menu suppport 
    add_theme_support('menus');
    //Thumbnail theme support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1000, '', true);
    add_image_size('medium', 450, 200, true);
    add_image_size('small', 250, '', true);
    add_image_size('recent_posts', 100, 44, true);
    add_image_size('archive_posts', 450, 202, true);

    //Theme Support for yoast
    add_theme_support('title-tag');
    //enable post and comment RSS feed links to head
    add_theme_support('automtic-feed-links');
    // enable support for wp galleries with figure tag
    add_theme_support('htnl5', array('gallery'));
}

  // Remove default galleries css style
  add_filter('use_default_gallery_style', '__return_false');
/**
 * option page ACF
 *
*/
if(function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }
