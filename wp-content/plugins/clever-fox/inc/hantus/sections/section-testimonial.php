<?php
  if ( ! function_exists( 'hantus_lite_testimonial' ) ) :
	function hantus_lite_testimonial() {
			function hantus_get_testimonial_default() {
			return apply_filters(
				'hantus_get_testimonial_default', json_encode(
					array(
						array(
							'title'           => esc_html__( 'Eric Matision', 'hantus-pro' ),
							'designation'        => esc_html__( 'Forest Hills. NY', 'hantus-pro' ),
							'text'            => esc_html__( 'I am very impressed by the efficiency of your service and your excellent returns policy. It is so pleasant to deal with such a customer focussed website.', 'hantus-pro' ),
							'image_url'		  =>  CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/testimonial/testimonial01.png',
							'id'              => 'customizer_repeater_testimonial_001',
						),
						array(
							'title'           => esc_html__( 'Jennifer Lopez', 'hantus-pro' ),
							'designation'        => esc_html__( 'Forest Hills. NY', 'hantus-pro' ),
							'text'            => esc_html__( 'I am very impressed by the efficiency of your service and your excellent returns policy. It is so pleasant to deal with such a customer focussed website.', 'hantus-pro' ),
							'image_url'		  =>  CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/testimonial/testimonial01.png',
							'id'              => 'customizer_repeater_testimonial_002',
						),
						array(
							'title'           => esc_html__( 'Betty Ross', 'hantus-pro' ),
							'designation'        => esc_html__( 'Developer', 'hantus-pro' ),
							'text'            => esc_html__( 'I am very impressed by the efficiency of your service and your excellent returns policy. It is so pleasant to deal with such a customer focussed website.', 'hantus-pro' ),
							'image_url'		  =>  CLEVERFOX_PLUGIN_URL . 'inc/hantus/images/testimonial/testimonial01.png',
							'id'              => 'customizer_repeater_testimonial_003',
						),
					)
				)
			);
		}
		$default_content = null;
			if ( current_user_can( 'edit_theme_options' ) ) {
					$default_content = hantus_get_testimonial_default();
				}
?>
<?php 
	$hide_show_testimonial= get_theme_mod('hide_show_testimonial','1'); 
	$testimonial_contents= get_theme_mod('testimonial_contents',$default_content);
	$testimonial_background_setting= get_theme_mod('testimonial_background_setting',CLEVERFOX_PLUGIN_URL .'inc/hantus/images/testimonial/testimonial-bg.jpg');
?>
<?php if($hide_show_testimonial == '1') { ?>
<?php if ( ! empty( $testimonial_background_setting ) ) { ?>
 <section id="testimonial" class="section-padding" style="background: url('<?php echo esc_url($testimonial_background_setting); ?>') no-repeat center scroll/ 100% 100% ">
 <?php }else{ ?>
<section id="testimonial" class="section-padding" style="background:#f7f7f7;">
<?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel text-center" data-slider-id="1">
						<?php
							if ( ! empty( $testimonial_contents ) ) {
							$allowed_html = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'b'      => array(),
							'i'      => array(),
							);
							$testimonial_contents = json_decode( $testimonial_contents );
							foreach ( $testimonial_contents as $testimonial_item ) {
								
								$title = ! empty( $testimonial_item->title ) ? apply_filters( 'hantus_translate_single_string', $testimonial_item->title, 'testimonial section' ) : '';
								$designation = ! empty( $testimonial_item->designation ) ? apply_filters( 'hantus_translate_single_string', $testimonial_item->designation, 'testimonial section' ) : '';
								$text = ! empty( $testimonial_item->text ) ? apply_filters( 'hantus_translate_single_string', $testimonial_item->text, 'testimonial section' ) : '';
								$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'hantus_translate_single_string', $testimonial_item->image_url, 'testimonial section' ) : '';
						?>
                        <div class="single-testimonial" data-dot="<img src='<?php echo esc_url( $image ); ?>'/>">
							<?php if ( ! empty( $text ) ) : ?>
								<p>???<?php echo esc_attr( $text ); ?>???</p>
							<?php endif; ?>		
							<?php if ( ! empty( $title ) ) : ?>
								<h5><?php echo esc_attr( $title ); ?></h5>
							<?php endif; ?>	
							<?php if ( ! empty( $designation ) ) : ?>
								<p class="title"><?php echo esc_attr( $designation ); ?></p>
							<?php endif; ?>	
                        </div>
                        <?php 
								}
							} 
						?>
                    </div>
                </div>
            </div>
        </div>
		</section>
    </section>
<?php
	} }
endif;
if ( function_exists( 'hantus_lite_testimonial' ) ) {
$section_priority = apply_filters( 'hantus_section_priority', 37, 'hantus_lite_testimonial' );
add_action( 'hantus_sections', 'hantus_lite_testimonial', absint( $section_priority ) );
}
?>	