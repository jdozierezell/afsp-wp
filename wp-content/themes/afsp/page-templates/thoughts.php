<?php
/**
 * Template Name: Thoughts of Suicide
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); 
				get_template_part( 'template-parts/splash-container'); ?>

<div class="container">
  <h2 class="page__header"><?php the_field('c_page_header'); ?></h2>
</div>	
<section class="thoughts container">
  
        <?php 
				if(have_rows('t_thoughts_items')) : while(have_rows('t_thoughts_items')) : the_row(); ?>
  
  <div class="thoughts__item">
    <a class="thoughts__link thoughts__link--action" title="<?php the_sub_field('t_thoughts_organization'); ?>" href="<?php the_sub_field('t_thoughts_link'); ?>">
      <img class="thoughts__image" alt="<?php the_sub_field('t_thoughts_organization'); ?>" src="<?php the_sub_field('t_thoughts_image'); ?>" />
    </a>
  </div>

        <?php endwhile;
        endif; ?>
  
</section>

<section class="features features--full-background">
	<div class="features__cta">
	  <div class="container container--flex">
  		<h2 class="features__header"><?php the_field('c_cta_header'); ?></h2>
  		<div class="features__body"><?php the_field('c_cta_body'); ?></div>
  		  
  		  <?php if(get_field('c_cta_button')) :
          if(get_field('c_link_type') == 'internal') :
        	  $link = get_field('c_cta_page_link');
          else :
            $link = get_field('c_cta_external_link');
          endif;?>
          
		  <div class="features__button-wrapper">
  		  <a class="features__button" href="<?php echo $link ?>"><?php the_field('c_cta_button'); ?></a>
		  </div>
  		
  		  <?php endif;
  		    endwhile;
  		  endif; ?>
  		  
	  </div>
	</div>
</section>

				<?php get_footer(); ?>