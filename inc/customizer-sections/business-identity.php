<?php
/**
 * Add the Site Identity Options section.
 */

padang_padang_Kirki::add_panel( 'business_identity', array(
	'title' => esc_html__( 'Business Identity', 'padang_padang' ),
	'icon'  => 'dashicons-tide',
) );


	/********************************
	 * Add the Business Info section
	******************************* */

	padang_padang_Kirki::add_panel( 'identity_business_info', array(
		'title' => esc_attr__( 'Business Info', 'padang_padang' ),
		'panel' => 'business_identity',
		'icon'  => 'dashicons-admin-network',
	));

	/**
	 * Address
	 */
	padang_padang_Kirki::add_section( 'identity_business_info_address', array(
		'title'       => esc_attr__( 'Name, Address, Phone', 'padang_padang' ),
		'capability'  => 'edit_theme_options',
		'panel'       => 'identity_business_info',
		'description' => __( 'Add or edit your logo here', 'padang_padang' ),
		'icon'        => 'dashicons-location-alt',

	) );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'business_name',
			'label'       => esc_html__( 'Business Name', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'settings' => 'separator-2',
			'section'  => 'identity_business_info_address',
			'type'     => 'custom',
			'default'  => '<hr>',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_1',
			'label'       => esc_html__( 'Address Line 1', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'street_address_2',
			'label'       => esc_html__( 'Address Line 2', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'city',
			'label'       => esc_html__( 'City', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'state',
			'label'       => esc_html__( 'State/Province', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'postal_code',
			'label'       => esc_html__( 'Postal Code', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'separator-3',
			'section'  => 'identity_business_info_address',
			'default'  => '<hr>',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'text',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'phone',
			'label'       => esc_html__( 'Phone', 'padang_padang' ),
			'section'     => 'identity_business_info_address',
			'transport'   => 'postMessage',
		]);

		/********************************
		 * Hours
		******************************* */
		$hours = [
			'01:00' => esc_html__( '1:00 AM', 'padang_padang' ),
			'02:00' => esc_html__( '2:00 AM', 'padang_padang' ),
			'03:00' => esc_html__( '3:00 AM', 'padang_padang' ),
			'04:00' => esc_html__( '4:00 AM', 'padang_padang' ),
			'05:00' => esc_html__( '5:00 AM', 'padang_padang' ),
			'06:00' => esc_html__( '6:00 AM', 'padang_padang' ),
			'07:00' => esc_html__( '7:00 AM', 'padang_padang' ),
			'08:00' => esc_html__( '8:00 AM', 'padang_padang' ),
			'09:00' => esc_html__( '9:00 AM', 'padang_padang' ),
			'10:00' => esc_html__( '10:00 AM', 'padang_padang' ),
			'11:00' => esc_html__( '11:00 AM', 'padang_padang' ),
			'12:00' => esc_html__( '12:00 PM', 'padang_padang' ),
			'13:00' => esc_html__( '1:00 PM', 'padang_padang' ),
			'14:00' => esc_html__( '2:00 PM', 'padang_padang' ),
			'15:00' => esc_html__( '3:00 PM', 'padang_padang' ),
			'16:00' => esc_html__( '4:00 PM', 'padang_padang' ),
			'17:00' => esc_html__( '5:00 PM', 'padang_padang' ),
			'18:00' => esc_html__( '6:00 PM', 'padang_padang' ),
			'19:00' => esc_html__( '7:00 PM', 'padang_padang' ),
			'20:00' => esc_html__( '8:00 PM', 'padang_padang' ),
			'21:00' => esc_html__( '9:00 PM', 'padang_padang' ),
			'22:00' => esc_html__( '10:00 PM', 'padang_padang' ),
			'23:00' => esc_html__( '11:00 PM', 'padang_padang' ),
			'24:00' => esc_html__( '12:00 AM', 'padang_padang' ),
		];


		padang_padang_Kirki::add_section( 'identity_business_info_hours', array(
			'title'       => esc_attr__( 'Business Hours', 'padang_padang' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'identity_business_info',
			'description' => __( 'Include your business hours here. If you have a Google My Business profile, make sure they are exactly the same to avoid Local SEO conflicts.', 'padang_padang' ),
			'icon'        => 'dashicons-clock',
		) );

		// Monday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'monday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Monday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'mon_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_open',
			'label'           => esc_html__( 'Open', 'padang_padang' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '8:00 AM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'mon_hour_close',
			'label'           => esc_html__( 'Close', 'padang_padang' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '5:00 PM',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'mon_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Tuesday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'tuesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Tuesday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'tue_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_open',
			'label'           => esc_html__( 'Open', 'padang_padang' ),
			'section'         => 'identity_business_info_hours',
			'default'         => 'Closed',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'            => 'select',
			'option_type'     => 'option',
			'option_name'     => 'fsc_options',
			'settings'        => 'tue_hour_close',
			'label'           => esc_html__( 'Close', 'padang_padang' ),
			'section'         => 'identity_business_info_hours',
			'default'         => '',
			'multiple'        => 1,
			'transport'       => 'postMessage',
			'choices'         => $hours,
			'active_callback' => [
				[
					'setting'  => 'tue_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Wednesday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'wednesday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Wednesday</h3>',
		] );


		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_open',
			'label'       => esc_html__( 'Open', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'wed_hour_close',
			'label'       => esc_html__( 'Close', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'wed_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Thursday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'thursday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Thursday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_open',
			'label'       => esc_html__( 'Open', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'thu_hour_close',
			'label'       => esc_html__( 'Close', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'thu_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Friday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'friday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Friday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_open',
			'label'       => esc_html__( 'Open', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'fri_hour_close',
			'label'       => esc_html__( 'Close', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'fri_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Saturday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'saturday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Saturday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_open',
			'label'       => esc_html__( 'Open', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sat_hour_close',
			'label'       => esc_html__( 'Close', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sat_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		// Sunday.
		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'     => 'custom',
			'settings' => 'sunday',
			'section'  => 'identity_business_info_hours',
			'default'  => '<h3>Sunday</h3>',
		] );

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'checkbox',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_closed',
			'label'       => esc_html__( 'Closed', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Open',
			'multiple'    => 1,
			'transport'   => 'postMessage',
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_open',
			'label'       => esc_html__( 'Open', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => 'Closed',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);

		padang_padang_Kirki::add_field( 'padang_padang', [
			'type'        => 'select',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'settings'    => 'sun_hour_close',
			'label'       => esc_html__( 'Close', 'padang_padang' ),
			'section'     => 'identity_business_info_hours',
			'default'     => '',
			'multiple'    => 1,
			'transport'   => 'postMessage',
			'choices'     => $hours,
			'active_callback' => [
				[
					'setting'  => 'sun_closed',
					'operator' => '=',
					'value'    => false,
				],
			],
		]);




	/********************************
	 * Add the Logo Options section
	******************************* */

	padang_padang_Kirki::add_section( 'identity_logo', [
		'title'      => esc_attr__( 'Logo', 'padang_padang' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'business_identity',
		'icon'       => 'dashicons-tide',
	]);

		padang_padang_Kirki::add_field( 'padang_padang', array(
			'type'        => 'image',
			'settings'    => 'fsc_logo',
			'option_type' => 'option',
			'option_name' => 'fsc_options',
			'label'       => __( 'Logo', 'padang_padang' ),
			'description' => __( 'Add or edit your logo here', 'padang_padang' ),
			'section'     => 'identity_logo',
			'default'     => '',
			'priority'    => 10,
			'choices'     => array(
				'save_as' => 'id',
			),
		) );

		padang_padang_Kirki::add_field( 'padang_padang', array(
			'type'     => 'slider',
			'settings' => 'padang_padang_logo_width', //This is a THEME setting.
			'label'    => esc_attr__( 'Adjust the size of your logo here', 'padang_padang' ),
			'section'  => 'identity_logo',
			'default'  => 200,
			'choices'  => array(
				'min'  => '100',
				'max'  => '300',
				'step' => '1',
			),
		) );




	/********************************
	 * Add the Social Links section - (Tied to Yoast SEO for Schema)
	 ******************************* */

	padang_padang_Kirki::add_section( 'social-links', array(
		'title'       => esc_attr__( 'Social Links', 'padang_padang' ),
		'description' => __( 'Add your social media links here.', 'padang_padang' ),
		'capability'  => 'edit_theme_options',
		'panel'       => 'business_identity',
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
			'transport'   => 'postMessage',
		));

		padang_padang_Kirki::add_field( 'padang_padang', array(
			'type'        => 'text',
			'settings'    => 'twitter_site',
			'option_type' => 'option',
			'option_name' => 'wpseo_social',
			'label'       => __( 'Twitter Username', 'padang_padang' ),
			'description' => __( 'Don\'t include @', 'padang_padang' ),
			'section'     => 'social-links',
			'default'     => '',
			'transport'   => 'postMessage',
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
			'transport'   => 'postMessage',
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
			'transport'   => 'postMessage',
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
			'transport'   => 'postMessage',
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
			'transport'   => 'postMessage',
		) );
