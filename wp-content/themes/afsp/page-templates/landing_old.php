<?php
/**
 * Template Name: Landing (old)
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); 
					if(have_rows('l_content_section')) : 
						$counter = 0;
						while(have_rows('l_content_section')) : the_row(); $counter++;
						if(get_row_layout() == 'image_heading_text_cta') : 
							$container = 'container';
							if(get_sub_field('l_image_location') != 'none') :
								$img_class = get_sub_field('l_image_location');
								$container = 'container__' . $img_class; ?>
									
	<section class="landing--flex container">	
	
				<?php	switch($img_class) {
										case 'full': 
											afsp_imgix('landing__image--' . $img_class, true, 'l', '100vw', 1532, 768, 768, 500);
											break;
										case 'left':
										case 'right': 
											afsp_imgix('landing__image--' . $img_class, true, 'l', '(min-width: 768px) 50vw, 100vw', 768, 500,'','');
											break;
									}	; 
								endif; ?>
				
	<div class="landing__<?php echo $img_class ?>">
		
				<?php if($counter == 1) : ?>
				
		<h1 class="landing__title"><?php the_title(); ?></h1>
		
				<?php endif; ?>
		
		<h3 class="landing__header"><?php the_sub_field('l_heading'); ?></h3>
		<div class="landing__body"><?php the_sub_field('l_text'); ?></div>

	</div>
</section>

        <?php	endif; 
					endwhile;
					endif; ?>

				<?php if(get_the_title() == 'Education') : // Is this the education page ? Show the grid.
						get_template_part('template-parts/program-grid');
					else :
						 get_template_part('template-parts/icon-features');
					endif; ?>
					


				<?php	endwhile;
				endif; ?>
				
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<script>

  var $programs = jQuery('.programs').isotope({
    itemSelector: '.program__item',
    layoutMode: 'fitRows'
  });
  
  jQuery('.program__filter').on('change', function() {
  	var filterValue = this.value;
  	console.log(filterValue);
  	$programs.isotope({filter: filterValue});
  });
  
  

</script>

				<?php get_footer(); ?>