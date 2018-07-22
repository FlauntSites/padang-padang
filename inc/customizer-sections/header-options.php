<?php 

/**
 * Add the Header Options section
 */
padang_padang_Kirki::add_section( 'header_options', array(
	'title'      => esc_attr__( 'Header Options', 'padang_padang' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'image',
		'settings'    => 'fsc_logo',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'label'       => __( 'Logo', 'padang_padang' ),
		'description' => __( 'Add or edit your logo here', 'padang_padang' ),
		'section'     => 'header_options',
		'default'     => '',
		'priority'    => 10,
		'choices'     => array(
			
			'save_as' => 'array',
		),

	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'slider',
		'settings'    => 'fsc_logo_width',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'label'       => esc_attr__( 'Adjust the size of your logo here', 'padang_padang' ),
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
