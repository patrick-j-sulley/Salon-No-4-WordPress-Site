<?php
/*
Plugin Name: Clever Fox
Plugin URI:
Description: The Clever Fox plugin adds sections functionality to the Startkit theme and Others Nayra's Themes. This plugin for only startkit themes. Clever Fox is a plugin build to enhance the functionality of WordPress Theme made by Nayra Themes.
Version: 1.1.26
Author: nayrathemes
Author URI: https://nayrathemes.com
Text Domain: clever-fox
*/
define( 'CLEVERFOX_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CLEVERFOX_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function cleverfox_activate() {
	
	/**
	 * Load Custom control in Customizer
	 */
	define( 'CLEVERFOX_DIRECTORY', plugin_dir_url( __FILE__ ) . '/inc/custom-controls/' );
	define( 'CLEVERFOX_DIRECTORY_URI', plugin_dir_url( __FILE__ ) . '/inc/custom-controls/' );
	if ( class_exists( 'WP_Customize_Control' ) ) {
		require_once('inc/custom-controls/controls/range-validator/range-control.php');	
		require_once('inc/custom-controls/controls/select/select-control.php');
		require_once('inc/custom-controls/Tabs/class/cleverfox-customize-control-tabs.php');
	}
	
	$theme = wp_get_theme(); // gets the current theme
		if ( 'StartKit' == $theme->name){	
			 require_once('inc/startkit/features/section-slider.php');
			 require_once('inc/startkit/features/section-info.php');
			 require_once('inc/startkit/features/section-service.php');
			 require_once('inc/startkit/features/section-testimonial.php');
			 require_once('inc/startkit/features/navigation.php');
			 require_once('inc/startkit/sections/section-slider.php');
			 require_once('inc/startkit/sections/section-flash.php');
			 require_once('inc/startkit/sections/section-service.php');
			 require_once('inc/startkit/sections/section-testimonial.php');
			 require_once('inc/startkit/typography_style.php');
			 require_once('inc/startkit/features/section-typography.php');
		}
		
		if ( 'StartBiz' == $theme->name){	
			 require_once('inc/startkit/features/section-slider.php');
			 require_once('inc/startkit/features/section-info.php');
			 require_once('inc/startkit/features/section-service.php');
			 require_once('inc/startkit/features/section-testimonial.php');
			 require_once('inc/startkit/features/navigation.php');
			 require_once('inc/startbiz/sections/section-slider.php');
			 require_once('inc/startkit/sections/section-flash.php');
			 require_once('inc/startbiz/sections/section-service.php');
			 require_once('inc/startkit/sections/section-testimonial.php');
			 require_once('inc/startkit/typography_style.php');
			 require_once('inc/startkit/features/section-typography.php');
		}
		
		if ('Arowana' == $theme->name){	
			 require_once('inc/startkit/features/section-slider.php');
			 require_once('inc/startkit/features/section-info.php');
			 require_once('inc/startkit/features/section-service.php');
			 require_once('inc/startkit/features/section-testimonial.php');
			 require_once('inc/startkit/features/navigation.php');
			 require_once('inc/startkit/sections/section-slider.php');
			 require_once('inc/startkit/sections/section-flash.php');
			 require_once('inc/arowana/sections/section-service.php');
			 require_once('inc/startkit/sections/section-testimonial.php');
			 require_once('inc/startkit/typography_style.php');
			 require_once('inc/startkit/features/section-typography.php');
		}
		
		if ('Envira' == $theme->name){	
		
			function cleverfox_envira_enqueue_scripts() {
				wp_enqueue_script( 'counterup', plugin_dir_url( __FILE__ ) . 'inc/js/jquery.counterup.min.js', array('jquery'), false, true);
			}
			add_action( 'wp_enqueue_scripts', 'cleverfox_envira_enqueue_scripts' );
			
			 require_once('inc/startkit/features/section-slider.php');
		     require_once('inc/startkit/features/section-info.php');
		     require_once('inc/startkit/features/section-service.php');
		     require_once('inc/envira/features/funfact-section.php');
		     require_once('inc/startkit/features/navigation.php');
		     require_once('inc/startkit/sections/section-slider.php');
		     require_once('inc/startkit/sections/section-flash.php');
		     require_once('inc/startkit/sections/section-service.php');
		     require_once('inc/envira/sections/section-funfact.php');
		     require_once('inc/startkit/typography_style.php');
		     require_once('inc/startkit/features/section-typography.php');
		}
		
		if( 'Hantus' == $theme->name){
			require_once('inc/hantus/features/navigation.php');
			require_once('inc/hantus/features/section-slider.php');
			require_once('inc/hantus/features/section-info.php');
			require_once('inc/hantus/features/section-service.php');
			require_once('inc/hantus/features/section-testimonial.php');
			require_once('inc/hantus/sections/section-slider.php');
			require_once('inc/hantus/sections/section-info.php');
			require_once('inc/hantus/sections/section-service.php');
			require_once('inc/hantus/sections/section-testimonial.php');
			require_once('inc/hantus/features/section-typography.php');
			require_once('inc/hantus/typography_style.php');
		}
	}
add_action( 'init', 'cleverfox_activate' );

$theme = wp_get_theme();

//Startkit 
if ( 'StartKit' == $theme->name){	
	register_activation_hook( __FILE__, 'cleverfox_install_function');
	function cleverfox_install_function()
	{	
		$item_details_page = get_option('item_details_page'); 
		if(!$item_details_page){
			require_once('inc/startkit/default-pages/upload-media.php');
			require_once('inc/startkit/default-pages/home-page.php');
			require_once('inc/startkit/default-widgets/default-widget.php');
			update_option( 'item_details_page', 'Done' );
		}
	}
}

//StartBiz 
if ( 'StartBiz' == $theme->name){	
	register_activation_hook( __FILE__, 'cleverfox_install_function');
	function cleverfox_install_function()
	{	
		$item_details_page = get_option('item_details_page'); 
		if(!$item_details_page){
			require_once('inc/startbiz/default-pages/upload-media.php');
			require_once('inc/startkit/default-pages/home-page.php');
			require_once('inc/startbiz/default-widgets/default-widget.php');
			update_option( 'item_details_page', 'Done' );
		}
	}
}

//Arowana 
if ( 'Arowana' == $theme->name){	
	register_activation_hook( __FILE__, 'cleverfox_install_function');
	function cleverfox_install_function()
	{	
		$item_details_page = get_option('item_details_page'); 
		if(!$item_details_page){
			require_once('inc/arowana/default-pages/upload-media.php');
			require_once('inc/startkit/default-pages/home-page.php');
			require_once('inc/arowana/default-widgets/default-widget.php');
			update_option( 'item_details_page', 'Done' );
		}
	}
}

//Envira 
if ( 'Envira' == $theme->name){	
	register_activation_hook( __FILE__, 'cleverfox_install_function');
	function cleverfox_install_function()
	{	
		$item_details_page = get_option('item_details_page'); 
		if(!$item_details_page){
			require_once('inc/envira/default-pages/upload-media.php');
			require_once('inc/startkit/default-pages/home-page.php');
			require_once('inc/envira/default-widgets/default-widget.php');
			update_option( 'item_details_page', 'Done' );
		}
	}
}

//Hantus
if ( 'Hantus' == $theme->name){
	register_activation_hook( __FILE__, 'cleverfox_install_function');
	function cleverfox_install_function()
	{	
		$item_details_page = get_option('item_details_page'); 
		if(!$item_details_page){
			require_once('inc/hantus/default-pages/upload-media.php');
			require_once('inc/hantus/default-pages/home-page.php');
			require_once('inc/hantus/default-widgets/default-widget.php');
			update_option( 'item_details_page', 'Done' );
		}
	}
}

//Startkit Sainitize text
function cleverfox_startkit_home_page_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
		
//Hantus Sainitize text
function cleverfox_hantus_home_page_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
?>