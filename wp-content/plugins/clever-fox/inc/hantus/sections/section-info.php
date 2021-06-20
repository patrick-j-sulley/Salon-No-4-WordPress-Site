<?php
	if ( ! function_exists( 'hantus_lite_info' ) ) :
	function hantus_lite_info() {
		$hide_show_info			= get_theme_mod('hide_show_info','1');
		$info_first_img_setting	= get_theme_mod('info_first_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon01.png');
		$info_title				= get_theme_mod('info_title','Opening Time');
		$info_description		= get_theme_mod('info_description','Mon - Sat: 10h00 - 18h00');
		$info_second_img_setting= get_theme_mod('info_second_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon02.png');
		$info_title2			= get_theme_mod('info_title2','Address');
		$info_description2		= get_theme_mod('info_description2','40 Baria Sreet, NY USAm');
		$info_third_img_setting	= get_theme_mod('info_third_img_setting',CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/icons/icon03.png');		
		$info_title3			= get_theme_mod('info_title3','Telephone');
		$info_description3		= get_theme_mod('info_description3','+12 345 678 9101'); 	
?>
	<?php if($hide_show_info == '1') { ?>
    <section id="contact">
        <div class="container contact-wrapper text-center text-xl-left">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact info-first">
					<?php if ( ! empty( $info_first_img_setting ) ) { ?>
                            <img src="<?php echo esc_url( $info_first_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
					<?php } ?>
                    <h4><?php echo esc_attr( $info_title ); ?></h4>
                    <p><?php echo esc_attr( $info_description ); ?></p>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact info-second">
                     <?php if ( ! empty( $info_second_img_setting ) ) { ?>
						 <img src="<?php echo esc_url( $info_second_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
					<?php } ?>		
                    <h4><?php echo esc_attr( $info_title2 ); ?></h4>
                    <p><?php echo esc_attr( $info_description2 ); ?></p>
                </div>
                <div class="col-xl-4 offset-xl-0 col-md-6 col-sm-6 offset-sm-3 single-contact info-third">
                   <?php if ( ! empty( $info_third_img_setting ) ) { ?>
						 <img src="<?php echo esc_url( $info_third_img_setting ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
					<?php } ?>		
                    <h4><?php echo esc_attr( $info_title3 ); ?></h4>
                    <p><?php echo esc_attr( $info_description3 ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php 
	 }
	}
	endif;
	if ( function_exists( 'hantus_lite_info' ) ) {
		$section_priority = apply_filters( 'hantus_section_priority', 12, 'hantus_lite_info' );
		add_action( 'hantus_sections', 'hantus_lite_info', absint( $section_priority ) );
	}
?>