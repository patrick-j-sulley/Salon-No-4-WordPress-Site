<?php 
if ( ! function_exists( 'hantus_slider_setting' ) ) :
function hantus_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
		$wp_customize->add_section(
			'slider_setting', array(
				'title' => esc_html__( 'Slider Section', 'hantus' ),
				'panel' => 'hantus_frontpage_sections',
				'priority' => apply_filters( 'hantus_section_priority', 1, 'slider_setting' ),
			)
		);
	// Slider Hide/ Show Setting //
	if ( class_exists( 'Hantus_Customizer_Toggle_Control' ) ) {	
	$wp_customize->add_setting( 
		'hide_show_slider' , 
			array(
			'default' => '1',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control( new Hantus_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_slider', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'hantus' ),
			'section'     => 'slider_setting',
			'settings'    => 'hide_show_slider',
			'type'        => 'ios', // light, ios, flat
		) 
	));
	}
	// Background Image // 
    $wp_customize->add_setting( 
    	'slide_image' , 
    	array(
			'default' 			=>  CLEVERFOX_PLUGIN_URL .'inc/hantus/images/slider/slider.jpg',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_url',
			
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'slide_image' ,
		array(
			'label'          => __( 'Background Image', 'hantus' ),
			'section'        => 'slider_setting',
			'settings'   	 => 'slide_image',
		) 
	));
	//slide title//
	
	$wp_customize->add_setting(
    	'slide_title',
    	array(
	        'default'			=> __('Welcome To Hantus Spa','hantus'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'slide_title',
		array(
		    'label'   => __('Title','hantus'),
		    'section' => 'slider_setting',
			'settings'   	 => 'slide_title',
			'type'           => 'text',
		)  
	);
	
	//slide subtitle//
	
	$wp_customize->add_setting(
    	'slide_subtitle',
    	array(
	        'default'			=> __('Beauty & Spa Wellness','hantus'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'slide_subtitle',
		array(
		    'label'   => __('Subtitle','hantus'),
		    'section' => 'slider_setting',
			'settings'   	 => 'slide_subtitle',
			'type'           => 'text',
		)  
	);
	
	//slide description//
	$wp_customize->add_setting(
    	'slide_description',
    	array(
	        'default'			=> __('The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'slide_description',
		array(
		    'label'   => __('Description','hantus'),
		    'section' => 'slider_setting',
			'settings'   	 => 'slide_description',
			'type'           => 'textarea',
		)  
	);
	// button text
	$wp_customize->add_setting(
    	'slide_btn_text',
    	array(
	        'default'			=> __('Make an Appoinment','hantus'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'slide_btn_text',
		array(
		    'label'   => __('button text','hantus'),
		    'section' => 'slider_setting',
			'settings'   	 => 'slide_btn_text',
			'type'           => 'text',
		)  
	);
	
	// Slider button link
		$wp_customize->add_setting(
    	'slide_btn_link',
    	array(
	        'default'			=> __('#','hantus'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'hantus_sanitize_url',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'slide_btn_link',
		array(
		    'label'   => __('Link','hantus'),
		    'section' => 'slider_setting',
			'settings'   	 => 'slide_btn_link',
			'type'           => 'text',
		)  
	);
	//slider opacity
	
	// Slider Text Caption // 
	$wp_customize->add_setting( 
		'slider_opacity' , 
			array(
			'default' => '0',
			'capability'     => 'edit_theme_options',
		) 
	);
	$wp_customize->add_control( 
	new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'slider_opacity', 
		array(
			'section'  => 'slider_setting',
			'settings' => 'slider_opacity',
			'label'    => __( 'Background Opacity','hantus' ),
			'input_attrs' => array(
				'min'    => 0,
				'max'    => 0.9,
				'step'   => 0.1,
				//'suffix' => 'px', //optional suffix
			),
		) ) 
	);	
}
add_action( 'customize_register', 'hantus_slider_setting' );	
endif;
// slider selective refresh
function hantus_home_slider_section_partials( $wp_customize ){

	
	// slider title
	$wp_customize->selective_refresh->add_partial( 'slide_title', array(
		'selector'            => '#slider .header-single-slider h3',
		'settings'            => 'slide_title',
		'render_callback'  => 'home_section_slider_tit_render_callback',
	
	) );
	// slider subtitle
	$wp_customize->selective_refresh->add_partial( 'slide_subtitle', array(
		'selector'            => '#slider .header-single-slider h1',
		'settings'            => 'slide_subtitle',
		'render_callback'  => 'home_section_slide_subtitle_render_callback',
	
	) );
	// slider title
	$wp_customize->selective_refresh->add_partial( 'slide_description', array(
		'selector'            => '#slider .header-single-slider p',
		'settings'            => 'slide_description',
		'render_callback'  => 'home_section_slider_desc_render_callback',
	
	) );
	// slider button
	$wp_customize->selective_refresh->add_partial( 'slide_btn_text', array(
		'selector'            => '#slider .header-single-slider a',
		'settings'            => 'slide_btn_text',
		'render_callback'  => 'home_section_slider_button_render_callback',
	
	) );
	
	}
add_action( 'customize_register', 'hantus_home_slider_section_partials' );

// slider title
function home_section_slider_tit_render_callback() {
	return get_theme_mod( 'slide_title' );
}
// slider subtitle
function home_section_slide_subtitle_render_callback() {
	return get_theme_mod( 'slide_subtitle' );
}
//slide desc
function home_section_slider_desc_render_callback() {
	return get_theme_mod( 'slide_description' );
}
//slide desc
function home_section_slider_button_render_callback() {
	return get_theme_mod( 'slide_btn_text' );
}
?>