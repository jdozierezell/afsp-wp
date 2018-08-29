<?php
/**
 * Template Name: Featured Pages
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<section class="container">
  <h1 class="landing__title"><?php the_title(); ?></h1>

				<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>
					
  <div class="lost__header">
    <div class="lost__introduction"><?php the_field('lo_intro_text'); ?></div>
  </div>
</section>

        <?php if(have_rows('lo_lost_section')) : while(have_rows('lo_lost_section')) : the_row(); ?>
        
<section class="lost__section container">

        <?php if(get_sub_field('lo_lost_section_header')) : ?>

  <h2 class="lost__section-header"><?= get_sub_field('lo_lost_section_header'); ?></h2>

        <?php endif; ?>
  
        <?php if(have_rows('lo_lost_link')) : ?>
        
  <div class="lost__links">      
        
        <?php while(have_rows('lo_lost_link')) : the_row(); 
                if(get_sub_field('lo_link_type') == 'internal') :
                  $link = get_sub_field('lo_page_link');
                else :
                  $link = get_sub_field('lo_external_page_link');
                endif; ?>
    
    <a class="lost__link" href="<?php echo $link; ?>">
			<table>
				<tr>
					<td>
						
				<?php afsp_imgix('lost__image', true, 'lo', '100vw', 400, 300, 768, 768); ?>
						
					</td>
				</tr>
				<tr>
					<td class="lost__link-text"><?php the_sub_field('lo_link_text'); ?></td>
				</tr>
			</table>
    </a>
    
        <?php endwhile; ?>
        
  </div>   
        
        <?php endif; ?>
  
</section>
        
				<?php endwhile;
				    endif; ?>
				    

				<?php  endwhile;
				endif; ?>

				<?php get_footer(); ?>