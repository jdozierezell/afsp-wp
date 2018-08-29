<?php
/**
 * Template Name: Partners
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); 
				
				if(have_posts()) : while(have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/splash-container'); ?>

<section class="container highlight-intro">				
				
				<?php the_content(); ?>

</section>
		
			
        <?php get_template_part('template-parts/partners');
					endwhile;
				endif; ?>
				
				<?php get_footer(); ?>