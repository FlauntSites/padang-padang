<?php 

/**
 * Add the Color section
 */
padang_padang_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'padang_padang' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
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
