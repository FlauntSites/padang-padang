<?php
/**
 * Add the Custom CSS section
 */

padang_padang_Kirki::add_section( 'custom_js', array(
	'title'      => esc_attr__( 'Custom JS', 'padang_padang' ),
	'priority'   => 5,
	'capability' => 'edit_theme_options',
) );

padang_padang_Kirki::add_field( 'padang_padang', array(
    'type'        => 'code',
    'settings'    => 'custom_js',
    'label'       => __( 'Custom JS', 'padang_padang' ),
    'description' => __( 'For additional Javascript.', 'padang_padang' ),
    'section'     => 'custom_js',
    'priority'    => 10,
    'choices'     => array(
        'language' => 'js',
        'theme'    => 'monokai',
        'height'   => 250,
    ),
));
