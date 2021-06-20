<?php
//about theme info
add_action( 'admin_menu', 'vw_hair_salon_gettingstarted' );
function vw_hair_salon_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Hair Salon', 'vw-hair-salon'), esc_html__('About VW Hair Salon', 'vw-hair-salon'), 'edit_theme_options', 'vw_hair_salon_guide', 'vw_hair_salon_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_hair_salon_admin_theme_style() {
   wp_enqueue_style( 'vw-hair-salon-font', vw_hair_salon_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_hair_salon_admin_theme_style');

// Theme Font URL
function vw_hair_salon_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function vw_hair_salon_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-hair-salon' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Hair Salon Theme', 'vw-hair-salon' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-hair-salon'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Hair Salon at 20% Discount','vw-hair-salon'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-hair-salon'); ?> ( <span><?php esc_html_e('vwpro20','vw-hair-salon'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_HAIR_SALON_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-hair-salon' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'lite_theme')"><?php esc_html_e( 'Getting Started', 'vw-hair-salon' ); ?></button>		  
		  <button class="tablinks" onclick="openCity(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-hair-salon' ); ?></button>
		  <button class="tablinks" onclick="openCity(event, 'lite_pro')"><?php esc_html_e( 'Support', 'vw-hair-salon' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="lite_theme" class="tabcontent open">
			<h3><?php esc_html_e( 'Lite Theme Information', 'vw-hair-salon' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('VW Hair Salon is an elegant, modern and attractive multipurpose WordPress theme. The theme is useful for salon, spa and massage centre, parlor, beauty care centre, physiotherapy centre, health care centre, health, wellness and yoga centre and many other health business purposes. Start a blog on health and body care routines with this theme. It is dedicatedly built for designing sauna related websites. The theme has clean and minimal design with user-friendly navigation of both front and back end. It is fully responsive, cross-browser compatible, translation ready and WPML supported theme. It is made SEO-friendly for better search results. Although the theme comes with essential plugins, it is light-weight for faster page loading. This VW Hair Salon theme is WooCommerce supportive to enable selling products on the site. Customization is its main feature which gives you opportunity to personalize the site according to your wish. Use of short codes to embed video, audio, columns etc. is done which further makes the site light-weight and clean. Multiple blog layouts, full-width templates, sidebars, banner, widgets are used to enhance the overall look of the theme. Make the site more interactive and widen its reach to more audience with the use of integrated social media icons. It is thoroughly checked for best functionality by expert developers to ease the process of using it.','vw-hair-salon'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-hair-salon' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-hair-salon' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-hair-salon' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-hair-salon'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-hair-salon'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-hair-salon'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-hair-salon'); ?></a>
				</div>
		  		<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-hair-salon' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-image"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-hair-salon'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hair_salon_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-hair-salon'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hair_salon_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Section','vw-hair-salon'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hair_salon_need_section') ); ?>" target="_blank"><?php esc_html_e('What do you need?','vw-hair-salon'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-editor-aligncenter"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-hair-salon'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-hair-salon'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hair_salon_left_right') ); ?>" target="_blank"><?php esc_html_e('Blog Layout','vw-hair-salon'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hair_salon_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-hair-salon'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-hair-salon'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-hair-salon'); ?></p>
                <ul>
                	<li><?php esc_html_e('1. Create a Page to set template:  Go to ','vw-hair-salon'); ?>
                  	<b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','vw-hair-salon'); ?></b>.
                  	<p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','vw-hair-salon'); ?></p></li>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
                  	<p></p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-hair-salon'); ?></span><?php esc_html_e(' Go to ','vw-hair-salon'); ?>
				  	<b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','vw-hair-salon'); ?></b></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','vw-hair-salon'); ?></p>
                </ul>
		  	</div>
		</div>	

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-hair-salon' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The premium hair salon theme is a treasure of amazing features and functionality which will ease out the process of establishing your site. Customize the theme to fit your specifications by tweaking background, colour, header, footer, menus etc. It is made SEO-friendly for faster page loading and getting higher Google search rank. Add as many posts and inner pages as you want with different layouts, template designs and column structures to make content unique and attractive. You can either keep full-width template or sidebars to bring variety in the look of the site. The premium hair salon WordPress theme has a gallery section to display your products, services, facilities, amenities and infrastructure in the most attractive way. This will give a good insight of your professionalism and will help customers decide whether to opt for your services or not. Use of short codes for embedding videos, columns, audios and file formats make the code clean, short and easy to understand. With premium theme, we offer regular theme updates and support to ensure smooth working of your site. We also provide support to add custom CSS/JS files.','vw-hair-salon'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_HAIR_SALON_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-hair-salon'); ?></a>
					<a href="<?php echo esc_url( VW_HAIR_SALON_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-hair-salon'); ?></a>
					<a href="<?php echo esc_url( VW_HAIR_SALON_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-hair-salon'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-hair-salon' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-hair-salon'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-hair-salon'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-hair-salon'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-hair-salon'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hair-salon'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hair-salon'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'vw-hair-salon'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hair-salon'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-hair-salon'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-hair-salon'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'vw-hair-salon'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-hair-salon'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'vw-hair-salon'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_HAIR_SALON_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-hair-salon'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="lite_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-hair-salon'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-hair-salon'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-hair-salon'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-hair-salon'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-hair-salon'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-hair-salon'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HAIR_SALON_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-hair-salon'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>