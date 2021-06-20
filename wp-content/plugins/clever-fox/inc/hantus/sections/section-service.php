<?php
if ( ! function_exists( 'hantus_lite_service' ) ) :
	function hantus_lite_service() {
		 function hantus_get_service_default() {
			return apply_filters(
				'hantus_get_service_default', json_encode(
						 array(
						array(
							'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/service/service01.png',
							'title'           => esc_html__( 'Oil Massage', 'hantus' ),
							'text'            => esc_html__( 'Lorem Ipsum is simply dummy text of  the printing and typesetting.', 'hantus' ),
							'id'              => 'customizer_repeater_service_001',
							
						),
						array(
							'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/service/service02.png',
							'title'           => esc_html__( 'Skin Care', 'hantus' ),
							'text'            => esc_html__( 'Lorem Ipsum is simply dummy text of  the printing and typesetting.', 'hantus' ),
							'id'              => 'customizer_repeater_service_002',
						
						),
						array(
							'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/service/service03.png',
							'title'           => esc_html__( 'Natural Relaxation', 'hantus' ),
							'text'            => esc_html__( 'Lorem Ipsum is simply dummy text of  the printing and typesetting.', 'hantus' ),
							'id'              => 'customizer_repeater_service_003',
					
						),
						array(
							'image_url'       => CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/service/service04.png',
							'title'           => esc_html__( 'Nails Design', 'hantus' ),
							'text'            => esc_html__( 'Lorem Ipsum is simply dummy text of  the printing and typesetting.', 'hantus' ),
							'id'              => 'customizer_repeater_service_004',
							
						),
					)
				)
			);
		}
  $default_content = null;
	if ( current_user_can( 'edit_theme_options' ) ) {
			$default_content = hantus_get_service_default();
		}
?>
<?php 
		$hide_show_service= get_theme_mod('hide_show_service','1'); 
		$service_title= get_theme_mod('service_title','Our Services');
		$service_description= get_theme_mod('service_description','These are the services we provide, these makes us stand apart.');
		$service_contents= get_theme_mod('service_contents',$default_content);
		$service_display_num= get_theme_mod('service_display_num');
		$hide_show_service_excerpt= get_theme_mod('hide_show_service_excerpt');
		$service_sec_column= get_theme_mod('service_sec_column','3');
		
?>
<?php if($hide_show_service == '1') {?>
   <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title service-section">
                        <h2><?php echo $service_title; ?></h2>
                        <hr style="background: url('<?php echo get_template_directory_uri(); ?>/images/section-icon.png') no-repeat center / cover;">
                        <p><?php echo $service_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="row servicesss">
				<?php
					if ( ! empty( $service_contents ) ) {
					$allowed_html = array(
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
					'b'      => array(),
					'i'      => array(),
					);
					$service_contents = json_decode( $service_contents );
					foreach ( $service_contents as $service_item ) {
						$title = ! empty( $service_item->title ) ? apply_filters( 'hantus_translate_single_string', $service_item->title, 'service section' ) : '';
						$text = ! empty( $service_item->text ) ? apply_filters( 'hantus_translate_single_string', $service_item->text, 'service section' ) : '';
						$image = ! empty( $service_item->image_url ) ? apply_filters( 'hantus_translate_single_string', $service_item->image_url, 'service section' ) : '';
				?>
                <div class="col-lg-<?php echo $service_sec_column; ?> col-md-6 col-sm-6 mb-5 mb-lg-0 serv-cont">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <?php if ( ! empty( $image ) ) : ?>
								<img class="services_cols_mn_icon" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
							<?php endif; ?>
                            <figcaption>
                                <div class="inner-text">
                                </div>
                            </figcaption>
                        </figure>
							<?php if ( ! empty( $title ) ) : ?>
								<h4><?php echo esc_html( $title ); ?></h4>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo esc_html( $text ); ?></p>
							<?php endif; ?>	
                    </div>
                </div>
					<?php }}?>
            </div>
        </div>
    </section>
<?php 
		} 
	}
	endif;
	if ( function_exists( 'hantus_lite_service' ) ) {
		$section_priority = apply_filters( 'hantus_section_priority', 25, 'hantus_lite_service' );
		add_action( 'hantus_sections', 'hantus_lite_service', absint( $section_priority ) );
	}
?>