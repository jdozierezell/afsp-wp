<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package afsp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="posted-on">
					
		<?php // $date = DateTime::createFromFormat('Ymd', get_field('b_date'));
		// echo $date->format('F d, Y'); ?>
		
				</span> | 
				<span class="byline">
				
		<?php 

		$term = get_term(get_field('b_author'));
		if( $term ):
			echo $term->name;
		else :
			echo 'AFSP';
		endif; ?>
				
				</span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

<!--	<div class="entry-summary">
		<?php // the_excerpt(); ?>
	</div>--><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php afsp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

