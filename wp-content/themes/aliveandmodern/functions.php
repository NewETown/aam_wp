<?php 

// //Add support for WordPress 3.0's custom menus
// add_action( 'init', 'register_my_menu' );
 
// //Register area for custom menu
// function register_my_menu() {
//     register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
// }

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(260, 125, true);

// //Some simple code for our widget-enabled sidebar 
// if ( function_exists('register_sidebar') )
//     register_sidebar();
// ** NO SIDEBAR FOR NOW **

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1', true );
	wp_register_script( 'divPeek-script', get_template_directory_uri() . '/js/divPeek.js', array( 'jquery' ), '1', true );
	wp_register_script( 'parallax-script', get_template_directory_uri() . '/js/parallax.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'bootstrap-script' );
	wp_enqueue_script( 'divPeek-script' );
	wp_enqueue_script( 'parallax-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>