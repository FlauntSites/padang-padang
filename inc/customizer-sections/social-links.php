<?php
/**
 * Add the typography section
 */

padang_padang_Kirki::add_section( 'social-links', array(
	'title'       => esc_attr__( 'Social Links', 'padang_padang' ),
	'description' => __( 'Add your social media links here.', 'padang_padang' ),
	'priority'    => 10,
	'capability'  => 'edit_theme_options',
	'icon'        => 'dashicons-facebook',
) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'link',
		'settings'    => 'facebook_site',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'Facebook URL', 'padang_padang' ),
		'description' => __( 'Include the https://', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'text',
		'settings'    => 'twitter_site',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'Twitter Username', 'padang_padang' ),
		'description' => __( 'Don\'t include @', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'link',
		'settings'    => 'instagram_url',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'Instagram URL', 'padang_padang' ),
		'description' => __( 'Include the https://', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'link',
		'settings'    => 'pinterest_url',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'Pinterest URL', 'padang_padang' ),
		'description' => __( 'Include the https://', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'link',
		'settings'    => 'youtube_url',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'YouTube URL', 'padang_padang' ),
		'description' => __( 'Include the https://', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'link',
		'settings'    => 'linkedin_url',
		'option_type' => 'option',
		'option_name' => 'wpseo_social',
		'label'       => __( 'LinkedIn URL', 'padang_padang' ),
		'description' => __( 'Include the https://', 'padang_padang' ),
		'section'     => 'social-links',
		'default'     => '',
		'priority'    => 10,
	) );
