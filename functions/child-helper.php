<?php
/*********************
** Helper functions
**********************/

function register_theme_menus() {
   register_nav_menus(array(
     'header-menu'     => __('Header Menu', 'the5ers'), // Main Navigation
     'top-header-menu' => __('Top Header Menu', 'the5ers'),
     'footer-menu'     => __('Footer Menu', 'the5ers'),
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
// add_action('init', 'register_theme_menus');