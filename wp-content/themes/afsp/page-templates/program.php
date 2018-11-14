<?php
/**
 * Template Name: Program
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); 
				get_template_part('template-parts/splash-container'); ?>
				
<div class="container">		
				
				<?php if(have_rows('pf_features')) : while(have_rows('pf_features')) : the_row(); 
				    if(get_row_layout() == 'pf_header_with_content') : ?>

		  
<section class="program-feature" role="region" aria-label="program features">

        <?php if(get_sub_field('pf_header')) : ?>

  <h2 class="program-feature__header"><?php the_sub_field('pf_header'); ?></h2>

        <?php endif; ?>

  <div class="program-feature__body"><?php the_sub_field('pf_body'); ?></div>
</section>

				<?php 
				
				elseif(get_row_layout() == 'pf_program_content') : 
          $rows = count(get_sub_field('pf_content_block')); ?>
				
<section class="program-feature program-feature--flex" role="region" aria-label="program features">
  
        <?php if(have_rows('pf_content_block')) : while(have_rows('pf_content_block')) : the_row(); ?>
        
  <div class="program-feature__block program-feature__block--<?php echo $rows; ?>x">
    
        <?php if(get_sub_field('pf_content_type') == 'image') : 
                  $content_image = get_sub_field('pf_image'); ?>
    
        <?php afsp_imgix('program-feature__image', true, 'pf', '100vw', 960, 480, '', ''); ?>
    
        <?php elseif(get_sub_field('pf_content_type') == 'video') : ?>
        
    <div class="program-feature__video">
          
        <?php if(get_sub_field('pf_video_source') === 'youtube') : ?>
        
      <iframe width="700" height="394" src="https://www.youtube.com/embed/<?php echo the_sub_field('pf_video_id'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
  
        <?php elseif(get_sub_field('pf_video_source') === 'vimeo') : ?>
                  
      <iframe src="https://player.vimeo.com/video/<?php echo the_sub_field('pf_video_id'); ?>" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    
        <?php endif; ?>
        
    </div>  
        
        <?php endif; ?>
    

        <?php if(get_sub_field('pf_content_header')) : ?>


    <h3 class="program-feature__header"><?php the_sub_field('pf_content_header'); ?></h3>  

        <?php endif; ?>

    <div class="program-feature__body"><?php the_sub_field('pf_content_body'); ?></div>
    
        <?php if(get_sub_field('pf_link_type')) : 
            if(get_sub_field('pf_link_type') == 'file') :
              $cta_link = get_sub_field('pf_file_link');
            elseif(get_sub_field('pf_link_type') == 'anchor') :
              $cta_link = get_sub_field('pf_anchor_link');
            elseif(get_sub_field('pf_link_type') == 'internal') :
              $cta_link = get_sub_field('pf_internal_link');
            else :
              $cta_link = get_sub_field('pf_external_link');
            endif; ?>
    
    <div class="program-feature__button">
      <a class="button features__button" href="<?php echo $cta_link; ?>"><?php the_sub_field('pf_call_to_action'); ?></a>
    </div>
          
        <?php endif; ?>
    
    
  </div>
  
        <?php endwhile;
				      endif; ?>
  
</section>
				
				  <?php endif;
  				endwhile;
  				endif; ?>
  				
</div>  				
<?php if(get_field('c_cta_header')) : ?>

<section class="features features--full-background">
	<div class="features__cta">
	  <div class="container container--flex">
  		<h2 class="features__header"><?php the_field('c_cta_header'); ?></h2>
  		<div class="features__body"><?php the_field('c_cta_body'); ?></div>
  		  
  		  <?php if(get_field('c_cta_button')) :
          if(get_field('c_link_type') == 'internal') :
        	  $link = get_field('c_cta_page_link');
          elseif(get_field('c_link_type') == 'email') :
            $link = 'mailto:' . get_field('c_cta_email_link');
          else :
            $link = get_field('c_cta_external_link');
          endif;?>
          
		  <div class="features__button-wrapper">
  		  <a class="features__button" href="<?php echo $link ?>"><?php the_field('c_cta_button'); ?></a>
		  </div>
  		
  		  <?php endif;
  		  endif; ?>
  				
				<?php endwhile;
				endif; ?>

				<?php get_footer(); ?>