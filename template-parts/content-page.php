<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FitzMuseum
 */

?>
<?php
if(get_the_post_thumbnail_url($id = get_the_ID(), 'full') != ''):
?>
<style>
.imageBanner {
	overflow: hidden;
	background-size: cover;
	background-position: center;
	background-image: url('<?php echo get_the_post_thumbnail_url($id = get_the_ID(), 'full');?>');
	height: 300px;
}
</style>
<div class="container imageBanner">
</div>
<?php

endif;
?>
<article id="post-<?php the_ID(); ?>" class="col shadow-sm p-5 mx-auto mb-3 bg-white">



	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
			<?php echo do_shortcode('[su_subpages depth="1" p="" class="float-right col-md-3 shadow-sm p-5 ml-3 mb-3 bg-white"]');?>
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitzmuseum' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>


			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'fitzmuseum' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true>',
					'</a>'
				);
			?>
			</div>
	<?php endif; ?>
</article><!-- #post-## -->
