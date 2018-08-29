<?php
/**
 * Template Name: Page Blocks
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<section class="container">
  <h1 class="landing__title"><?php the_title(); ?></h1>

				<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>
					
  <div class="lost__header">
    <div class="lost__introduction"><?php the_field('bpl_block_intro'); ?></div>
  </div>
</section>
<section class="lost__section container">
  <div class="block__links">  

        <?php 
        if(have_rows('bpl_block_list')) : while(have_rows('bpl_block_list')) : the_row();
            $page = get_sub_field('bpl_pages');
            $category = get_sub_field('bpl_category');
            if($category === 'federal') :
              $category_text = 'Federal Priority';
            elseif($category === 'state') :
              $category_text = 'State Priority';
            endif;
            if($page) :
              $post = $page;
              setup_postdata($post);
        ?>    
        
    <a class="block__link block__link--<?php echo $category; ?>" href="<?php the_permalink(); ?>">
			<table>
				<tr>
					<td>
						
				<?php afsp_imgix('block__image', false, 'si', '100vw', 400, 300, 768, 768); ?>
						
					</td>
				</tr>
				<tr>
					<td class="block__link-text">
						<span class="block__category"><?php echo $category_text; ?></span>
						<br /><?php the_title(); ?></td>
				</tr>
			</table>
    </a>
        
				<?php wp_reset_postdata(); // reset the post so nothing else is affected
				    endif;
				  endwhile;
		    endif; ?>

  </div>     
</section>

				<?php  endwhile;
				endif; ?>

				<?php get_footer(); ?>