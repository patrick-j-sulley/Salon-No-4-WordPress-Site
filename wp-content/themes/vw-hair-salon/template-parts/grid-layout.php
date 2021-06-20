<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Hair Salon
 * @subpackage vw-hair-salon
 * @since VW Hair Salon 1.0
 */
?>
<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
	          	?>  
	        </div>
	        <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>  
	        <div class="new-text">
	          	<div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_hair_salon_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_hair_salon_excerpt_number','30')))); ?></p></div>
	        </div>
	        <div class="content-bttn">
	          	<a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'vw-hair-salon' ); ?>"><?php esc_html_e('Read More','vw-hair-salon'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read More','vw-hair-salon' );?></span></a>
	        </div>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>