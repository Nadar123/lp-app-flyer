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

/**
 * get rid of the “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:"
 * PARAMS: title
*/
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

/**
* deactivate new block editor
*/
function phi_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
  }
  add_action( 'after_setup_theme', 'phi_theme_support' );