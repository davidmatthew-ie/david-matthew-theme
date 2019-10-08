<?php
/**
 * The partial for displaying the main navigation bar.
 *
 * @package David_Matthew_IE
 */

?>

<nav class="navbar" role="navigation" aria-label="main navigation">

	<div class="container">

		<div class="navbar-brand">

			<a class="navbar-item" href=""><img src="#" alt="Logo"></a>

			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar-target">

				<span aria-hidden="true"></span>

				<span aria-hidden="true"></span>

				<span aria-hidden="true"></span>

			</a>

		</div>

			<?php

			$menu_args = array(
				'theme_location' => 'primary',
				'depth'          => 2,
				'container'      => false,
				'menu_class'     => 'navbar-menu navbar-end',
				'menu_id'        => 'navbar-target',
				'walker'         => new \DM\Theme\Walker(),
			);

			wp_nav_menu( $menu_args );

			?>

	</div>

</nav>
