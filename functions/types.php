<?php
// Register Custom Taxonomy
function field_stater_wordpress_taxonomy () {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'stater-wordpress' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'stater-wordpress' ),
		'menu_name'                  => __( 'Category', 'stater-wordpress' ),
		'all_items'                  => __( 'All Categories', 'stater-wordpress' ),
		'parent_item'                => __( 'Parent Item', 'stater-wordpress' ),
		'parent_item_colon'          => __( 'Parent Item:', 'stater-wordpress' ),
		'new_item_name'              => __( 'New Item Name', 'stater-wordpress' ),
		'add_new_item'               => __( 'Add New Item', 'stater-wordpress' ),
		'edit_item'                  => __( 'Edit Item', 'stater-wordpress' ),
		'update_item'                => __( 'Update Item', 'stater-wordpress' ),
		'view_item'                  => __( 'View Item', 'stater-wordpress' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'stater-wordpress' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'stater-wordpress' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'stater-wordpress' ),
		'popular_items'              => __( 'Popular Items', 'stater-wordpress' ),
		'search_items'               => __( 'Search Items', 'stater-wordpress' ),
		'not_found'                  => __( 'Not Found', 'stater-wordpress' ),
		'no_terms'                   => __( 'No items', 'stater-wordpress' ),
		'items_list'                 => __( 'Items list', 'stater-wordpress' ),
		'items_list_navigation'      => __( 'Items list navigation', 'stater-wordpress' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'stater_taxonomy', array( 'field_taxonomy' ), $args );
}
add_action( 'init', 'field_stater_wordpress_taxonomy', 0 );


/** 
 *advanced forex post 
 */
if ( ! function_exists('fivers_forex_post_types') ) {
  // Register Custom Post Type
  function fivers_forex_post_types() {

    $labels = array(
      'name'                  => _x( 'advanced forex', 'Post Type General Name', 'the5ers' ),
      'singular_name'         => _x( 'advanced forex', 'Post Type Singular Name', 'the5ers' ),
      'menu_name'             => __( 'Advanced Forex', 'the5ers' ),
      'name_admin_bar'        => __( 'advanced forex', 'the5ers' ),
      'archives'              => __( 'Item Archives', 'the5ers' ),
      'attributes'            => __( 'Item Attributes', 'the5ers' ),
      'parent_item_colon'     => __( 'Parent Item:', 'the5ers' ),
      'all_items'             => __( 'All Items', 'the5ers' ),
      'add_new_item'          => __( 'Add New Item', 'the5ers' ),
      'add_new'               => __( 'Add New', 'the5ers' ),
      'new_item'              => __( 'New Item', 'the5ers' ),
      'edit_item'             => __( 'Edit Item', 'the5ers' ),
      'update_item'           => __( 'Update Item', 'the5ers' ),
      'view_item'             => __( 'View Item', 'the5ers' ),
      'view_items'            => __( 'View Items', 'the5ers' ),
      'search_items'          => __( 'Search Item', 'the5ers' ),
      'not_found'             => __( 'Not found', 'the5ers' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'the5ers' ),
      'featured_image'        => __( 'Featured Image', 'the5ers' ),
      'set_featured_image'    => __( 'Set featured image', 'the5ers' ),
      'remove_featured_image' => __( 'Remove featured image', 'the5ers' ),
      'use_featured_image'    => __( 'Use as featured image', 'the5ers' ),
      'insert_into_item'      => __( 'Insert into item', 'the5ers' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'the5ers' ),
      'items_list'            => __( 'Items list', 'the5ers' ),
      'items_list_navigation' => __( 'Items list navigation', 'the5ers' ),
      'filter_items_list'     => __( 'Filter items list', 'the5ers' ),
    );
    $args = array(
      'label'                 => __( 'advanced forex', 'the5ers' ),
      'description'           => __( 'advanced forex', 'the5ers' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'advanced forex', $args );

  }
  add_action( 'init', 'fivers_forex_post_types', 0 );
}

/** 
 *trader interviews post 
 */

if ( ! function_exists('fivers_trader_post_types') ) {
  // Register Custom Post Type
  function fivers_trader_post_types() {

    $labels = array(
      'name'                  => _x( 'trader interviews', 'Post Type General Name', 'the5ers' ),
      'singular_name'         => _x( 'trader interviews', 'Post Type Singular Name', 'the5ers' ),
      'menu_name'             => __( 'Trader Interviews', 'the5ers' ),
      'name_admin_bar'        => __( 'trader interviews', 'the5ers' ),
      'archives'              => __( 'Item Archives', 'the5ers' ),
      'attributes'            => __( 'Item Attributes', 'the5ers' ),
      'parent_item_colon'     => __( 'Parent Item:', 'the5ers' ),
      'all_items'             => __( 'All Items', 'the5ers' ),
      'add_new_item'          => __( 'Add New Item', 'the5ers' ),
      'add_new'               => __( 'Add New', 'the5ers' ),
      'new_item'              => __( 'New Item', 'the5ers' ),
      'edit_item'             => __( 'Edit Item', 'the5ers' ),
      'update_item'           => __( 'Update Item', 'the5ers' ),
      'view_item'             => __( 'View Item', 'the5ers' ),
      'view_items'            => __( 'View Items', 'the5ers' ),
      'search_items'          => __( 'Search Item', 'the5ers' ),
      'not_found'             => __( 'Not found', 'the5ers' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'the5ers' ),
      'featured_image'        => __( 'Featured Image', 'the5ers' ),
      'set_featured_image'    => __( 'Set featured image', 'the5ers' ),
      'remove_featured_image' => __( 'Remove featured image', 'the5ers' ),
      'use_featured_image'    => __( 'Use as featured image', 'the5ers' ),
      'insert_into_item'      => __( 'Insert into item', 'the5ers' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'the5ers' ),
      'items_list'            => __( 'Items list', 'the5ers' ),
      'items_list_navigation' => __( 'Items list navigation', 'the5ers' ),
      'filter_items_list'     => __( 'Filter items list', 'the5ers' ),
    );
    $args = array(
      'label'                 => __( 'trader interviews', 'the5ers' ),
      'description'           => __( 'trader interviews', 'the5ers' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'Trader Interviews', $args );

  }
  add_action( 'init', 'fivers_trader_post_types', 0 );
}


/** 
 *trading_room post 
 */
if ( ! function_exists('fivers_trading_room_post_types') ) {
  // Register Custom Post Type
  function fivers_trading_room_post_types() {

    $labels = array(
      'name'                  => _x( 'trading Room', 'Post Type General Name', 'the5ers' ),
      'singular_name'         => _x( 'trading room', 'Post Type Singular Name', 'the5ers' ),
      'menu_name'             => __( 'trading room', 'the5ers' ),
      'name_admin_bar'        => __( 'trading room', 'the5ers' ),
      'archives'              => __( 'Item Archives', 'the5ers' ),
      'attributes'            => __( 'Item Attributes', 'the5ers' ),
      'parent_item_colon'     => __( 'Parent Item:', 'the5ers' ),
      'all_items'             => __( 'All Items', 'the5ers' ),
      'add_new_item'          => __( 'Add New Item', 'the5ers' ),
      'add_new'               => __( 'Add New', 'the5ers' ),
      'new_item'              => __( 'New Item', 'the5ers' ),
      'edit_item'             => __( 'Edit Item', 'the5ers' ),
      'update_item'           => __( 'Update Item', 'the5ers' ),
      'view_item'             => __( 'View Item', 'the5ers' ),
      'view_items'            => __( 'View Items', 'the5ers' ),
      'search_items'          => __( 'Search Item', 'the5ers' ),
      'not_found'             => __( 'Not found', 'the5ers' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'the5ers' ),
      'featured_image'        => __( 'Featured Image', 'the5ers' ),
      'set_featured_image'    => __( 'Set featured image', 'the5ers' ),
      'remove_featured_image' => __( 'Remove featured image', 'the5ers' ),
      'use_featured_image'    => __( 'Use as featured image', 'the5ers' ),
      'insert_into_item'      => __( 'Insert into item', 'the5ers' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'the5ers' ),
      'items_list'            => __( 'Items list', 'the5ers' ),
      'items_list_navigation' => __( 'Items list navigation', 'the5ers' ),
      'filter_items_list'     => __( 'Filter items list', 'the5ers' ),
    );
    $args = array(
      'label'                 => __( 'trading room', 'the5ers' ),
      'description'           => __( 'trading room', 'the5ers' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'trading room', $args);

  }
  add_action( 'init', 'fivers_trading_room_post_types', 0 );
}

/** 
 *trading_psychology post 
 */
if ( ! function_exists('fivers_trading_psychology_post_types') ) {
  // Register Custom Post Type
  function fivers_trading_psychology_post_types() {

    $labels = array(
      'name'                  => _x( 'trading psychology', 'Post Type General Name', 'the5ers' ),
      'singular_name'         => _x( 'trading psychology', 'Post Type Singular Name', 'the5ers' ),
      'menu_name'             => __( 'Trade Psychology', 'the5ers' ),
      'name_admin_bar'        => __( 'trading psychology', 'the5ers' ),
      'archives'              => __( 'Item Archives', 'the5ers' ),
      'attributes'            => __( 'Item Attributes', 'the5ers' ),
      'parent_item_colon'     => __( 'Parent Item:', 'the5ers' ),
      'all_items'             => __( 'All Items', 'the5ers' ),
      'add_new_item'          => __( 'Add New Item', 'the5ers' ),
      'add_new'               => __( 'Add New', 'the5ers' ),
      'new_item'              => __( 'New Item', 'the5ers' ),
      'edit_item'             => __( 'Edit Item', 'the5ers' ),
      'update_item'           => __( 'Update Item', 'the5ers' ),
      'view_item'             => __( 'View Item', 'the5ers' ),
      'view_items'            => __( 'View Items', 'the5ers' ),
      'search_items'          => __( 'Search Item', 'the5ers' ),
      'not_found'             => __( 'Not found', 'the5ers' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'the5ers' ),
      'featured_image'        => __( 'Featured Image', 'the5ers' ),
      'set_featured_image'    => __( 'Set featured image', 'the5ers' ),
      'remove_featured_image' => __( 'Remove featured image', 'the5ers' ),
      'use_featured_image'    => __( 'Use as featured image', 'the5ers' ),
      'insert_into_item'      => __( 'Insert into item', 'the5ers' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'the5ers' ),
      'items_list'            => __( 'Items list', 'the5ers' ),
      'items_list_navigation' => __( 'Items list navigation', 'the5ers' ),
      'filter_items_list'     => __( 'Filter items list', 'the5ers' ),
    );
    $args = array(
      'label'                 => __( 'trading psychology', 'the5ers' ),
      'description'           => __( 'trading psychology', 'the5ers' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'trading psychology', $args);

  }
  add_action( 'init', 'fivers_trading_psychology_post_types', 0 );
}

/** 
 *trading_strategy post 
 */

if ( ! function_exists('fivers_trading_strategy_post_types') ) {
  // Register Custom Post Type
  function fivers_trading_strategy_post_types() {

    $labels = array(
      'name'                  => _x( 'trade strategy', 'Post Type General Name', 'the5ers' ),
      'singular_name'         => _x( 'trade strategy', 'Post Type Singular Name', 'the5ers' ),
      'menu_name'             => __( 'Trade Strategy', 'the5ers' ),
      'name_admin_bar'        => __( 'trade strategy', 'the5ers' ),
      'archives'              => __( 'Item Archives', 'the5ers' ),
      'attributes'            => __( 'Item Attributes', 'the5ers' ),
      'parent_item_colon'     => __( 'Parent Item:', 'the5ers' ),
      'all_items'             => __( 'All Items', 'the5ers' ),
      'add_new_item'          => __( 'Add New Item', 'the5ers' ),
      'add_new'               => __( 'Add New', 'the5ers' ),
      'new_item'              => __( 'New Item', 'the5ers' ),
      'edit_item'             => __( 'Edit Item', 'the5ers' ),
      'update_item'           => __( 'Update Item', 'the5ers' ),
      'view_item'             => __( 'View Item', 'the5ers' ),
      'view_items'            => __( 'View Items', 'the5ers' ),
      'search_items'          => __( 'Search Item', 'the5ers' ),
      'not_found'             => __( 'Not found', 'the5ers' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'the5ers' ),
      'featured_image'        => __( 'Featured Image', 'the5ers' ),
      'set_featured_image'    => __( 'Set featured image', 'the5ers' ),
      'remove_featured_image' => __( 'Remove featured image', 'the5ers' ),
      'use_featured_image'    => __( 'Use as featured image', 'the5ers' ),
      'insert_into_item'      => __( 'Insert into item', 'the5ers' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'the5ers' ),
      'items_list'            => __( 'Items list', 'the5ers' ),
      'items_list_navigation' => __( 'Items list navigation', 'the5ers' ),
      'filter_items_list'     => __( 'Filter items list', 'the5ers' ),
    );
    $args = array(
      'label'                 => __( 'trade strategy', 'the5ers' ),
      'description'           => __( 'trade strategy', 'the5ers' ),
      'labels'                => $labels,
      'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'trade strategy', $args);

  }
  add_action( 'init', 'fivers_trading_strategy_post_types', 0 );
}
