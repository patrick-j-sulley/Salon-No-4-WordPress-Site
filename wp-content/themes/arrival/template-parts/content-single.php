<?php
/**
 * Default template for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Arrival
 */
$post_format 	= get_post_format( get_the_id() );
$slider_class = '';
if( 'gallery' == $post_format ){
	$slider_class = 'gallery-post-format';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="post-thumb <?php echo esc_attr($slider_class)?>">
		<?php arrival_post_format_display(); ?>
	</div>
	<div class="entry-meta">
		<?php
		arrival_posted_by();
		echo arrival_post_view(); //get post view
		arrival_posted_on(); 
		arrival_comments_link();
		arrival_post_categories();
		arrival_edit_post_link();
		?>
	</div><!-- .entry-meta -->
	
	<div class="entry-content clearfix">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'arrival' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'arrival' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->