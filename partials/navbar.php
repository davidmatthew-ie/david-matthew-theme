<?php
/**
 * The partial for displaying the main navigation bar.
 *
 * @package David_Matthew_IE
 */

$menu_args = array(
	'theme_location' => 'primary',
	'depth'          => 2,
	'container'      => false,
	'walker'         => new \DM\Theme\Walker(),
);

?>

<nav role="navigation" aria-label="main navigation">

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

		<?php wp_nav_menu( $menu_args ); ?>

		<div class="social-icons">

			<a href="#"><i class="fab fa-linkedin-in"></i></a>

			<a href="#"><i class="fas fa-code"></i></a>

			<a href="#"><i class="fab fa-facebook-f"></i></a>

			<a href="#"><i class="fab fa-instagram"></i></a>

			<a href="#"><i class="fab fa-twitter"></i></a>

		</div>

	</div>

</nav>
