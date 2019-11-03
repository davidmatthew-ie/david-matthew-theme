<?php
/**
 * The partial for displaying the social icons.
 *
 * @package David_Matthew_IE
 */

?>

<div class="social-icons">

	<?php

	if ( ! empty( get_theme_mod( 'social_link_1' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_1' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_1' ) ); ?>"></i>

		</a>

		<?php
	}

	if ( ! empty( get_theme_mod( 'social_link_2' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_2' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_2' ) ); ?>"></i>

		</a>

		<?php
	}

	if ( ! empty( get_theme_mod( 'social_link_3' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_3' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_3' ) ); ?>"></i>

		</a>

		<?php
	}

	if ( ! empty( get_theme_mod( 'social_link_4' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_4' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_4' ) ); ?>"></i>

		</a>

		<?php
	}

	if ( ! empty( get_theme_mod( 'social_link_5' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_5' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_5' ) ); ?>"></i>

		</a>

		<?php
	}

	if ( ! empty( get_theme_mod( 'social_link_6' ) ) ) {
		?>

		<a class="animated fadeInUp" href="<?php echo esc_url( get_theme_mod( 'social_link_6' ) ); ?>" target="_blank">

			<i class="<?php echo esc_html( get_theme_mod( 'social_icon_6' ) ); ?>"></i>

		</a>

		<?php
	}

	?>

</div>
