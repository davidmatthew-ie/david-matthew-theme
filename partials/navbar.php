<?php
/**
 * The partial for displaying the main navigation bar.
 *
 * @package David_Matthew_IE
 */

$menu_args = array(
	'theme_location' => 'primary',
	'depth'          => 2,
	'container'      => false
);

?>

<nav class="nav" role="navigation" aria-label="main navigation">

	<div class="navbar container">

		<a class="logo" href="<?php echo esc_url( home_url() ); ?>">

			<img src="<?php echo esc_url( get_template_directory_uri() . '/img/dm-logo-2019.svg' ); ?>" alt="Logo">

		</a>

		<div id="navbar-toggle">

			<div></div>
			<div></div>
			<div></div>

		</div>

		<div id="menu-desktop">

			<?php wp_nav_menu( $menu_args ); ?>

		</div>

	</div>

	<div id="menu-mobile">

		<?php

		wp_nav_menu( $menu_args );

		get_template_part( 'partials/social' );

		?>

	</div>

</nav>
