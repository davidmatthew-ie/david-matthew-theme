<?php
/**
 * The partial for displaying the main navigation bar.
 *
 * @package David_Matthew_IE
 */

?>

<nav class="navbar" role="navigation" aria-label="main navigation">

	<div class="container">

		<div class="navbar-logo">

			<a href=""><img src="#" alt="Logo"></a>

		</div>

		<div class="navbar-btn">

		</div>

		<div id="navbar-target">

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

	</div>

</nav>
