<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package David_Matthew
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area animated fadeInDown">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside>
