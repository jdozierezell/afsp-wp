<?php
/**
 * Template Name: Program Grid
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				$id = get_the_ID();
				if(have_posts()) : while(have_posts()) : the_post(); ?>
				
	<div class="filters">
	  <div class="container">
	  
				<?php $program_options['options'] = [];
				if(have_rows('pg_program_pages')) : while(have_rows('pg_program_pages')) : the_row();
						$option_object = get_field_object('field_5661c926c978e');
						$option_value = get_sub_field('pg_program_department');
						$program_options['options'][$option_value] = $option_object['choices'][$option_value];
					endwhile;
				endif;
				
				
				$program_options['options'] = array_unique($program_options['options']);
				
				if($program_options['options'] != '') : ?>
		
		<div class="facet facet--programs">
  		<label for="dept">Select a department to filter programs</label>		    
    	<select class="grid__select" data-filter-group="dept" id="dept" name="<?php echo $ $program_options['options']; //$dept['key']; ?>">
    	  <option value="*">Show All</option>
	  
	      <?php foreach($program_options['options'] as $key => $value) { ?>
	        
        <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
	        
	      <?php } ?>
	  
	    </select>
		</div>		
		
				<?php endif; ?>
				
	  </div>
	</div>
				
<section class="grid container">
  
				<?php // WP_Query arguments
				if(have_rows('pg_program_pages')) : while(have_rows('pg_program_pages')) : the_row();
				    $post_object = get_sub_field('pg_program_page');
				    if($post_object) :
				      $post = $post_object;
				      setup_postdata($post); ?>

	<a class="program__item <?php echo get_sub_field('pg_program_department'); ?>" href="<?php the_permalink(); ?>">
		<table>
			<tbody>
				<tr>
					<td>
						
				<?php afsp_imgix('program__image', false, 'si', '(min-width: 1200px) 23vw, (min-width: 768px) 29vw, (min-width: 667px) 42vw, 84vw', '768', '768', '', ''); ?>
						
					</td>
				</tr>
				<tr>
					<td class="program__title"><?php the_title(); ?></td>
				</tr>
			</tbody>
		</table>			
	</a> 
				      
			   <?php endif;
          // Restore original Post Data
          wp_reset_postdata(); 
				  endwhile;
			  endif; ?>
        
</section>   

				<?php endwhile;
				endif; ?>
				
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<script>

  var $grid = jQuery('.grid').isotope({
    itemSelector: '.program__item',
    layoutMode: 'fitRows'
  });

  var filters = {};

  jQuery('.filters').on('change', '.grid__select', function() {
    var $this = jQuery(this);
    var filterGroup = $this.attr('data-filter-group');
    filters[filterGroup] = this.value;
    var filterValue = concatValues(filters);
    if(filterValue==='**' || filterValue==="***") {
      filterValue = '*';
    }
    console.log(filterValue);
    $grid.isotope({filter: filterValue});
  });
  
  
  function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
      value += obj[ prop ];
    }
    return value;
  }
  

</script>

				<?php get_footer(); ?>