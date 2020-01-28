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
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'widgets' );

}
add_action( 'customize_register', 'padang_padang_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function padang_padang_customize_preview_js() {
	wp_enqueue_script( 'padang_padang_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20190404', true );
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
		'logo_image'   => get_template_directory_uri() . '/images/header.png',
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
 * Call the individual sections.
 */

require get_template_directory() . '/inc/customizer-sections/header-options.php';
require get_template_directory() . '/inc/customizer-sections/colors.php';
require get_template_directory() . '/inc/customizer-sections/typography.php';
require get_template_directory() . '/inc/customizer-sections/image-appearance.php';
require get_template_directory() . '/inc/customizer-sections/social-links.php';
require get_template_directory() . '/inc/customizer-sections/cta-area.php';
if ( is_super_admin() ) {
	require get_template_directory() . '/inc/customizer-sections/custom-js.php';
}
