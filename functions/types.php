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