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
