<?php 

/**
 * Add the typography section
 */
padang_padang_Kirki::add_section( 'social-links', array(
    'title'         => esc_attr__( 'Social Links', 'padang_padang' ),
    'description'   => __( 'Add your social media links here.', 'padang_padang' ),    
	'priority'      => 2,
	'capability'    => 'edit_theme_options',
) );


    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'        => 'text',
        'settings'    => 'fsc_facebook_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Facebook URL', 'padang_padang' ),
        'description' => __( 'Include the http:// or https://', 'padang_padang' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'        => 'text',
        'settings'    => 'fsc_twitter_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Twitter URL', 'padang_padang' ),
        'description' => __( 'Include the http:// or https://', 'padang_padang' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'        => 'text',
        'settings'    => 'fsc_instagram_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Instagram URL', 'padang_padang' ),
        'description' => __( 'Include the http:// or https://', 'padang_padang' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'        => 'text',
        'settings'    => 'fsc_pinterest_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Pinterest URL', 'padang_padang' ),
        'description' => __( 'Include the http:// or https://', 'padang_padang' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    padang_padang_Kirki::add_field( 'padang_padang', array(
        'type'        => 'text',
        'settings'    => 'fsc_google-plus_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Google+ URL', 'padang_padang' ),
        'description' => __( 'Include the http:// or https://', 'padang_padang' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );
