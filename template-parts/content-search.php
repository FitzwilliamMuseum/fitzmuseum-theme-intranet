<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-md-12 shadow-sm p-5 mb-3 bg-white rounded">

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail(array(150,150), array('class' => 'rounded-circle float-right')); ?>
		    </a>
		</div><!--  .post-thumbnail -->
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php fitzmuseum_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(400); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php fitzmuseum_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
