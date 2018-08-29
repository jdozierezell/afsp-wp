<?php
/**
 * Template Name: Risk Factors
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post();
				  get_template_part('template-parts/splash-container');	?>

<div class="sidebar container">
  <div class="sidebar__nav-container">
    <nav class="sidebar__nav">
      
        <?php if(have_rows('fg_features')) : 
          $counter = 0;
          while(have_rows('fg_features')) : the_row(); $counter++; ?>
      
       <a class="sidebar__nav-item" id="anchor<?php echo $counter - 1; ?>" href="#section<?php echo $counter - 1; ?>"><?php the_sub_field('fg_header'); ?></a>
       
        <?php endwhile;
        endif; ?>
       
    </nav>
  </div>
  <div class="sidebar__content">
    
			<?php if(have_rows('fg_features')) : $i = 0; 
    				while(have_rows('fg_features')) : the_row(); $i++;
    				  $section = 'section' . ($i - 1);
    					afsp_features('third', $section); // Code for this function exists in inc/features.php
    				endwhile;
  				endif; 
    				if(get_the_title() == 'Education') : // Is this the education page ? Show the grid.
    					get_template_part('template-parts/program-grid');
    				// else :
    				// 	 get_template_part('template-parts/icon-features');
    				endif; 
    			endwhile;
    		endif; ?>
  
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sidebar.js"></script>
				<?php get_footer(); ?>