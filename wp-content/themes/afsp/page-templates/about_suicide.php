<?php
/**
 * Template Name: About Suicide
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<div class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</div>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); 
					get_template_part('template-parts/icon-features');
				endwhile;
				endif; ?>

				<?php get_footer(); ?>