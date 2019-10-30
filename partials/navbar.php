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

		<?php wp_nav_menu( $menu_args ); ?>

		<div class="social-icons">

			<?php

			if ( ! empty( get_theme_mod( 'social_link_1' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_1' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_1' ) ); ?>"></i>

				</a>

				<?php
			}

			if ( ! empty( get_theme_mod( 'social_link_2' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_2' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_2' ) ); ?>"></i>

				</a>

				<?php
			}

			if ( ! empty( get_theme_mod( 'social_link_3' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_3' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_3' ) ); ?>"></i>

				</a>

				<?php
			}

			if ( ! empty( get_theme_mod( 'social_link_4' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_4' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_4' ) ); ?>"></i>

				</a>

				<?php
			}

			if ( ! empty( get_theme_mod( 'social_link_5' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_5' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_5' ) ); ?>"></i>

				</a>

				<?php
			}

			if ( ! empty( get_theme_mod( 'social_link_6' ) ) ) {
				?>

				<a href="<?php echo esc_url( get_theme_mod( 'social_link_6' ) ); ?>" target="_blank">

					<i class="<?php echo esc_html( get_theme_mod( 'social_icon_6' ) ); ?>"></i>

				</a>

				<?php
			}

			?>

		</div>

	</div>

</nav>
