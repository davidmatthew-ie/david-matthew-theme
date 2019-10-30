<?php
/**
 * The theme customizer file.
 *
 * @package David_Matthew_IE
 */

namespace DM\Theme;

/**
 * Register the customizer panels and settings.
 *
 * @param object $wp_customize The customizer object.
 */
function customize( $wp_customize ) {

	// Custom theme options panel.
	$wp_customize->add_panel(
		'dm_theme_panel',
		array(
			'capability'  => 'edit_theme_options',
			'title'       => __( 'Custom Theme Options', 'david-matthew' ),
			'description' => __( 'Extra customization options', 'david-matthew' ),
		)
	);

	// Custom homepage section.
	$wp_customize->add_section(
		'home_options',
		array(
			'capability' => 'edit_theme_options',
			'title'      => __( 'Homepage', 'david-matthew' ),
			'panel'      => 'dm_theme_panel',
		)
	);

	// Custom homepage settings.
	$wp_customize->add_setting( 'home_bg_img' );
	$wp_customize->add_control(
		new \WP_Customize_Control(
			$wp_customize,
			'home_bg_img_ctl',
			array(
				'label'    => __( 'Background Image URL', 'david-matthew' ),
				'type'     => 'url',
				'section'  => 'home_options',
				'settings' => 'home_bg_img',
			)
		)
	);

	// Social links section.
	$wp_customize->add_section(
		'social_options',
		array(
			'capability' => 'edit_theme_options',
			'title'      => __( 'Social Links', 'david-matthew' ),
			'panel'      => 'dm_theme_panel',
		)
	);

	// Content for social links and icons.
	for ( $i = 1; $i <= 6; $i++ ) {
		$wp_customize->add_setting( 'social_link_' . $i );
		$wp_customize->add_setting( 'social_icon_' . $i );
		$wp_customize->add_control(
			new \WP_Customize_Control(
				$wp_customize,
				'social_link_' . $i . '_ctl',
				array(
					'label'    => __( 'Social Link ' . $i, 'david-matthew' ),
					'type'     => 'url',
					'section'  => 'social_options',
					'settings' => 'social_link_' . $i,
				)
			)
		);
		$wp_customize->add_control(
			new \WP_Customize_Control(
				$wp_customize,
				'social_icon_' . $i . '_ctl',
				array(
					'label'    => __( 'Social Icon ' . $i, 'david-matthew' ),
					'type'     => 'text',
					'section'  => 'social_options',
					'settings' => 'social_icon_' . $i,
				)
			)
		);
	}
}
add_action( 'customize_register', 'DM\Theme\customize' );
