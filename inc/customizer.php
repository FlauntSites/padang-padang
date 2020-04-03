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


add_action( 'customize_controls_print_styles', function() {
	?>
	<style>
	#customize-controls .customize-info .accordion-section-title{
		height:200px;
		background-image:url('<?php echo get_template_directory_uri() . '/screenshot.png'; ?>');
		background-size:cover;
	}
	.preview-notice{
		display:none;
	}
	#customize-controls .customize-info{
		margin-bottom:0;
	}
	</style>
	<?php
} );