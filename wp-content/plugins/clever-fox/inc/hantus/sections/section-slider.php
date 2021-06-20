<?php
/**
 * Slider section for the homepage.
 */
if ( ! function_exists( 'hantus_lite_slider' ) ) :

	function hantus_lite_slider() {
		
		$slide_image = get_theme_mod('slide_image',CLEVERFOX_PLUGIN_URL .'inc/hantus/images/slider/slider.jpg');
		$slide_title = get_theme_mod('slide_title','Welcome To Hantus Spa');
		$slide_subtitle = get_theme_mod('slide_subtitle','Beauty & Spa Wellness');
		$slide_description = get_theme_mod('slide_description','The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.');
		$slide_btn_text = get_theme_mod('slide_btn_text','Make an Appoinment');
		$slide_btn_link = get_theme_mod('slide_btn_link','#');
		$slider_opacity					= get_theme_mod('slider_opacity'); 
		$hide_show_slider				= get_theme_mod('hide_show_slider','1'); 
		
		if($hide_show_slider == '1') {
		?>
		  <header id="slider">
			<div class="row">
				<div class="col-md-12">
					<div class="header-slider">
						<div class="header-single-slider">
							<figure>
								<img src="<?php echo esc_url( $slide_image ); ?>" alt="">
								<figcaption>
									<div class="content" style="background: rgba(35, 48, 73,<?php echo $slider_opacity; ?>);">
										<div class="container inner-content text-left">
											<h3><?php echo esc_html( $slide_title ); ?></h3>
											<h1><?php echo esc_html( $slide_subtitle ); ?></h1>
											<p><?php echo esc_html( $slide_description ); ?></p>
											<a href="<?php echo esc_url( $slide_btn_link ); ?>" class="boxed-btn"><?php echo esc_html( $slide_btn_text ); ?></a>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php
		}
	}

endif;

if ( function_exists( 'hantus_lite_slider' ) ) {
$section_priority = apply_filters( 'hantus_section_priority', 11, 'hantus_lite_slider' );
add_action( 'hantus_sections', 'hantus_lite_slider', absint( $section_priority ) );

}