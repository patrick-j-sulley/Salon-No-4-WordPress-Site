<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_hair_salon_first_color = get_theme_mod('vw_hair_salon_first_color');

	$custom_css = '';

	if($vw_hair_salon_first_color != false){
		$custom_css .='.extra-top, .top-bar i, .search-box i, .slider .carousel-control-prev-icon, .slider .carousel-control-next-icon, .slider .carousel-control-prev-icon:hover, .slider .carousel-control-next-icon:hover, .more-btn a, .scrollup i, input[type="submit"], .footer-2, .sidebar input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce .cart .button, .woocommerce .cart input.button:hover, .woocommerce a.button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .date-monthwrap, .hvr-sweep-to-right:before, .pagination span, .pagination a,.sidebar .tagcloud a:hover,.footer .tagcloud a:hover, .toggle-nav i, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button{';
			$custom_css .='background-color: '.esc_html($vw_hair_salon_first_color).';';
		$custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$custom_css .='.socialbox i:hover, .sidebar ul li::before, span.onsale, #comments input[type="submit"].submit, .sidebar ul.cart_list li::before, .sidebar ul.product_list_widget li::before{';
			$custom_css .='background-color: '.esc_html($vw_hair_salon_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$custom_css .='a, .phone i, .need h2, .footer h3, .footer .custom-social-icons i:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.sidebar th,.sidebar td,.sidebar td#prev a,.sidebar caption, .footer li a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover{';
			$custom_css .='color: '.esc_html($vw_hair_salon_first_color).';';
		$custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$custom_css .='.footer .search-form .search-field, .woocommerce a.button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover button.single_add_to_cart_button.button.alt:hover, .post-main-box:hover, .toggle-nav i{';
			$custom_css .='border-color: '.esc_html($vw_hair_salon_first_color).';';
		$custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$custom_css .='.slider, .main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_hair_salon_first_color).';';
		$custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$custom_css .='.slider, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_hair_salon_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hair_salon_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_hair_salon_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hair_salon_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1 {';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hair_salon_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.service-box{';
			$custom_css .='';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='padding:0;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.service-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.service-box{';
			$custom_css .='border: 1px dashed #ccc; padding: 15px; margin-bottom: 5%;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.service-box, .post-main-box h2, .new-text p, .content-bttn{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.service-box{';
			$custom_css .='border: 1px dashed #ccc; padding: 15px; margin-bottom: 5%;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
	}