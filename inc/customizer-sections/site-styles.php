<?php
/**
 * Add the Site Style section.
 */

padang_padang_Kirki::add_panel( 'site_styles', array(
	'title' => esc_html__( 'Site Styles', 'padang_padang' ),
	'icon'  => 'dashicons-admin-appearance',
) );


/********************************
 * Add the Color section
******************************* */

padang_padang_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'padang_padang' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'site_styles',
	'icon'       => 'dashicons-admin-customizer',
) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'padang_padang' ),
		'description' => __( 'Change the background color of the site.', 'padang_padang' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 1,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'custom',
		'settings'    => 'divide_1',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );	


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'heading_color',
		'label'       => __( 'Titles & Headings Color', 'padang_padang' ),
		'description' => __( 'Color for all Blog and Page titles and headings.', 'padang_padang' ),		
		'section'     => 'site_colors',
		'default'     => '#666',
		'priority'    => 1,
	) );	

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'heading_hover_color',
		'label'       => __( 'Titles & Headings Hover Color', 'padang_padang' ),
		'description' => __( 'Color for all titles and headings when hovered over by mouse.', 'padang_padang' ),				
		'section'     => 'site_colors',
		'default'     => '#222',
		'priority'    => 1,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'custom',
		'settings'    => 'divide_2',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Main Body Text Color', 'padang_padang' ),
		'description' => __( 'Color for regular text.', 'padang_padang' ),				
		'section'     => 'site_colors',
		'default'     => '#666',
		'priority'    => 1,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'custom',
		'settings'    => 'divide_3',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Site Accent Color', 'padang_padang' ),
		'description' => __( 'Color for Links, Buttons and Menu Background(if enabled).', 'padang_padang' ),						
		'section'     => 'site_colors',
		'default'     => '#999',
		'priority'    => 1,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_color',
		'label'       => __( 'Site Accent Text Color', 'padang_padang' ),
		'description' => __( 'Color for Button Text & Menu Text (if menu background is enabled).', 'padang_padang' ),								
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 1,
	) );	

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_accent_hover_color',
		'label'       => __( 'Site Accent Hover Color', 'padang_padang' ),
		'description' => __( 'Color for Links, Buttons when hovered over by mouse.', 'padang_padang' ),								
		'section'     => 'site_colors',
		'default'     => '#333',
		'priority'    => 1,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_hover_color',
		'label'       => __( 'Menu & Button Text Hover Color', 'padang_padang' ),
		'description' => __( 'Color for Button Text & Menu Text when hovered over by mouse.', 'padang_padang' ),										
		'section'     => 'site_colors',
		'default'     => '#ddd',
		'priority'    => 1,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'custom',
		'settings'    => 'divide_4',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );



/********************************
 * Add the Typography section
******************************* */
padang_padang_Kirki::add_section( 'typography', array(
	'title'      => esc_attr__( 'Typography', 'padang_padang' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'site_styles',
	'icon'       => 'dashicons-editor-italic',
) );

	/**
	* Add the Menu Typography control
	*/
	padang_padang_Kirki::add_field( 'padang_padang', 
		array(
			'type'        => 'typography',
			'settings'    => 'menu_font',
			'label'       => esc_attr__( 'Menu Typography', 'padang_padang' ),
			'description' => esc_attr__( 'Select the typography options for your menu.', 'padang_padang' ),
			'section'     => 'typography',
			'priority'    => 10,
			'default'     => array(
				'font-family' => 'Julius Sans One',
				'font-size'   => '18px',
			),
			'output'      => array(
				array(
					'element' => array(
						'.main-navigation li a',
						'button.menu-toggle',
						'.btn',
						'button',
						'input[type="button"]',
						'input[type="reset"]',
						'input[type="submit"]',
					),
				),
			),
	));

	/**
	* Add the Headers Typography control
	*/

	padang_padang_Kirki::add_field( 'padang_padang', [
		'type'        => 'toggle',
		'settings'    => 'heading_independent_setting',
		'label'       => esc_html__( 'Unique heading fonts & settings', 'padang_padang'  ),
		'description' => esc_attr__( 'If you would like the H1, H2, H3, etc. to be different fonts and sizes, turn this on.', 'padang_padang' ),
		'section'     => 'typography',
		'default'     => '0',
		'priority'    => 10,
	] );


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
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2', 'h3', '.h3', 'h4', '.h4', 'h5', '.h5', 'h6', '.h6' ),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => false,
			]
		],
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h1_typography',
		'label'       => esc_attr__( 'H1 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h1', '.h1'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h2_typography',
		'label'       => esc_attr__( 'H2 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h2', '.h2'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h3_typography',
		'label'       => esc_attr__( 'H3 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h3', '.h3'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h4_typography',
		'label'       => esc_attr__( 'H4 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h4', '.h4'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h4_typography',
		'label'       => esc_attr__( 'H4 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h4', '.h4'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h5_typography',
		'label'       => esc_attr__( 'H5 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h5', '.h5'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'typography',
		'settings'    => 'h6_typography',
		'label'       => esc_attr__( 'H6 Typography', 'padang_padang' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => 'Julius Sans One',
			'font-size'      => '18px',
			'variant'        => 'regular',
			'line-height'    => '1.5',
			'letter-spacing' => '0',
		),
		'output'      => array(
			array(
				'element' => array( 'h6', '.h6'),
			),
		),
		'active_callback' => [
			[
				'setting'  => 'heading_independent_setting',
				'operator' => '==',
				'value'    => true,
			]
		],
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
			'font-family' => 'Lato',
			'font-size'   => '15px',
		),
		'output'      => array(
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
			'font-family' => 'Nothing You Could Do',
			'font-size'   => '16px',
		),
		'output'      => array(
			array(
				'element' => '.handwrite',
			),
		),
	) );

