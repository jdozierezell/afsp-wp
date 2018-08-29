<?php
/**
 * Template Name: Our Work
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); 
				if(have_posts()) : while(have_posts()) : the_post(); ?>
				
<section class="container page__header"><?php the_field('ow_intro_text'); ?></section>
				
				<?php if(have_rows('ow_work_section')) : while(have_rows('ow_work_section')) : the_row();	?>

<section class="our-work container">
	<div class="our-work__meta">
		<h3 class="our-work__header"><?php the_sub_field('ow_section_header'); ?></h3>
		<p class="our-work__body"><?php the_sub_field('ow_section_body'); ?></p>
	</div>
	<div class="our-work__links">
		
	
				<?php if(have_rows('ow_work_links')) : while(have_rows('ow_work_links')) : the_row(); 
					$icon = get_sub_field('ow_page_image'); 
					$work = get_sub_field('ow_page_link'); 
					if($work) :
						$post = $work;
						setup_postdata($post); ?>
	

	<a class="action" href="<?php the_permalink(); ?>">
		<table>
	  	<tbody>
		  	<tr>
		  		<td>
						<img class="action__image" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
					</td>
		  	</tr>
		  	<tr>
		  		<td class="action__cta"><?php the_title(); ?></td>
		  	</tr>
	  	</tbody>
	  </table>
	</a>
				
				<?php wp_reset_postdata(); // like we were never here
							endif;
						endwhile;
					endif; ?>
		
	</div>
</section>

				<?php endwhile;
						endif;
					endwhile;
				endif; ?>

				<?php get_footer(); ?>