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

		$output .= '<a href="' . $item->url . '">';
		$output .= '<span class="' . $classes . '"></span>';
		$output .= '<span class="navbar-title">' . $item->title . '</span></a>';

		// if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

		// 	$output .= '<li class="navbar-item has-dropdown is-hoverable ' . $classes . '">';

		// 	$output .= '<a class="navbar-link" href="' . $item->url . '">' . $item->title . '</a>';

		// 	$output .= '<ul class="navbar-dropdown">';

		// } else {

		// 	$output .= '<li class="navbar-item ' . $classes . '">';

		// 	$output .= '<a href="' . $item->url . '">' . $item->title . '</a></li>';

		// }

	}

	/**
	 * Ends the element output.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item Menu item data object.
	 * @param int      $depth Depth of menu item. Used for padding.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @param int      $id Current item ID.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

			$output .= '</li></ul>';

		}

	}
}
