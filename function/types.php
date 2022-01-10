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


// if ( ! function_exists('activities_post_type') ) {

// Register Custom Post Type
// function activities_post_type() {

// 	$labels = array(
// 		'name'                  => _x( 'עשייה שלנו', 'Post Type General Name', 'lev' ),
// 		'singular_name'         => _x( 'עשייה שלנו', 'Post Type Singular Name', 'lev' ),
// 		'menu_name'             => __( 'עשייה שלנו', 'lev' ),
// 		'name_admin_bar'        => __( 'עשייה שלנו', 'lev' ),
// 		'archives'              => __( 'Item Archives', 'lev' ),
// 		'attributes'            => __( 'Item Attributes', 'lev' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'lev' ),
// 		'all_items'             => __( 'All Items', 'lev' ),
// 		'add_new_item'          => __( 'Add New Item', 'lev' ),
// 		'add_new'               => __( 'Add New', 'lev' ),
// 		'new_item'              => __( 'New Item', 'lev' ),
// 		'edit_item'             => __( 'Edit Item', 'lev' ),
// 		'update_item'           => __( 'Update Item', 'lev' ),
// 		'view_item'             => __( 'View Item', 'lev' ),
// 		'view_items'            => __( 'View Items', 'lev' ),
// 		'search_items'          => __( 'Search Item', 'lev' ),
// 		'not_found'             => __( 'Not found', 'lev' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'lev' ),
// 		'featured_image'        => __( 'Featured Image', 'lev' ),
// 		'set_featured_image'    => __( 'Set featured image', 'lev' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'lev' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'lev' ),
// 		'insert_into_item'      => __( 'Insert into item', 'lev' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lev' ),
// 		'items_list'            => __( 'Items list', 'lev' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'lev' ),
// 		'filter_items_list'     => __( 'Filter items list', 'lev' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'עשייה שלנו', 'lev' ),
// 		'description'           => __( 'עשייה שלנו', 'lev' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'activity', $args );

// }
// add_action( 'init', 'activities_post_type', 0 );

// }
