<?php


/**
 * Add the Custom CSS section
 */
padang_padang_Kirki::add_section( 'custom_css', array(
	'title'      => esc_attr__( 'Custom CSS', 'padang_padang' ),
	'priority'   => 4,
	'capability' => 'edit_theme_options',
) );

    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'          => 'code',
        'settings'      => 'custom_css',
        'label'         => __( 'Custom CSS', 'padang_padang' ),
        'description'   => __( 'Know how to code CSS to make things pretty? Add your custom CSS here.', 'padang_padang' ),
        'section'       => 'custom_css',
        'priority'      => 10,
        'choices'       => array(
            'language'  => 'css',
            'theme'     => 'monokai',
            'height'    => 250,
        ),
    ) );
