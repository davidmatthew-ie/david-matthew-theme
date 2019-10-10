<?php
/**
 * The partial for displaying the main navigation bar.
 *
 * @package David_Matthew_IE
 */

?>

<nav class="navbar" role="navigation" aria-label="main navigation">

	<div class="container">

		<div class="logo">

			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/dm-logo-2019.svg'; ?>" alt="Logo"></a>

		</div>

		<div class="navbar-toggle">

		</div>

		<div id="desktop-menu">

			<?php

			$menu_args = array(
				'theme_location' => 'primary',
				'depth'          => 2,
				'container'      => false,
				'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>',
				'walker'         => new \DM\Theme\Walker(),
			);

			wp_nav_menu( $menu_args );

			?>

		</div>

		<div id="mobile-menu">

			<?php wp_nav_menu( $menu_args ); ?>

		</div>

	</div>

</nav>
