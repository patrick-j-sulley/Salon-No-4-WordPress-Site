<?php
// Customizer tabs for header social media & address
function hantus_social_customize_register( $wp_customize ) {
	if ( class_exists( 'Cleverfox_Customize_Control_Tabs' ) ) {
		$wp_customize->add_setting(
			'hantus_social_tabs', array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			new Cleverfox_Customize_Control_Tabs(
				$wp_customize, 'hantus_social_tabs', array(
					'section' => 'header_setting',
					'tabs' => array(
						'general' => array(
							'nicename' => esc_html__( 'Setting', 'hantus' ),
							'icon' => 'cogs',
							'controls' => array(
								'hide_show_social_icon',
							),
						),
						'first' => array(
							'nicename' => esc_html__( 'Timing', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'hantus_time_icon',
								'hantus_timing'
							),
						),
						'second' => array(
							'nicename' => esc_html__( 'Social Icons', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'social_icons',
							),
						),
					),
				)
			)
		);
	}
}
add_action( 'customize_register', 'hantus_social_customize_register' );

// Customizer tabs for header social media & address
function hantus_contact_customize_register( $wp_customize ) {
	if ( class_exists( 'Cleverfox_Customize_Control_Tabs' ) ) {

		
		$wp_customize->add_setting(
			'hantus_contacts_tabs', array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			new Cleverfox_Customize_Control_Tabs(
				$wp_customize, 'hantus_contacts_tabs', array(
					'section' => 'header_contact',
					'tabs' => array(
						'general' => array(
							'nicename' => esc_html__( 'Setting', 'hantus' ),
							'icon' => 'cogs',
							'controls' => array(
								'hide_show_contact_infot',
							),
						),
						'first' => array(
							'nicename' => esc_html__( 'Email', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'header_email_icon',
								'header_email',
							),
						),
						'second' => array(
							'nicename' => esc_html__( 'Phone', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'header_phone_icon',
								'header_phone_number',
							),
						),
						
					),
				)
			)
		);
	}
}
add_action( 'customize_register', 'hantus_contact_customize_register' );

// Customizer tabs for header Search & cart
function hantus_search_customize_register( $wp_customize ) {
	if ( class_exists( 'Cleverfox_Customize_Control_Tabs' ) ) {
		$wp_customize->add_setting(
			'hantus_search_tabs', array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			new Cleverfox_Customize_Control_Tabs(
				$wp_customize, 'hantus_search_tabs', array(
					'section' => 'header_contact_cart',
					'tabs' => array(
						'general' => array(
							'nicename' => esc_html__( 'Setting', 'hantus' ),
							'icon' => 'cogs',
							'controls' => array(
								'search_header_setting',
							),
						),
						'first' => array(
							'nicename' => esc_html__( 'Search', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'header_search',
							),
						),
					),
				)
			)
		);
	}
}
add_action( 'customize_register', 'hantus_search_customize_register' );

// Customizer tabs for copyright_content

function hantus_copyright_content_customize_register( $wp_customize ) {
	if ( class_exists( 'Cleverfox_Customize_Control_Tabs' ) ) {

		// Pricing Tables Tabs
		$wp_customize->add_setting(
			'hantus_copyrights_tabs', array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			new Cleverfox_Customize_Control_Tabs(
				$wp_customize, 'hantus_copyrights_tabs', array(
					'section' => 'footer_copyright',
					'tabs' => array(
						'general' => array(
							'nicename' => esc_html__( 'Settings', 'hantus' ),
							'icon' => 'cogs',
							'controls' => array(
								'hide_show_copyright',
							),
						),
						'first' => array(
							'nicename' => esc_html__( 'Content', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'copyright_content',
								'footer_background_setting',
							),
						),
					),
				)
			)
		);
	}
}
add_action( 'customize_register', 'hantus_copyright_content_customize_register' );


// Customizer tabs for Payment
function hantus_payment_content_customize_register( $wp_customize ) {
	if ( class_exists( 'Cleverfox_Customize_Control_Tabs' ) ) {

		// Pricing Tables Tabs
		$wp_customize->add_setting(
			'hantus_payment_tabs', array(
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			new Cleverfox_Customize_Control_Tabs(
				$wp_customize, 'hantus_payment_tabs', array(
					'section' => 'footer_icon',
					'tabs' => array(
						'general' => array(
							'nicename' => esc_html__( 'Settings', 'hantus' ),
							'icon' => 'cogs',
							'controls' => array(
								'hide_show_payment',
							),
						),
						'first' => array(
							'nicename' => esc_html__( 'Content', 'hantus' ),
							'icon' => 'table',
							'controls' => array(
								'footer_Payment_icon',
							),
						),
					),
				)
			)
		);
	}
}

add_action( 'customize_register', 'hantus_payment_content_customize_register' );
?>