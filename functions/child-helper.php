<?php
/*********************
** Helper functions
**********************/

function register_theme_menus() {
   register_nav_menus(array(
     'header-menu'      => __('Header Menu', 'the5ers'), // Main Navigation
     'footer-menu'      => __('Footer Menu', 'the5ers'),
	 'social_icon_menu' => __('Social Menu', 'the5ers'),
	 'post-type-menu'   => __('Post type Menu', 'the5ers'),

   ));
}

//////footer-menu////////
function footer_menu() {
	wp_nav_menu(
		array(
			'theme_location'  => 'footer-menu',
			'menu_class'      => 'nav-menu-items',
			'container'       => ''
		)
	);
}

//Header menu
function header_menu() {
	wp_nav_menu(
		array(
			'theme_location'  => 'header-menu',
			'menu_class'      => 'header_menu_class',
			'container'       => ''
		)
	);
}
// social menu
function social_icon_menu() {
	wp_nav_menu(
		array(
			'theme_location'  => 'social-menu',
			'menu_class'      => 'social_menu_class',
			'container'       => ''
		)
	);
}
//post type menu
function post_type_menu() {
	wp_nav_menu(
		array(
			'theme_location'  => 'post-type-menu',
			'menu_class'      => 'post-type_class',
			'container'       => ''
		)
	);
}

add_action('init', 'register_theme_menus');
  // add_action('after_setup_theme', 'fivers_features');
