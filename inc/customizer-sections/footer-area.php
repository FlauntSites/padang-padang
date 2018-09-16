<?php 

/**
 * Add the Header Options section
 */
padang_padang_Kirki::add_section( 'footer_options', array(
	'title'      => esc_attr__( 'Footer Options', 'padang_padang' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

	/**
	* Toggles Social On and Off.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'footer_recent_posts',
		'label'       => esc_attr__( 'Recent Blog Posts', 'padang_padang' ),
		'description' => esc_attr__( 'Turn Recent Blog Post grid on or off', 'padang_padang' ),
		'section'     => 'footer_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_columns',
		'label'    => esc_attr__( 'Number of columns', 'padang_padang' ),
		'section'  => 'footer_options',
		'default'  => 4,
		'choices'  => array(
			'min'  => '3',
			'max'  => '8',
			'step' => '1',
		),
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_rows',
		'label'    => esc_attr__( 'Number of rows', 'padang_padang' ),
		'section'  => 'footer_options',
		'default'  => 2,
		'choices'  => array(
			'min'  => '1',
			'max'  => '8',
			'step' => '1',
		),
	) );
