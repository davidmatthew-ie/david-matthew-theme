<?php
/**
 * The header template.
 *
 * @package David_Matthew_IE
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php get_template_part( 'partials/favicon' ); ?>

	<?php wp_head(); ?>

</head>

<?php

if ( get_theme_mod( 'ga' ) ) {
	?>
	<!-- Google Analytics -->
	<script><?php echo esc_js( get_theme_mod( 'ga' ) ); ?></script>
	<?php
}

?>

<body <?php body_class(); ?>>

<?php get_template_part( 'partials/navbar' ); ?>
