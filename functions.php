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

/**
 * Grap the first image to display like a post thumbnail
 * @source http://css-tricks.com/snippets/wordpress/get-the-first-image-from-a-post/
 * @return [string] [image link]
 */
function algoon_first_img()
{
	global $post, $posts;

	$first_img = '';
	
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	if(empty($first_img)) {
		$first_img = "/path/to/default.png";
	}
	
	return $first_img;
}

if ( ! function_exists( 'algoon_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function algoon_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'algoon' ),
		'next_text' => __( 'Next &rarr;', 'algoon' ),
		'before_page_number' => '<li>',
		'after_page_number' => '</li>'
	) );

	if ( $links ) :

	?>
	<nav class="paging" role="navigation">
		<ul class="pagination">
			<?php echo $links; ?>
		</ul><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

/**
 * Register navigation menu
 */
add_action( 'init', 'algoon_regiser_menu' );
function algoon_regiser_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_action( 'widgets_init', 'algoon_widget_footer' );
function algoon_widget_footer() {
	register_sidebar( array(
		'name' => 'Footer Sidebar',
		'id' => 'footer-sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<span class="hide">',
		'after_title' => '</span>',
	) );
}

add_action( 'widgets_init', 'algoon_widget_right' );
function algoon_widget_right() {
	register_sidebar( array(
		'name' => 'Right Sidebar',
		'id' => 'right-widget',
		'before_widget' => '<div class="sidewidget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'algoon_widget_left' );
function algoon_widget_left() {
	register_sidebar( array(
		'name' => 'Left Sidebar',
		'id' => 'left-widget',
		'before_widget' => '<div class="sidewidget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}


/**
 * =======================================
 * Include separate libraries or functions
 * =======================================
 */

// http://www.intert3chmedia.net/2011/12/minify-html-javascript-css-without.html
//require get_template_directory() . '/inc/minifier-script-en.php'; 
require get_template_directory() . '/inc/navigation.php'; 