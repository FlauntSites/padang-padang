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
 * Add the Color section
 */
padang_padang_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'padang_padang' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
		'output' => array(
				'element'  => 'body',
				'property' => 'background-color',
		),
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'menu_text_color',
		'label'       => __( 'Menu Text Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
		'output' => array(
			array(
				'element' => '.main-navigation li a',
			),
		),
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'menu_text_hover_color',
		'label'       => __( 'Menu Text Hover Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
		'output' => array(
			array(
				'element' => '.main-navigation li a:hover',
			),
		),
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Text Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#999',
		'priority'    => 10,
	) );	

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Site Accent & Link Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#ddd',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site-accent_hover_color',
		'label'       => __( 'Site Accent Hover Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'button_text_color',
		'label'       => __( 'Button Text Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'button_hover_text_color',
		'label'       => __( 'Button Hover Text Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'footer_widget_text_color',
		'label'       => __( 'Footer Widget Text Color', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );








/**
 * Add the Header Options section
 */
padang_padang_Kirki::add_section( 'header_options', array(
	'title'      => esc_attr__( 'Header Options', 'padang_padang' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
) );

	// padang_padang_Kirki::add_field( 'padang_padang', array(
	// 	'type'        => 'image',
	// 	'settings'    => 'fs_logo',
	// 	'option_type' => 'option',
	// 	'option_name' => 'fsc_logo',
	// 	'label'       => __( 'Logo', 'my_textdomain' ),
	// 	'description' => __( 'Add or edit your logo here', 'my_textdomain' ),
	// 	'section'     => 'header_options',
	// 	'default'     => '',
	// 	'priority'    => 10,
	// ) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'slider',
		'settings'    => 'fsc_logo_width',
		'label'       => esc_attr__( 'Adjust the size of your logo here', 'my_textdomain' ),
		'section'     => 'header_options',
		'default'     => 200,
		'choices'     => array(
			'min'  => '100',
			'max'  => '300',
			'step' => '1',
		),
	) );


	/**
	* Toggles Social On and Off.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'header_social',
		'label'       => esc_attr__( 'Social Icons On/Off', 'padang_padang' ),
		'description' => esc_attr__( 'Turn Social Icons on or off', 'padang_padang' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Toggles Search On and Off.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'header_search',
		'label'       => esc_attr__( 'Search On/Off', 'padang_padang' ),
		'description' => esc_attr__( 'Turn Search on or off', 'padang_padang' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Toggles Client Area On and Off.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'header_client_area',
		'label'       => esc_attr__( 'Client Area On/Off', 'padang_padang' ),
		'description' => esc_attr__( 'Turn Client Area button on or off', 'padang_padang' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Client Area Link for photographers that have a proofing site.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'text',
		'settings' => 'client_area_link',
		'label'    => __( 'Client Area', 'padang_padang' ),
		'description' => esc_attr__( 'If you have a proofing site, you can add the link to it here. ex: http://zenfolio.com/yourname or http://yourname.zenfolio.com', 'padang_padang' ),
		'section'  => 'header_options',
		'priority' => 10,
	) );

	/**
	* Toggles Menu Background On and Off.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'menu_background',
		'label'       => esc_attr__( 'Menu Background On/Off', 'padang_padang' ),
		'description' => esc_attr__( 'Turns Menu Background on and off', 'padang_padang' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
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
	* Add the Menu Typography control
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'menu_font',
		'label'       => esc_attr__( 'Menu Typography', 'padang_padang' ),
		'description' => esc_attr__( 'Select the typography options for your menu.', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'   => 'Julius Sans One',
			'font-size'     => '18px',
		),
		'output' => array(
				'element' 	=> array(
					'.main-navigation li a',
					'button.menu-toggle',
					'.btn',
				),
		),
	) );

	/**
	* Add the Headers Typography control
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'headers_typography',
		'label'       => esc_attr__( 'Headings Typography', 'padang_padang' ),
		'description' => esc_attr__( 'Select the typography options for your headings.', 'padang_padang' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			// 'variant'        => '400',
			'font-size'      => '18px',
			// 'line-height'    => '1.5',
			// 'color'          => '#333333',
		),
		'output' => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2' ),
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
			'font-family'    => 'Lato',
			// 'variant'        => '400',
			'font-size'      => '16px',
			// 'line-height'    => '1.5',
			// 'color'          => '#333333',
		),
		'output' => array(
			array(
				'element' => 'body',
			),
		),
	) );



	/**
	* Add the body-typography control
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'cursive_typography',
		'label'       => esc_attr__( 'Cursive Typography', 'padang_padang' ),
		'description' => esc_attr__( 'Select the main typography options for your site.', 'padang_padang' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Nothing You Could Do',
			'font-size'      => '30px',
		),
		'output' => array(
			array(
				'element' => '.handwrite',
			),
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
	'label'       => __( 'Caption Background Color', 'padang_padang' ),
	'section'     => 'image_appearance',
	'default'     => 'rgba( 0,0,0,.8 )',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );


padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'toggle',
	'settings'    => 'image_stroke',
	'label'       => __( 'Turn on Inset border', 'padang_padang' ),
	'section'     => 'image_appearance',
	'default'     => '0',
	'priority'    => 10,
	
) );