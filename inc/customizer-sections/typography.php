<?php 

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
		array(
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
						'button', 
						'input[type="button"]', 
						'input[type="reset"]', 
						'input[type="submit"]',
					),
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
			'variant'        => array('100','400','900'),
			'font-size'      => '18px',
			// 'line-height'    => '1.5',
			// 'color'          => '#333333',
		),
		'output' => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2', 'h3', '.h3', 'h4', '.h4', 'h5', '.h5', 'h6', '.h6' ),
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
			'variant'        => array('100','400','900') ,
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

