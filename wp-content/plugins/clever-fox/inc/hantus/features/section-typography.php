<?php function hantus_typography_customizer( $wp_customize ) {
$wp_customize->add_panel( 'hantus_typography_setting', array(
		'priority'       => 134,
		'capability'     => 'edit_theme_options',
		'title'      => __('Typography','hantus-pro'),
	) );
	
// Typography Hide/ Show Setting // 

$wp_customize->add_section(
	'typography_setting' ,
		array(
		'title'      => __('Settings','hantus-pro'),
		'panel' => 'hantus_typography_setting',
		'priority'       => 1,
   	) );
	 if ( class_exists( 'Hantus_Customizer_Toggle_Control' ) ) {	
	 $wp_customize->add_setting( 
		 'hide_show_typography' , 
			 array(
			 'default' => 0,
			 'sanitize_callback' => 'sanitize_text_field',
			 'capability' => 'edit_theme_options',
		 ) 
	 );
	
	 $wp_customize->add_control( new Hantus_Customizer_Toggle_Control( $wp_customize, 
	 'hide_show_typography', 
		 array(
			 'label'	      => esc_html__( 'Enable Typography', 'hantus-pro' ),
			 'section'     => 'typography_setting',
			 'settings'    => 'hide_show_typography',
			 'type'        => 'ios', // light, ios, flat
		 ) 
	 ));
	 }
$font_size = array();
for($i=9; $i<=100; $i++)
{			
	$font_size[$i] = $i;
}

$font_family = array('Dosis'=>'Dosis','Raleway'=>'Raleway','Arial, sans-serif'=>'Arial','Georgia, serif'=>'Georgia','Times New Roman, serif'=>'Times New Roman','Tahoma, Geneva, Verdana, sans-serif'=>'Tahoma','Palatino, Palatino Linotype, serif'=>'Palatino','Helvetica Neue, Helvetica, sans-serif'=>'Helvetica*','Calibri, Candara, Segoe, Optima, sans-serif'=>'Calibri*','Myriad Pro, Myriad, sans-serif'=>'Myriad Pro*','Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif'=>'Lucida','Arial Black, sans-serif'=>'Arial Black','Gill Sans, Gill Sans MT, Calibri, sans-serif'=>'Gill Sans*','Geneva, Tahoma, Verdana, sans-serif'=>'Geneva*','Impact, Charcoal, sans-serif'=>'Impact','Courier, Courier New, monospace'=>'Courier','Abel'=>'Abel','Abril Fatface'=>'Abril Fatface','Aclonica'=>'Aclonica','Actor'=>'Actor','Adamina'=>'Adamina','Aldrich'=>'Aldrich','Alice'=>'Alice','Alike'=>'Alike','Alike Angular'=>'Alike Angular','Allan'=>'Allan','Allerta'=>'Allerta','Allerta Stencil'=>'Allerta Stencil','Amaranth'=>'Amaranth','Amatic SC'=>'Amatic SC','Andada'=>'Andada','Andika'=>'Andika','Annie Use Your Telescope'=>'Annie Use Your Telescope','Anonymous Pro'=>'Anonymous Pro','Antic'=>'Antic','Anton'=>'Anton','Architects Daughter'=>'Architects Daughter','Arimo'=>'Arimo','Artifika'=>'Artifika','Arvo'=>'Arvo','Asset'=>'Asset','Astloch'=>'Astloch','Atomic Age'=>'Atomic Age','Aubrey'=>'Aubrey','Bangers'=>'Bangers','Bentham'=>'Bentham','Bevan'=>'Bevan','Bigshot One'=>'Bigshot One','Black Ops One'=>'Black Ops One','Bowlby One'=>'Bowlby One','Bowlby One SC'=>'Bowlby One SC','Brawler'=>'Brawler','Butcherman Caps'=>'Butcherman Caps','Cabin'=>'Cabin','Cabin Sketch'=>'Cabin Sketch','Cabin Sketch'=>'Cabin Sketch','Calligraffitti'=>'Calligraffitti','Candal'=>'Candal','Cantarell'=>'Cantarell','Cardo'=>'Cardo','Carme'=>'Carme','Carter One'=>'Carter One','Caudex'=>'Caudex','Cedarville Cursive'=>'Cedarville Cursive','Changa One'=>'Changa One','Cherry Cream Soda'=>'Cherry Cream Soda','Chewy'=>'Chewy','Chivo'=>'Chivo','Coda'=>'Coda','Comfortaa'=>'Comfortaa','Coming Soon'=>'Coming Soon','Contrail One'=>'Contrail One','Copse'=>'Copse','Corben'=>'Corben','Corben'=>'Corben','Cousine'=>'Cousine','Coustard'=>'Coustard','Covered By Your Grace'=>'Covered By Your Grace','Crafty Girls'=>'Crafty Girls','Creepster Caps'=>'Creepster Caps','Crimson Text'=>'Crimson Text','Crushed'=>'Crushed','Cuprum'=>'Cuprum','Damion'=>'Damion','Dancing Script'=>'Dancing Script','Dawning of a New Day'=>'Dawning of a New Day','Days One'=>'Days One','Delius'=>'Delius','Delius Swash Caps'=>'Delius Swash Caps','Delius Unicase'=>'Delius Unicase','Didact Gothic'=>'Didact Gothic','Dorsa'=>'Dorsa','Droid Sans'=>'Droid Sans','Droid Sans Mono'=>'Droid Sans Mono','Droid Serif'=>'Droid Serif','EB Garamond'=>'EB Garamond','Eater Caps'=>'Eater Caps','Expletus Sans'=>'Expletus Sans','Fanwood Text'=>'Fanwood Text','Federant'=>'Federant','Federo'=>'Federo','Roboto' => 'Roboto','Fontdiner Swanky'=>'Fontdiner Swanky','Forum'=>'Forum','Francois One'=>'Francois One','Gentium Book Basic'=>'Gentium Book Basic','Geo'=>'Geo','Geostar'=>'Geostar','Geostar Fill'=>'Geostar Fill','Give You Glory'=>'Give You Glory','Gloria Hallelujah'=>'Gloria Hallelujah','Goblin One'=>'Goblin One','Gochi Hand'=>'Gochi Hand','Goudy Bookletter 1911'=>'Goudy Bookletter 1911','Gravitas One'=>'Gravitas One','Gruppo'=>'Gruppo','Hammersmith One'=>'Hammersmith One','Holtwood One SC'=>'Holtwood One SC','Homemade Apple'=>'Homemade Apple','IM Fell DW Pica'=>'IM Fell DW Pica','IM Fell English'=>'IM Fell English','IM Fell English SC'=>'IM Fell English SC','Inconsolata'=>'Inconsolata','Indie Flower'=>'Indie Flower','Irish Grover'=>'Irish Grover','Irish Growler'=>'Irish Growler','Istok Web'=>'Istok Web','Jockey One'=>'Jockey One','Josefin Sans'=>'Josefin Sans','Josefin Slab'=>'Josefin Slab','Judson'=>'Judson','Julee'=>'Julee','Jura'=>'Jura','Just Another Hand'=>'Just Another Hand','Just Me Again Down Here'=>'Just Me Again Down Here','Kameron'=>'Kameron','Kelly Slab'=>'Kelly Slab','Kenia'=>'Kenia','Kranky'=>'Kranky','Kreon'=>'Kreon','Kristi'=>'Kristi','La Belle Aurore'=>'La Belle Aurore','Lato'=>'Lato','League Script'=>'League Script','Leckerli One'=>'Leckerli One','Lekton'=>'Lekton','Limelight'=>'Limelight','Linden Hill'=>'Linden Hill','Lobster'=>'Lobster','Lobster Two'=>'Lobster Two','Lora'=>'Lora','Love Ya Like A Sister'=>'Love Ya Like A Sister','Loved by the King'=>'Loved by the King','Luckiest Guy'=>'LuckiestGuy','Maiden Orange'=>'Maiden Orange');


$font_transform = array('lowercase'=>'Lowercase','uppercase'=>'Uppercase','capitalize'=>'capitalize');
$font_weight = array('normal'=>'normal', 'italic'=>'Italic','oblique'=>'oblique');	
// General typography section
$wp_customize->add_section(
	'Body_typography' ,
		array(
		'title'      => __('Body','hantus-pro'),
		'panel' => 'hantus_typography_setting',
		'priority'       => 2,
   	) );

		//Secondary font weight
		
		$wp_customize->add_setting(
			'body_typography_font_weight',
			array(
				'default'           =>  __('normal','hantus-pro'),
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'body_typography_font_weight', array(
				'label' => __('Secondary Font Weight','hantus-pro'),
				'section' => 'Body_typography',
				'setting' => 'body_typography_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		// Body font size// 
		$wp_customize->add_setting( 
			'body_font_size' , 
				array(
				'default' => __( '14','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
				
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'body_font_size', 
			array(
				'section'  => 'Body_typography',
				'settings' => 'body_font_size',
				'label'    => __( 'Font Size','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 10,
					'max'    => 20,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);

// paragraph typography

		$wp_customize->add_section(
			'paragraph_typography' ,
				array(
				'title'      => __('Paragraph','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 2,
			) );
		//paragraph font weight
		
		$wp_customize->add_setting(
			'para_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'para_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'paragraph_typography',
				'setting' => 'para_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// paragraph font size// 
		$wp_customize->add_setting( 
			'paragraph_font_size' , 
				array(
				'default' => __( '16','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'paragraph_font_size', 
			array(
				'section'  => 'paragraph_typography',
				'settings' => 'paragraph_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 30,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		// paragraph line height// 
		$wp_customize->add_setting( 
			'paragraph_line_height' , 
				array(
				'default' => __( '21','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'paragraph_line_height', 
			array(
				'section'  => 'paragraph_typography',
				'settings' => 'paragraph_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 60,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);

		
		//H1 typography
		$wp_customize->add_section(
			'H1_typography' ,
				array(
				'title'      => __('H1','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H1 font weight
		
		$wp_customize->add_setting(
			'h1_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h1_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H1_typography',
				'setting' => 'h1_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H1 font size// 
		$wp_customize->add_setting( 
			'h1_font_size' , 
				array(
				'default' => __( '48','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h1_font_size', 
			array(
				'section'  => 'H1_typography',
				'settings' => 'h1_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 50,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		// paragraph line height// 
		$wp_customize->add_setting( 
			'h1_line_height' , 
				array(
				'default' => __( '1','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h1_line_height', 
			array(
				'section'  => 'H1_typography',
				'settings' => 'h1_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 70,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H1 text transform
		
		$wp_customize->add_setting( 
			'h1_text_transform' , 
				array(
				'default' => 'lowercase',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h1_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H1_typography',
			'settings'   	 => 'h1_text_transform',
			'choices'        => $font_transform,
		)) 
	);
	
	
	
	//H2 typography
		$wp_customize->add_section(
			'H2_typography' ,
				array(
				'title'      => __('H2','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H2 font weight
		
		$wp_customize->add_setting(
			'h2_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h2_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H2_typography',
				'setting' => 'h2_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H2 font size// 
		$wp_customize->add_setting( 
			'h2_font_size' , 
				array(
				'default' => __( '36','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',				
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h2_font_size', 
			array(
				'section'  => 'H2_typography',
				'settings' => 'h2_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 40,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		// paragraph line height// 
		$wp_customize->add_setting( 
			'h2_line_height' , 
				array(
				'default' => '46',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h2_line_height', 
			array(
				'section'  => 'H2_typography',
				'settings' => 'h2_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 70,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H1 text transform
		
		$wp_customize->add_setting( 
			'h2_text_transform' , 
				array(
				'default' => __( 'lowercase', 'hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h2_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H2_typography',
			'settings'   	 => 'h2_text_transform',
			'choices'        => $font_transform,
		) )
	);
	
	
	//H3 typography
		$wp_customize->add_section(
			'H3_typography' ,
				array(
				'title'      => __('H3','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H3 font weight
		
		$wp_customize->add_setting(
			'h3_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h3_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H3_typography',
				'setting' => 'h3_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H3 font size// 
		$wp_customize->add_setting( 
			'h3_font_size' , 
				array(
				'default' => __( '30','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h3_font_size', 
			array(
				'section'  => 'H3_typography',
				'settings' => 'h3_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 40,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		//h3 line height// 
		$wp_customize->add_setting( 
			'h3_line_height' , 
				array(
				'default' => '34',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h3_line_height', 
			array(
				'section'  => 'H3_typography',
				'settings' => 'h3_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 50,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H3 text transform
		
		$wp_customize->add_setting( 
			'h3_text_transform' , 
				array(
				'default' => __( 'lowercase','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h3_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H3_typography',
			'settings'   	 => 'h3_text_transform',
			'choices'        => $font_transform,
		) )
	);
		
//H4 typography
		$wp_customize->add_section(
			'H4_typography' ,
				array(
				'title'      => __('H4','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H4 font weight
		
		$wp_customize->add_setting(
			'h4_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h4_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H4_typography',
				'setting' => 'h4_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H4 font size// 
		$wp_customize->add_setting( 
			'h4_font_size' , 
				array(
				'default' => __( '20','hantus-pro' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h4_font_size', 
			array(
				'section'  => 'H4_typography',
				'settings' => 'h4_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 30,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		//h3 line height// 
		$wp_customize->add_setting( 
			'h4_line_height' , 
				array(
				'default' => '28',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h4_line_height', 
			array(
				'section'  => 'H4_typography',
				'settings' => 'h4_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 70,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H4 text transform
		
		$wp_customize->add_setting( 
			'h4_text_transform' , 
				array(
				'default' => 'lowercase',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h4_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H4_typography',
			'settings'   	 => 'h4_text_transform',
			'choices'        => $font_transform,
		) )
	);
	
	
	//H5 typography
		$wp_customize->add_section(
			'H5_typography' ,
				array(
				'title'      => __('H5','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H5 font weight
		
		$wp_customize->add_setting(
			'h5_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h5_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H5_typography',
				'setting' => 'h5_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H5 font size// 
		$wp_customize->add_setting( 
			'h5_font_size' , 
				array(
				'default' => '16',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h5_font_size', 
			array(
				'section'  => 'H5_typography',
				'settings' => 'h5_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 30,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		//h5 line height// 
		$wp_customize->add_setting( 
			'h5_line_height' , 
				array(
				'default' => '15',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h5_line_height', 
			array(
				'section'  => 'H5_typography',
				'settings' => 'h5_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 70,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H5 text transform
		
		$wp_customize->add_setting( 
			'h5_text_transform' , 
				array(
				'default' => 'lowercase',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h5_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H5_typography',
			'settings'   	 => 'h5_text_transform',
			'choices'        => $font_transform,
		) )
	);
	
	
	//H6 typography
		$wp_customize->add_section(
			'H6_typography' ,
				array(
				'title'      => __('H6','hantus-pro'),
				'panel' => 'hantus_typography_setting',
				'priority'       => 3,
			) 
		);
		
		//H5 font weight
		
		$wp_customize->add_setting(
			'h6_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
		'h6_font_weight', array(
				'label' => __('Font Style','hantus-pro'),
				'section' => 'H6_typography',
				'setting' => 'h6_font_weight',
				'choices'=>$font_weight,
				'description'=>__('','hantus-pro'),
			))
		);
		
		// H6 font size// 
		$wp_customize->add_setting( 
			'h6_font_size' , 
				array(
				'default' => '16',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h6_font_size', 
			array(
				'section'  => 'H6_typography',
				'settings' => 'h6_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 30,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		//h6 line height// 
		$wp_customize->add_setting( 
			'h6_line_height' , 
				array(
				'default' => '24',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'h6_line_height', 
			array(
				'section'  => 'H6_typography',
				'settings' => 'h6_line_height',
				'label'    => __( 'Line Height(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 70,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		//H5 text transform
		
		$wp_customize->add_setting( 
			'h6_text_transform' , 
				array(
				'default' => 'lowercase',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'h6_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'H6_typography',
			'settings'   	 => 'h6_text_transform',
			'choices'        => $font_transform,
		) )
	);
	

// menu typography section
$wp_customize->add_section(
	'menu_typography' ,
		array(
		'title'      => __('Menus','hantus-pro'),
		'panel' => 'hantus_typography_setting',
		'priority'       => 2,
   	) );


	//menu font weight
		$wp_customize->add_setting(
			'menu_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
				'menu_font_weight',
				array(
					'label' => __('Font Style','hantus-pro'),
					'section' => 'menu_typography',
					'setting' => 'menu_font_weight',
					'choices'=>$font_weight,
					'description'=>__('','hantus-pro'),
				))
			);
		
		// menu font size// 
		$wp_customize->add_setting( 
			'menu_font_size' , 
				array(
				'default' => '15',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'menu_font_size', 
			array(
				'section'  => 'menu_typography',
				'settings' => 'menu_font_size',
				'label'    => __( 'Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 20,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
		
		//menu text transform
		
		$wp_customize->add_setting( 
			'menu_text_transform' , 
				array(
				'default' => 'capitalize',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

	$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
	'menu_text_transform' , 
		array(
			'label'          => __( 'Text Transform', 'hantus-pro' ),
			'section'        => 'menu_typography',
			'settings'   	 => 'menu_text_transform',
			'choices'        => $font_transform,
		) )
	);
	
// Sections typography section
$wp_customize->add_section(
	'section_typography' ,
		array(
		'title'      => __('Sections','hantus-pro'),
		'panel' => 'hantus_typography_setting',
		'priority'       => 2,
   	) );
	
	//section font weight
		
		$wp_customize->add_setting(
			'section_tit_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
				'section_tit_font_weight',
				array(
					'label' => __(' Title Font Style','hantus-pro'),
					'section' => 'section_typography',
					'setting' => 'section_tit_font_weight',
					'choices'=>$font_weight,
					'description'=>__('','hantus-pro'),
				))
			);
		
		// section title font size// 
		$wp_customize->add_setting( 
			'section_tit_font_size' , 
				array(
				'default' => '36',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'section_tit_font_size', 
			array(
				'section'  => 'section_typography',
				'settings' => 'section_tit_font_size',
				'label'    => __( 'Title Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 50,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);

		//section font weight
		
		$wp_customize->add_setting(
			'section_des_font_weight',
			array(
				'default'           =>  'normal',
				'capability'        =>  'edit_theme_options',
				'sanitize_callback' =>  'sanitize_text_field',
			)	
		);
		$wp_customize->add_control(new Cleverfox_Customizer_Select_Control($wp_customize,
				'section_des_font_weight',
				array(
					'label' => __('Description Font Style','hantus-pro'),
					'section' => 'section_typography',
					'setting' => 'section_des_font_weight',
					'choices'=>$font_weight,
					'description'=>__('','hantus-pro'),
				))
			);
		
		// section title font size// 
		$wp_customize->add_setting( 
			'section_desc_font_size' , 
				array(
				'default' => '16',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			) 
		);

		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'section_desc_font_size', 
			array(
				'section'  => 'section_typography',
				'settings' => 'section_desc_font_size',
				'label'    => __( 'Description Font Size(px)','hantus-pro' ),
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 30,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
}
add_action( 'customize_register', 'hantus_typography_customizer' );
?>