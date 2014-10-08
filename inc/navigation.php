<?php

/**
 * Generate Menu Threaded
 * @author Heru YHS, Fathur Rohman
 */
function generate_navigation() {
	$menus = find_all_threaded('main-menu');

	if ( count($menus) > 0 ) {
		
		$list_menus = '<ul class="nav nav-pills nav-stacked multi-level">';

		foreach ($menus as $menu) {
			if ( has_child( $menu->children ) ) {
				
				$list_menus .= '<li class="dropdown-submenu">';
				$list_menus .= '<a class="dropdown-toggle" data-toggle="dropdown" href="'.$menu->url.'">'.$menu->title.'</a>';
				
				generate_child($menu->children, $list_menus, 0);
				
				$list_menus .= '</li>';

			} else {
				$list_menus .= '<li><a href="'.$menu->url.'">'.$menu->title.'</a></li>';
			}

			$list_menus .= '';
		}

		$list_menus .= '</ul>';

		return $list_menus;
	}
}

function has_child($child) {

	if ( $child AND count($child) > 0 ) {
		return true;
	} else {
		return false;
	}
	
}

function generate_child( &$menus, &$list_menus, $level ) {

	$list_menus .= '<ul class="dropdown-menu" role="menu">';

	foreach ( $menus as $menu ) {
		
		if (has_child($menu->children)) {
			
			$list_menus .= '<li class="dropdown-submenu">';
			$list_menus .= '<a href="'.$menu->url.'" class="dropdown-toggle">'.$menu->title.'</a>';
			
			generate_child($menu->children, $list_menus, $level + 1 );

			$list_menus .= '</li>';
		} else {
			$list_menus .= '<li><a href="'.$menu->url.'">'.$menu->title.'</a></li>';
		}

		$list_menus .= '';
		
	}

	$list_menus .= '</ul>';
}

function find_all_threaded( $name ) {
	$menu 		= wp_get_nav_menu_object( $name );
	$menu_items	= wp_get_nav_menu_items( $menu->term_id ); // post related to this menu
	return do_thread( $menu_items, 0 );
}

function do_thread( $data, $root ) {
	$out 		= array();
	$size_of	= sizeof( $data );

	for ($i = 0; $i < $size_of; $i++) {

		if ( ($data[$i]->menu_item_parent == $root) || (($root === NULL) && ($data[$i]->menu_item_parent == 0)) ) {
			$tmp = $data[$i];

			if ( isset($data[$i]->ID) ) {
				$tmp->children = do_thread( $data, $data[$i]->ID );
			} else {
				$tmp->children = NULL;
			}

			$out[] = $tmp;
		}
	}
	return $out;
}