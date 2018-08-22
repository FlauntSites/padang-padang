<?php


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
	'option_type' => 'option',
	'option_name' => 'fsc_image_options',
	'label'       => __( 'Caption Background Color', 'padang_padang' ),
	'section'     => 'image_appearance',
	'default'     => 'rgba( 0,0,0,.8 )',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'color',
	'settings'    => 'caption_text_color',
	'option_type' => 'option',
	'option_name' => 'fsc_image_options',
	'label'       => __( 'Caption Text & Icon Color', 'padang_padang' ),
	'section'     => 'image_appearance',
	'default'     => '#fff',
	'priority'    => 10,

) );


padang_padang_Kirki::add_field( 'padang_padang', array(
	'type'        => 'toggle',
	'settings'    => 'image_stroke',
	'label'       => __( 'Turn on Inset border', 'padang_padang' ),
	'section'     => 'image_appearance',
	'default'     => '0',
	'priority'    => 10,
	
) );
