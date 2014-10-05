<?php 

/**
 * ==========================
 * Algoon functions.php file
 * ==========================
 */


load_theme_textdomain( 'algoon' );
add_theme_support( 'post-thumbnails' );

/**
 * Function for init styles to algoon themes
 * call using wp_head() and wp_footer()
 */
add_action('wp_enqueue_scripts','algoon_styles_and_scripts');

function algoon_styles_and_scripts() {
	
	// Add styles to themes
	wp_enqueue_style( 'bootstrap', 	get_template_directory_uri() . '/packages/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'main', 		get_template_directory_uri() . '/styles/main.css' );

	// Add script to themes
	wp_enqueue_script( 'modernizr',	get_template_directory_uri() . '/scripts/modernizr-2.6.2-respond-1.1.0.min.js', array(), '2.6.2',FALSE);
	wp_enqueue_script( 'j-query',	get_template_directory_uri() . '/scripts/jquery-1.11.1.min.js', array(), '1.11.1',TRUE);
	wp_enqueue_script( 'bootstrap',	get_template_directory_uri() . '/packages/bootstrap/js/bootstrap.min.js', array(), '2.6.2',TRUE);
	wp_enqueue_script( 'plugins',	get_template_directory_uri() . '/scripts/plugins.js', array(), '1.0',TRUE);
	wp_enqueue_script( 'main',		get_template_directory_uri() . '/scripts/main.js', array('bootstrap'), '1.0',TRUE);
}