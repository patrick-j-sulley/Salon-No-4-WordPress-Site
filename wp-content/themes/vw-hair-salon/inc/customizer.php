<?php
/**
 * VW Hair Salon Theme Customizer
 *
 * @package VW Hair Salon
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_hair_salon_custom_controls() {

    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_hair_salon_custom_controls' );

function vw_hair_salon_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_hair_salon_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-hair-salon' ),
	    'description' => __( 'Description of what this panel does.', 'vw-hair-salon' ),
	) );

	$wp_customize->add_section( 'vw_hair_salon_left_right', array(
    	'title'      => __( 'General Settings', 'vw-hair-salon' ),
		'priority'   => 30,
		'panel' => 'vw_hair_salon_panel_id'
	) );

	$wp_customize->add_setting('vw_hair_salon_width_option',array(
        'default' => __('Full Width','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Hair_Salon_Image_Radio_Control($wp_customize, 'vw_hair_salon_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-hair-salon'),
        'description' => __('Here you can change the width layout of Website.','vw-hair-salon'),
        'section' => 'vw_hair_salon_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_hair_salon_theme_options',array(
        'default' => __('Right Sidebar','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_hair_salon_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-hair-salon'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-hair-salon'),
        'section' => 'vw_hair_salon_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-hair-salon'),
            'Right Sidebar' => __('Right Sidebar','vw-hair-salon'),
            'One Column' => __('One Column','vw-hair-salon'),
            'Three Columns' => __('Three Columns','vw-hair-salon'),
            'Four Columns' => __('Four Columns','vw-hair-salon'),
            'Grid Layout' => __('Grid Layout','vw-hair-salon')
        ),
	));

	$wp_customize->add_setting('vw_hair_salon_page_layout',array(
        'default' => __('One Column','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));
	$wp_customize->add_control('vw_hair_salon_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-hair-salon'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-hair-salon'),
        'section' => 'vw_hair_salon_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-hair-salon'),
            'Right Sidebar' => __('Right Sidebar','vw-hair-salon'),
            'One Column' => __('One Column','vw-hair-salon')
        ),
	) );

	//Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'vw_hair_salon_woocommerce_shop_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Shop Page Sidebar','vw-hair-salon' ),
		'section' => 'vw_hair_salon_left_right'
    )));

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'vw_hair_salon_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','vw-hair-salon' ),
		'section' => 'vw_hair_salon_left_right'
    )));

	//Pre-Loader
	$wp_customize->add_setting( 'vw_hair_salon_loader_enable',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','vw-hair-salon' ),
        'section' => 'vw_hair_salon_left_right'
    )));

	$wp_customize->add_setting('vw_hair_salon_loader_icon',array(
        'default' => __('Two Way','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));
	$wp_customize->add_control('vw_hair_salon_loader_icon',array(
        'type' => 'select',
        'label' => __('Pre-Loader Type','vw-hair-salon'),
        'section' => 'vw_hair_salon_left_right',
        'choices' => array(
            'Two Way' => __('Two Way','vw-hair-salon'),
            'Dots' => __('Dots','vw-hair-salon'),
            'Rotate' => __('Rotate','vw-hair-salon')
        ),
	) );
    
	//Topbar section
	$wp_customize->add_section('vw_hair_salon_topbar',array(
		'title'	=> __('Topbar Section','vw-hair-salon'),
		'description'	=> __('Add TopBar Content here','vw-hair-salon'),
		'priority'	=> null,
		'panel' => 'vw_hair_salon_panel_id',
	));

	$wp_customize->add_setting( 'vw_hair_salon_topbar_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_topbar_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Topbar','vw-hair-salon' ),
          'section' => 'vw_hair_salon_topbar'
    )));

    //Sticky Header
	$wp_customize->add_setting( 'vw_hair_salon_sticky_header',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','vw-hair-salon' ),
        'section' => 'vw_hair_salon_topbar'
    )));

    $wp_customize->add_setting( 'vw_hair_salon_search_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_search_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Search','vw-hair-salon' ),
          'section' => 'vw_hair_salon_topbar'
    )));

	$wp_customize->add_setting('vw_hair_salon_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_email_address',array(
		'label'	=> __('Add Email Address','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_hair_salon_booking',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_booking',array(
		'label'	=> __('Add Booking Link','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_booking',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_hair_salon_booking_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_booking_text',array(
		'label'	=> __('Add Booking Text','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_booking_text',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('vw_hair_salon_location_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_location_text',array(
		'label'	=> __('Add Location Text','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_location_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_hair_salon_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_address',array(
		'label'	=> __('Add Location','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_address',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('vw_hair_salon_day',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_day',array(
		'label'	=> __('Add Day','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_day',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_hair_salon_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_time',array(
		'label'	=> __('Add Time','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_hair_salon_phone_no',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_phone_no',array(
		'label'	=> __('Add Phone Number','vw-hair-salon'),
		'section'	=> 'vw_hair_salon_topbar',
		'setting'	=> 'vw_hair_salon_phone_no',
		'type'		=> 'text'
	));	

	//Slider
	$wp_customize->add_section( 'vw_hair_salon_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-hair-salon' ),
		'priority'   => null,
		'panel' => 'vw_hair_salon_panel_id'
	) );

	$wp_customize->add_setting( 'vw_hair_salon_slider_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_slider_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Slider','vw-hair-salon' ),
          'section' => 'vw_hair_salon_slidersettings'
    )));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_hair_salon_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_hair_salon_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_hair_salon_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-hair-salon' ),
			'description' => __('Slider image size (1500 x 765)','vw-hair-salon'),
			'section'  => 'vw_hair_salon_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
	$wp_customize->add_setting('vw_hair_salon_slider_content_option',array(
        'default' => __('Left','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Hair_Salon_Image_Radio_Control($wp_customize, 'vw_hair_salon_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-hair-salon'),
        'section' => 'vw_hair_salon_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'vw_hair_salon_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_hair_salon_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-hair-salon' ),
		'section'     => 'vw_hair_salon_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_hair_salon_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_hair_salon_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_hair_salon_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-hair-salon' ),
	'section'     => 'vw_hair_salon_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_hair_salon_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-hair-salon'),
      '0.1' =>  esc_attr('0.1','vw-hair-salon'),
      '0.2' =>  esc_attr('0.2','vw-hair-salon'),
      '0.3' =>  esc_attr('0.3','vw-hair-salon'),
      '0.4' =>  esc_attr('0.4','vw-hair-salon'),
      '0.5' =>  esc_attr('0.5','vw-hair-salon'),
      '0.6' =>  esc_attr('0.6','vw-hair-salon'),
      '0.7' =>  esc_attr('0.7','vw-hair-salon'),
      '0.8' =>  esc_attr('0.8','vw-hair-salon'),
      '0.9' =>  esc_attr('0.9','vw-hair-salon')
	),
	));

	// What do you need Section
	$wp_customize->add_section('vw_hair_salon_need_section',array(
		'title'	=> __('What do you need Section','vw-hair-salon'),
		'description'	=> __('Add content here.','vw-hair-salon'),
		'panel' => 'vw_hair_salon_panel_id',
	));

	$wp_customize->add_setting('vw_hair_salon_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_section_title',array(
		'label'	=> __('Section Title','vw-hair-salon'),
		'section'=> 'vw_hair_salon_need_section',
		'setting'=> 'vw_hair_salon_section_title',
		'type'=> 'text'
	));

	for ( $count = 0; $count <= 3; $count++ ) {

		$wp_customize->add_setting( 'vw_hair_salon_tab_pages' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_hair_salon_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'vw_hair_salon_tab_pages' . $count, array(
			'label'    => __( 'Select Page', 'vw-hair-salon' ),
			'section'  => 'vw_hair_salon_need_section',
			'type'     => 'dropdown-pages'
		));
	}

	//What do you need excerpt
	$wp_customize->add_setting( 'vw_hair_salon_what_you_need_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_hair_salon_what_you_need_excerpt_number', array(
		'label'       => esc_html__( 'What do you need Excerpt length','vw-hair-salon' ),
		'section'     => 'vw_hair_salon_need_section',
		'type'        => 'range',
		'settings'    => 'vw_hair_salon_what_you_need_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Blog Post
	$wp_customize->add_section('vw_hair_salon_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-hair-salon'),
		'panel' => 'vw_hair_salon_panel_id',
	));	

	$wp_customize->add_setting( 'vw_hair_salon_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-hair-salon' ),
        'section' => 'vw_hair_salon_blog_post'
    )));

    $wp_customize->add_setting( 'vw_hair_salon_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_toggle_author',array(
		'label' => esc_html__( 'Author','vw-hair-salon' ),
		'section' => 'vw_hair_salon_blog_post'
    )));

    $wp_customize->add_setting( 'vw_hair_salon_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-hair-salon' ),
		'section' => 'vw_hair_salon_blog_post'
    )));

    $wp_customize->add_setting( 'vw_hair_salon_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_hair_salon_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-hair-salon' ),
		'section'     => 'vw_hair_salon_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_hair_salon_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Blog layout
    $wp_customize->add_setting('vw_hair_salon_blog_layout_option',array(
        'default' => __('Default','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
    ));
    $wp_customize->add_control(new VW_Hair_Salon_Image_Radio_Control($wp_customize, 'vw_hair_salon_blog_layout_option', array(
        'type' => 'select',
        'label' => __('Blog Layouts','vw-hair-salon'),
        'section' => 'vw_hair_salon_blog_post',
        'choices' => array(
            'Default' => get_template_directory_uri().'/images/blog-layout1.png',
            'Center' => get_template_directory_uri().'/images/blog-layout2.png',
            'Left' => get_template_directory_uri().'/images/blog-layout3.png',
    ))));

	//Content Craetion
	$wp_customize->add_section( 'vw_hair_salon_content_section' , array(
    	'title' => __( 'Customize Home Page', 'vw-hair-salon' ),
		'priority' => null,
		'panel' => 'vw_hair_salon_panel_id'
	) );

	$wp_customize->add_setting('vw_hair_salon_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Hair_Salon_Content_Creation( $wp_customize, 'vw_hair_salon_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-hair-salon' ),
		),
		'section' => 'vw_hair_salon_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-hair-salon' ),
	) ) );

	//Footer Text
	$wp_customize->add_section('vw_hair_salon_footer',array(
		'title'	=> __('Footer','vw-hair-salon'),
		'description'=> __('This section will appear in the footer','vw-hair-salon'),
		'panel' => 'vw_hair_salon_panel_id',
	));	
	
	$wp_customize->add_setting('vw_hair_salon_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_hair_salon_footer_text',array(
		'label'	=> __('Copyright Text','vw-hair-salon'),
		'section'=> 'vw_hair_salon_footer',
		'setting'=> 'vw_hair_salon_footer_text',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'vw_hair_salon_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_hair_salon_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Hair_Salon_Toggle_Switch_Custom_Control( $wp_customize, 'vw_hair_salon_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-hair-salon' ),
      	'section' => 'vw_hair_salon_footer'
    )));

	$wp_customize->add_setting('vw_hair_salon_scroll_top_alignment',array(
        'default' => __('Right','vw-hair-salon'),
        'sanitize_callback' => 'vw_hair_salon_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Hair_Salon_Image_Radio_Control($wp_customize, 'vw_hair_salon_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-hair-salon'),
        'section' => 'vw_hair_salon_footer',
        'settings' => 'vw_hair_salon_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/layout1.png',
            'Center' => get_template_directory_uri().'/images/layout2.png',
            'Right' => get_template_directory_uri().'/images/layout3.png'
    ))));
}

add_action( 'customize_register', 'vw_hair_salon_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Hair_Salon_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Hair_Salon_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(new VW_Hair_Salon_Customize_Section_Pro($manager,'example_1',array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW Hair Salon Pro', 'vw-hair-salon' ),
			'pro_text' => esc_html__( 'Upgrade Pro', 'vw-hair-salon' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/hair-salon-wordpress-theme/'),
		)));

		$manager->add_section(new VW_Hair_Salon_Customize_Section_Pro($manager,'example_2',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Documentation', 'vw-hair-salon' ),
			'pro_text' => esc_html__( 'Docs', 'vw-hair-salon' ),
			'pro_url'  => admin_url('themes.php?page=vw_hair_salon_guide'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-hair-salon-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-hair-salon-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Hair_Salon_Customize::get_instance();