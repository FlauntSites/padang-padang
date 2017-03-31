<?php
/**
 * Padang Padang Theme Customizer
 *
 * @package Padang_Padang
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function padang_padang_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'padang_padang_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function padang_padang_customize_preview_js() {
	wp_enqueue_script( 'padang_padang_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'padang_padang_customize_preview_js' );



/**
 * Configuration sample for the Kirki Customizer.
 * The function's argument is an array of existing config values
 * The function returns the array with the addition of our own arguments
 * and then that result is used in the kirki/config filter
 *
 * @param $config the configuration array
 *
 * @return array
 */
function kirki_demo_configuration_sample_styling( $config ) {
	return wp_parse_args( array(
		'logo_image'   => 'http://flauntyoursite.com/flaunt-identity/flaunt-logo-dashboard-widget.png',
		'description'  => esc_attr__( 'The theme description.', 'kirki' ),
		'color_accent' => '#0091EA',
		'color_back'   => '#FFFFFF',
	), $config );
}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample_styling' );



/**
 * Add the theme configuration
 */
padang_padang_Kirki::add_config( 'padang_padang', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Add the typography section
 */
padang_padang_Kirki::add_section( 'typography', array(
	'title'      => esc_attr__( 'Typography', 'padang_padang' ),
	'priority'   => 2,
	'capability' => 'edit_theme_options',
) );

/**
 * Add the Headers Typography control
 */
padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'typography',
	'settings'    => 'headers_typography',
	'label'       => esc_attr__( 'Headers Typography', 'padang_padang' ),
	'description' => esc_attr__( 'Select the typography options for your headers.', 'padang_padang' ),
	'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'padang_padang' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Julius Sans One',
		'variant'        => '400',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6' ),
		),
	),
) );



/**
 * Add the body-typography control
 */
padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'typography',
	'settings'    => 'body_typography',
	'label'       => esc_attr__( 'Body Typography', 'padang_padang' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'padang_padang' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'padang_padang' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => 'body',
		),
	),
) );




/**
 * Add the Menu Appearance section
 */
padang_padang_Kirki::add_section( 'menu_appearance', array(
	'title'      => esc_attr__( 'Menu Appearance', 'padang_padang' ),
	'priority'   => 3,
	'capability' => 'edit_theme_options',
) );

padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'color',
	'settings'    => 'menu_background_color',
	'label'       => __( 'Menu Background Color', 'my_textdomain' ),
	'section'     => 'menu_appearance',
	'default'     => '#00b2d6',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'color',
	'settings'    => 'menu_text_color',
	'label'       => __( 'Text Color', 'my_textdomain' ),
	'section'     => 'menu_appearance',
	'default'     => '#333333',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );




/**
 * Add the Image Appearance section
 */
padang_padang_Kirki::add_section( 'image_appearance', array(
	'title'      => esc_attr__( 'Image Appearance', 'padang_padang' ),
	'priority'   => 4,
	'capability' => 'edit_theme_options',
) );

padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'color',
	'settings'    => 'caption_background_color',
	'label'       => __( 'Caption Background Color', 'my_textdomain' ),
	'section'     => 'image_appearance',
	'default'     => 'rgba( 0,0,0,.8 )',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );