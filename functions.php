<?php


// Add personal styles and scripts
function casaMilan_add_css_js () {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
  
    wp_enqueue_style( 'w3-complements', get_template_directory_uri() . '/css/w3-complements.css');

    wp_enqueue_style( 'casaMilan', get_template_directory_uri() . '/css/casaMilan.css');
    
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', true);

    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', true);

}
add_action( 'wp_enqueue_scripts', 'casaMilan_add_css_js' );



function casaMilan_supports_theme(){

    // Add html5 supper
    add_theme_support( 'html5' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Custom logo
    add_theme_support( 'custom-logo' );

    // Add title dinaymic
    add_theme_support( 'title-tag' );

	// Add menus
	register_nav_menus(
		array(
			// 'main-menu' => esc_html__( 'Main Menu', 'w3css-starter' ),
			'primary' => esc_html__( 'Primary Menu', 'w3css-starter' ),
			'footer'  => __( 'Secondary Menu', 'w3css-starter' ),
		)
	);

}
add_action( 'after_setup_theme', 'casaMilan_supports_theme' );


// TOP NAV MENU
function w3css_nav_menu_submenu_css_class_filter ($classes, $args) {

	if ($args->theme_location === 'primary') {
		$classes []= 'w3-dropdown-content w3-bar-block w3-card';
	}
	else {
		$classes []= 'w3-margin-left';
	}
	return $classes;

}
add_filter('nav_menu_submenu_css_class', 'w3css_nav_menu_submenu_css_class_filter', 10, 2);


function w3css_nav_menu_css_class_filter ($classes, $item, $args, $depth) {

	if ($args->theme_location === 'primary') {
		$classes []= 'w3-bar-item p-0';
	}
	return $classes;

}
add_filter('nav_menu_css_class', 'w3css_nav_menu_css_class_filter', 10, 4);

function w3css_nav_menu_link_attributes_filter ($atts, $item, $args) {
	if ($args->theme_location === 'primary') {
		$atts['class'] = 'w3-button w-100 py-3 text-uppercase w3-small';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'w3css_nav_menu_link_attributes_filter', 10, 3);

// From: https://stackoverflow.com/questions/8448978/wordpress-how-do-i-know-if-a-menu-item-has-children
function menu_set_dropdown( $sorted_menu_items, $args ) {

    if ($args->theme_location === 'primary') {
		$last_top = 0;
		foreach ( $sorted_menu_items as $key => $obj ) {
			// it is a top lv item?
			if ( 0 == $obj->menu_item_parent ) {
				// set the key of the parent
				$last_top = $key;
			} else {
				$sorted_menu_items[$last_top]->classes['w3-dropdown-hover'] = 'w3-dropdown-hover';
			}
		}
	}
	return $sorted_menu_items;

}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );