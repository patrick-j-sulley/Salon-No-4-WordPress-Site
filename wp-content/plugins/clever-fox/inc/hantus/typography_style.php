<?php
function hantus_own_theme_typography() {
	$hide_show_typography= get_theme_mod('hide_show_typography','off');
	if( $hide_show_typography == '1' ):
	
		$body_typography_font_weight = get_theme_mod('body_typography_font_weight','normal');
		$body_font_size = get_theme_mod('body_font_size','14');
		
		$para_font_weight = get_theme_mod('para_font_weight','normal');
		$paragraph_font_size = get_theme_mod('paragraph_font_size','16');
		$paragraph_line_height = get_theme_mod('paragraph_line_height','21');
		
		$h1_font_weight = get_theme_mod('h1_font_weight','normal');
		$h1_font_size = get_theme_mod('h1_font_size','48');
		$h1_line_height = get_theme_mod('h1_line_height','1');
		$h1_text_transform = get_theme_mod('h1_text_transform','lowercase');
		
		$h2_font_weight = get_theme_mod('h2_font_weight','normal');
		$h2_font_size = get_theme_mod('h2_font_size','36');
		$h2_line_height = get_theme_mod('h2_line_height','46');
		$h2_text_transform = get_theme_mod('h2_text_transform','lowercase');
		
		$h3_font_weight = get_theme_mod('h3_font_weight','normal');
		$h3_font_size = get_theme_mod('h3_font_size','30');
		$h3_line_height = get_theme_mod('h3_line_height','34');
		$h3_text_transform = get_theme_mod('h3_text_transform','lowercase');
		
		$h4_font_weight = get_theme_mod('h4_font_weight','normal');
		$h4_font_size = get_theme_mod('h4_font_size','20');
		$h4_line_height = get_theme_mod('h4_line_height','28');
		$h4_text_transform = get_theme_mod('h4_text_transform','lowercase');
		
		$h5_font_weight = get_theme_mod('h5_font_weight','normal');
		$h5_font_size = get_theme_mod('h5_font_size','16');
		$h5_line_height = get_theme_mod('h5_line_height','15');
		$h5_text_transform = get_theme_mod('h5_text_transform','lowercase');
		
		$h6_font_weight = get_theme_mod('h6_font_weight','normal');
		$h6_font_size = get_theme_mod('h6_font_size','16');
		$h6_line_height = get_theme_mod('h6_line_height','24');
		$h6_text_transform = get_theme_mod('h6_text_transform','lowercase');
		
		$menu_font_weight = get_theme_mod('menu_font_weight','normal');
		$menu_font_size = get_theme_mod('menu_font_size','15');
		$menu_text_transform = get_theme_mod('menu_text_transform','capitalize');
		
		$section_tit_font_weight = get_theme_mod('section_tit_font_weight','normal');
		$section_tit_font_size = get_theme_mod('section_tit_font_size','40');
		
		$section_des_font_weight = get_theme_mod('section_des_font_weight','normal');
		$section_desc_font_size = get_theme_mod('section_desc_font_size','16');
	?>
<style type="text/css">
body {
    font-weight: 400;
    font-size: <?php echo $body_font_size; ?>px!important;
	font-style: <?php echo $body_typography_font_weight; ?>!important;
    line-height: 22px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
}

h4 {
    font-size: <?php echo $h4_font_size; ?>px;
     line-height: <?php echo $h4_line_height; ?>px;
	 text-transform:<?php echo $h4_text_transform; ?>;
	 font-style: <?php echo $h4_font_weight; ?>;
    font-weight: 400;
}

.section-title h2 {
	font-style: <?php echo $section_tit_font_weight; ?>!important;
	font-size:<?php echo $section_tit_font_size; ?>px!important;
}

.section-title p {
	font-style: <?php echo $section_des_font_weight; ?>!important;
	font-size:<?php echo $section_desc_font_size; ?>px!important;
}

.boxed-btn {
    font-weight: 500;
    text-transform: capitalize;
	font-size: <?php echo $paragraph_font_size; ?>px;
    line-height: <?php echo $paragraph_line_height; ?>px;
	font-style: <?php echo $para_font_weight; ?>;
}

.input__label {
    font-weight: bold;
    font-size: 70.25%;
}

.input__label--hantus {
    text-align: left;
    font-size: <?php echo $paragraph_font_size; ?>px!important;
    font-weight: 400;    
}

.preloader h1 {
    text-transform: uppercase;
	line-height: <?php echo $h1_line_height; ?>px;
	font-size: <?php echo $h1_font_size; ?>px!important;
	font-style: <?php echo $h1_font_weight; ?>!important;
}

.header-social li a {
	font-size: <?php echo $paragraph_font_size; ?>px!important;
    line-height: <?php echo $paragraph_line_height; ?>px!important;
	font-style: <?php echo $para_font_weight; ?>!important;
}

.main-menu li a {
    font-weight: 500;
	font-size: <?php echo $menu_font_size; ?>px!important;
	font-style: <?php echo $menu_font_weight; ?>!important;
	text-transform: <?php echo $menu_text_transform; ?>!important;
}

.cart-icon-wrapper {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.cart-count {
    line-height: 20px;
    font-size: 12px;
}

.sidenav .sidenav-header h3 {
    font-size: <?php echo $h3_font_size; ?>px!important;
}

.sidenav .cart-item-description h4,
.cart-remove,
.sidenav .cart-item-description p {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.sidenav .cart-item-description {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.sidenav.active .cart-item {
    font-size: 0;
}

.sb-search-input {
    font-size: 20px;
}

.sb-icon-search,
.sb-search-submit {
    line-height: 60px;
}

.header-slider h3 {
    font-family: 'Dancing Script', cursive;
    font-weight: 700;
    font-size: <?php echo $h3_font_size; ?>px;
    line-height: <?php echo $h3_line_height; ?>px;
	text-transform: <?php echo $h3_text_transform; ?>;
	font-style: <?php echo $h3_font_weight; ?>;
}

.header-slider h1 {
    line-height: <?php echo $h1_line_height; ?>px;
	font-size: <?php echo $h1_font_size; ?>px;
	text-transform: <?php echo $h1_text_transform; ?>;
	font-style: <?php echo $h1_font_weight; ?>;
}

.header-slider .owl-next,
.header-slider .owl-prev {
    line-height: 50px;
    font-size: 24px;
}

.single-contact h4 {
    font-size: 20px;
}

.contact-wrapper i {
    font-size: 40px;
}

.contact-wrapper .single-contact:hover h4 {
    font-size: <?php echo $h4_font_size; ?>px!important;
    font-weight: 400;
}

.contact-wrapper .single-contact:hover p {
    font-size: 20px;
    font-weight: 500;
}

.service-box p.price {
    font-family: 'Dancing Script', cursive;
    font-size: <?php echo $paragraph_font_size; ?>px!important;
    font-weight: 700;
}

.tab-content ul li h4 .price {
    font-size: <?php echo $h4_font_size; ?>px!important;
    font-weight: 700;
    font-family: 'Dancing Script', cursive;
}

.feature-icon {
    line-height: 85px;
}

.feature-icon i {
    font-size: 40px;
    line-height: 85px;
}

.feature-box h4 {
    font-weight: 400;
}

.feature-box h4 {
    font-weight: 400;
}

.pricing-box h3 {
    font-size: <?php echo $h3_font_size; ?>px!important;
}

.pricing-box .price {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
    font-weight: 400;
}

.pricing-box .price sup {
    font-size: 36px;
    font-weight: 500;
}

.pricing-box .price span {
    font-size: 48px;
    font-weight: 500;
}

.pricing-content li {
    line-height: 2;
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.recomended-text {
    font-weight: 500;
}

#counter .single-box i {
    font-size: 45px;
}

#counter .single-box h3 {
    font-size: 40px;
    font-weight: 700;
    font-family: 'Dancing Script', cursive;
}

#counter .single-box p {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.single-product h5 {
    font-size: 18px;
    font-weight: 400;
}

.single-product .price {
    font-family: 'Dancing Script', cursive;
    font-weight: 700;
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.single-product .overlay li a {
    line-height: 50px;
    font-size: 20px;
}

.product-carousel .owl-next,
.product-carousel .owl-prev {
    line-height: 50px;
    font-size: 24px;
}

.single-testimonial p {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
    line-height:  <?php echo $paragraph_line_height; ?>px!important;
}

.single-testimonial h5 {
    font-size: 18px;
    font-weight: 500;
}

.single-testimonial p.title {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.testimonial-carousel .owl-next,
.testimonial-carousel .owl-prev {
    font-size: 36px;
}

.opening-hours h3 {
    font-size: 36px;
    font-weight: 500;
}

.opening-hours p {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
}

.opening-hours li {
    font-size:  18px;
}

.single-beauticians .social li a {
    line-height: 35px;
    font-size: 18px;
}

.single-beauticians h5 {
    font-size: 18px;
    font-weight: 500;
    line-height: 28px;
}

#subscribe i {
    font-size: 60px;
}

#subscribe h3 {
    font-size: 20px;
    font-weight: 500;
    line-height: 28px;
}

#subscribe p {
     font-size: <?php echo $paragraph_font_size; ?>px;
    line-height: <?php echo $paragraph_line_height; ?>px;
	font-style: <?php echo $para_font_weight; ?>;
}

#subscribe-form button {
    line-height: 24px;
    font-weight: 500;
    text-transform: uppercase;
}

.payment-method li a {
    font-size: 18px;
    line-height: 30px;
}
.scrollup {
    line-height: 50px;
}

#breadcrumb-area h2 {
    font-size: 42px;
    font-weight: 500;
}

#breadcrumb-area ul li,
#breadcrumb-area ul li a {
    font-size: 18px;
}

#welcome .section-title h3 {
    font-size: 30px;
    font-family: 'Dancing Script', cursive;
    font-weight: 700;
}

.welcome-box h4 {
    font-size: 20px;
}

#wcu h2 {
    font-size: 40px;
    font-weight: 500;
}

#wcu p b {
    font-size: <?php echo $paragraph_font_size; ?>px!important;
    font-weight: 500;
}

.gallery-tab-sorting li a {
    font-size: 18px;
}

.gallery-page .gallery-item figcaption ul li a {
    font-size: 20px;
    line-height: 50px;
}

.gallery-page .gallery-item figcaption h4 {
    font-size: 24px;
    font-weight: 500;
}

#contact h2 {
    font-size: 40px;
}

.contact-form label {
    font-size: 18px;
}

.info-box i {
    font-size: 30px;
}

.info-box h4 {
    font-weight: 500;
	font-size: <?php echo $h4_font_size; ?>px;
     line-height: <?php echo $h4_line_height; ?>px;
	 text-transform:<?php echo $h4_text_transform; ?>;
	 font-style: <?php echo $h4_font_weight; ?>;
}

.info-box p {
    line-height:  <?php echo $paragraph_line_height; ?>px!important;
}

.portfolio-tab-sorting li a {
    font-size: 16px;
}

.portfolio-page .portfolio-item figcaption h4 {
    font-size: <?php echo $h4_font_size; ?>px!important;
    font-weight: 500;
}

.portfolio-page .portfolio-item figcaption h6 {
    font-size: <?php echo $h6_font_size; ?>px!important;
    font-weight: 400;
}

.portfolio-page .portfolio-item figcaption a {
    font-size: <?php echo $h4_font_size; ?>px!important;
    font-weight: 400;
}

li.page-item .page-link {
    font-size: 18px;
}

.meta-info li a {
    font-size: 14px;
    font-weight: 400;
}

.blog-post .post-title a {
    font-size: 18px;
    font-weight: 500;
    line-height: 28px;
}

.blog-post a.read-more {
    font-size: 14px;
}

.single-post .post-title a {
    font-size: 24px;
}

.media ul li {
    font-size: 12px;
}

#page-404 h2 {
    font-size: 140px;
    font-weight: 600;
}

.coming-soon-wrapper h1 {
    font-size: <?php echo $h1_font_size; ?>px!important;
    font-weight: 600;
}

.count-area .text {
    font-size: 24px;
    text-transform: capitalize;
}

.subscribe-wrapper button {
    font-size: 16px;
}

.coming-soon-wrapper footer .social a {
    line-height: 35px;
    font-size: 16px;
}

.count-area .time-wrap span {
    font-size: 40px;
    letter-spacing: .05em;
}

.copyright a {
    font-size: 16px;
}

li.latest-news h6 {
    font-weight: 400;
    font-size: <?php echo $h6_font_size; ?>px;
    line-height: <?php echo $h6_line_height; ?>px;
	text-transform: <?php echo $h6_text_transform; ?>;
	font-style: <?php echo $h6_font_weight; ?>;
}

li.latest-news p {
    font-size: <?php echo $paragraph_font_size; ?>px;
    line-height: <?php echo $paragraph_line_height; ?>px;
	font-style: <?php echo $para_font_weight; ?>;
}

.widget_search input[type=button] {
    font-size: 14px;
}

.widget_recent_entries ul li a {
	font-size: <?php echo $h6_font_size; ?>px;
    line-height: <?php echo $h6_line_height; ?>px;
	text-transform: <?php echo $h6_text_transform; ?>;
	font-style: <?php echo $h6_font_weight; ?>;
}

.widdget-instagram li .instagram-overlay a {    
    font-size: 36px;
}

.widget-acrhives li a {
    font-size: 16px;
}

#blog-content .widget-calender .widget-title li {
    font-size: 22px;
}

.calendar_wrap thead {
    font-size: 18px;
}

#page-404 h3 {
    font-size: <?php echo $h3_font_size; ?>px!important;
}

h1 {
    font-size: <?php echo $h1_font_size; ?>px!important;
     line-height: <?php echo $h1_line_height; ?>px!important;
	 text-transform: <?php echo $h1_text_transform; ?>!important;
	 font-style: <?php echo $h1_font_weight; ?>!important;
}

h2 {
    font-size: <?php echo $h2_font_size; ?>px!important;
     line-height: <?php echo $h2_line_height; ?>px!important;
	 text-transform:<?php echo $h2_text_transform; ?>!important;
	 font-style: <?php echo $h2_font_weight; ?>!important;
}

h3 {
    font-size: <?php echo $h3_font_size; ?>px!important;
     line-height: <?php echo $h3_line_height; ?>px!important;
	 text-transform: <?php echo $h3_text_transform; ?>!important;
	 font-style: <?php echo $h3_font_weight; ?>!important;
}

h4 {
    font-size: <?php echo $h4_font_size; ?>px!important;
     line-height: <?php echo $h4_line_height; ?>px!important;
	 text-transform:<?php echo $h4_text_transform; ?>!important;
	 font-style: <?php echo $h4_font_weight; ?>!important;
}

h5 {
    font-size: <?php echo $h5_font_size; ?>px!important;
     line-height: <?php echo $h5_line_height; ?>px!important;
	 text-transform: <?php echo $h5_text_transform; ?>!important;
	 font-style: <?php echo $h5_font_weight; ?>!important;
}

h6 {
    font-size: <?php echo $h6_font_size; ?>px!important;
     line-height: <?php echo $h6_line_height; ?>px!important;
	 text-transform: <?php echo $h6_text_transform; ?>!important;
	 font-style: <?php echo $h6_font_weight; ?>!important;
}
p {
    font-family: 'Roboto', sans-serif;
    font-size: <?php echo $paragraph_font_size; ?>px;
    line-height: <?php echo $paragraph_line_height; ?>px;
	font-style: <?php echo $para_font_weight; ?>;
    font-weight: 400;
}
</style>

<?php endif;
} 
add_action('wp_head','hantus_own_theme_typography');
?>
