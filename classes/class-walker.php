<?php
/**
 * File containing the custom nav walker.
 *
 * @package David_Matthew_IE
 */

namespace DM\Theme;

/**
 * The custom walker class, for Bulma compatibility.
 */
class Walker extends \Walker_Nav_Menu {

	/**
	 * Starts the element output.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item Menu item data object.
	 * @param int      $depth Depth of menu item. Used for padding.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @param int      $id Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$classes = implode( ' ', $item->classes );

		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {
			$output .= '<li><a href="' . $item->url . '">';
			$output .= '<span class="' . $classes . '"></span>';
			$output .= '<span class="navbar-title">' . $item->title . '</span></a>';

		} else {
			$output .= '<li><a href="' . $item->url . '">';
			$output .= '<span class="' . $classes . '"></span>';
			$output .= '<span class="navbar-title">' . $item->title . '</span></a></li>';
		}
	}
}
