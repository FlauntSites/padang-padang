<?php

/**
 * Get available forms and create an array.
 */

$forms      = GFAPI::get_forms();
$form_array = array();

if ( $forms ) {
	foreach ( $forms as $form ) {
		$form_array[] = esc_html__( $form['title'], 'padang_padang' );
	}
}


/**
 * Add the Header Options section
 */
padang_padang_Kirki::add_section( 'cta_options', array(
	'title'      => esc_attr__( 'Call To Action Options', 'padang_padang' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'icon'       => 'dashicons-megaphone',
) );


	/**
	* Display Contact Form.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'footer_contact_form',
		'label'       => esc_attr__( 'Show Contact Form', 'padang_padang' ),
		'description' => esc_attr__( 'Displays a selected contact form and background image.', 'padang_padang' ),
		'section'     => 'cta_options',
		'default'     => '0',
	) );

	padang_padang_Kirki::add_field( 'padang_padang', [
		'type'        => 'select',
		'settings'    => 'footer_contact_form_name',
		'label'       => esc_html__( 'Select a Form', 'padang_padang' ),
		'section'     => 'cta_options',
		'default'     => 0,
		'placeholder' => esc_html__( 'Select an option...', 'padang_padang' ),
		'priority'    => 10,
		'choices'     => $form_array,
		'active_callback' => [
			[
				'setting'  => 'footer_contact_form',
				'operator' => '=',
				'value'    => 1,
			],
		],
	] );

	padang_padang_Kirki::add_field( 'padang_padang', [
		'type'        => 'image',
		'settings'    => 'footer_contact_form_image',
		'label'       => esc_html__( 'Background Image', 'padang_padang' ),
		'description' => esc_html__( 'Add a image behind your form.', 'padang_padang' ),
		'section'     => 'cta_options',
		'default'     => '',
		'choices'     => [
			'save_as' => 'array',
		],
	] );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'slider',
		'settings' => 'footer_contact_form_image_tint',
		'label'    => esc_attr__( 'Image Brightness', 'padang_padang' ),
		'section'  => 'cta_options',
		'default'  => '1',
		'choices'  => array(
			'min'  => '0',
			'max'  => '1',
			'step' => '.1',
		),
	) );


	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'custom',
		'settings' => 'divide_10',
		'section'  => 'cta_options',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	) );


	/**
	* Display Recent Posts.
	*/
	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'        => 'toggle',
		'settings'    => 'footer_recent_posts',
		'label'       => esc_attr__( 'Recent Blog Posts', 'padang_padang' ),
		'description' => esc_attr__( 'Turn Recent Blog Post grid on or off', 'padang_padang' ),
		'section'     => 'cta_options',
		'default'     => '1',
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_columns',
		'label'    => esc_attr__( 'Number of columns', 'padang_padang' ),
		'section'  => 'cta_options',
		'default'  => 4,
		'choices'  => array(
			'min'  => '3',
			'max'  => '6',
			'step' => '1',
		),
		'active_callback' => [
			[
				'setting'  => 'footer_recent_posts',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );

	padang_padang_Kirki::add_field( 'padang_padang', array(
		'type'     => 'slider',
		'settings' => 'number_recent_posts_rows',
		'label'    => esc_attr__( 'Number of rows', 'padang_padang' ),
		'section'  => 'cta_options',
		'default'  => 2,
		'choices'  => array(
			'min'  => '1',
			'max'  => '6',
			'step' => '1',
		),
		'active_callback' => [
			[
				'setting'  => 'footer_recent_posts',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );




