<?php
/**
 * Plugin Name: Custom Functions
 * Description: Various custom functions. Email shaun@barkdesignchicago.com for details
 * Author: Bark Design Chicago
 * Author URI: http://barkdesignchicago.com
 */


 
// Make uploaded images SCALE responsive
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//add class to image
function add_image_class($class){
	$class .= ' scale-with-grid';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

// Make excerpt READ MORE link
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'ribs') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Nav Logo
add_filter( 'wp_nav_menu_items', 'add_logo_nav_menu', 10, 2 );

function add_logo_nav_menu( $menu, stdClass $args ){

	if (( 'main-menu' != $args->theme_location ) ):
		return $menu;
	endif;

	if( is_front_page() ):
		$output = '<li id="menu-logo" class="menu-item logo-image"><a href="#home"><img src="' . get_stylesheet_directory_uri() . '/assets/images/logo_vidar_home.png" class="scale-with-grid" /></a></li>' . $menu;
	else:
		$output = '<li id="menu-logo" class="menu-item logo-image-not-home"><a href="'.get_home_url().'"><img src="' . get_stylesheet_directory_uri() . '/assets/images/logo_vidar_sub.png" class="scale-with-grid" /></a></li>' . $menu;
	endif;
	return $output;
}
