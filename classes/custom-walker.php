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

		$title     = $item->title;
		$permalink = $item->url;
		$classes   = implode( ' ', $item->classes );

		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

			$output .= '<div class="navbar-item has-dropdown is-hoverable">';

			$output .= '<a class="navbar-link">' . $title . '</a>';

			$output .= '<div class="navbar-dropdown">';

		} elseif ( in_array( 'divider', $item->classes, true ) ) {

			$output .= '<hr class="navbar-divider">';

		} else {

			$output .= '<a class="navbar-item ' . $classes . '" ';

			if ( $permalink && '#' !== $permalink ) {

				$output .= 'href="' . $permalink . '"';

			} else {

				$output .= '';

			}

			$output .= '>' . $title . '</a>';
		}
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

			$output .= '</div></div>';

		} else {

			return;

		}
	}

	/**
	 * Starts the list before the elements are added.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth Depth of menu item. Used for padding.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= '<div class="navbar-end">';
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth Depth of menu item. Used for padding.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= '</div>';
	}
}
