<?php
/**
 * The template for displaying all chapter pages
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title'); ?>
				
				<?php 
				if(is_single() && $post->post_parent == 0) :
					get_template_part('template-parts/chapter-home');
				else :
					get_template_part('template-parts/chapter-subpage');
				endif; ?>
				
				<?php get_footer(); ?>