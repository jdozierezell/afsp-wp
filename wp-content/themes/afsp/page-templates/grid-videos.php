<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				$id = get_the_ID();
				if(have_posts()) : while(have_posts()) : the_post(); ?>
				
	<div class="filters">
	  <div class="container">
	  
				<?php $type = get_field_object('field_560ea1b7b18db');
				    if($type) : ?>
		
		<div class="facet">
  		<label for="type">Grant Type</label>		    
    	<select class="grid__select" data-filter-group="type" id="type" name="<?php echo $type['key']; ?>">
    	  <option value="*">Show All</option>
	  
	      <?php foreach($type['choices'] as $key => $value) { ?>
	        
        <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
	        
	      <?php } ?>
	  
	    </select>
		</div>		
		
				<?php endif; 
				    $area = get_field_object('field_560edfac797ec');
				    if($area) : ?>
		
		<div class="facet">
  		<label for="area">Research Area(s)</label>		    
    	<select class="grid__select" data-filter-group="area" id="area" name="<?php echo $area['key']; ?>[]" multiple>
    	  <option value="*">Show All</option>
	  
	      <?php foreach($area['choices'] as $key => $value) { ?>
	        
        <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
	        
	      <?php } ?>
	  
	    </select>
    </div>
				
				<?php endif; 
				    $year = get_field_object('field_560e804dde723');
				    if($year) : ?>
		
		<div class="facet">
  		<label for="year">Year Granted</label>		    
    	<select class="grid__select" data-filter-group="year" id="year" name="<?php echo $year['key']; ?>">
    	  <option value="*">Show All</option>
	  
	      <?php foreach($year['choices'] as $key => $value) { ?>
	        
        <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
	        
	      <?php } ?>
	  
	    </select>
    </div>
				
				<?php endif; ?>
				
	  </div>
	</div>
<section class="container" style="text-align: center; font-weight: bold;"><?php the_content(); ?></section>
<section class="grid">
  
				<?php // WP_Query arguments
        $args = array (
        	'post_parent'            => $id,
        	'post_type'              => array('page'),
          'posts_per_page'         => -1
        );
        // The Query
        $grid = new WP_Query( $args );
        // The Loop
        if($grid->have_posts()) : while($grid->have_posts()) : $grid->the_post(); 
        if(have_rows('g_grantees')) : while(have_rows('g_grantees' && $grantee == '')) : the_row(); // make sure grantee hasn't already been established for grants with multiple grantees
            $grantee = get_sub_field('g_grantee'); 
          endwhile;
        endif; 
        $title = get_the_title(); 
        $title = shorten_with_ellipsis($title, 70); 
        $type_field = get_field_object('g_type');
        $type = $type_field['choices'][get_field('g_type')];
        $type_data = get_field('g_type');
        $area_data = get_field('g_research_area');
        $year_data = get_field('g_year'); ?>
        
  <a class="grid__item <?php echo $type_data . ' ' . implode(' ', $area_data) . ' ' . $year_data; ?>" data-year="<?php echo $year_data; ?>" data-type="<?php echo $type_data; ?>" href="<?php the_permalink(); ?>">
          <p><?php echo $title; ?></p>
          <p><?php echo $grantee; ?></p>
          <p><?php echo $type; ?></p>
        
        <?php $research_areas = get_field('g_research_area');
        foreach($research_areas as $area) {
          switch ($area) {
            case 'neurobiological' :
              $res_area = 'N';
              $res_tip = 'How do brain structure and neurochemical function contribute to suicide?';
              break;
            case 'genetic' :
              $res_area = 'G';
              $res_tip = 'What genetic pathways are associated with suicide risk, and can we develop biological interventions and treatments?';
              break;
            case 'psychosocial' :
              $res_area = 'P';
              $res_tip = 'What are the risk factors and warning signs for suicide?';
              break;
            case 'treatment' :
              $res_area = 'T';
              $res_tip = 'What treatments &mdash; like therapies and medications &mdash; are effective at reducing suicide?';
              break;
            case 'community' :
              $res_area = 'C';
              $res_tip = 'What universal prevention programs &mdash; like hotlines, gatekeeper training, and community-based programs &mdash; are the most effective?';
              break;
            case 'loss' :
              $res_area = 'L';
              $res_tip = 'What is the impact of suicide loss, and what helps the healing process?';
              break;
          }
          echo '<span class="grid__area hint--bottom" data-hint="' . $res_tip . '">' . $res_area . '</span>';
        }?>
        
  </a>     		
        
        <?php	$grantee = ''; // reset grantee to blank for next card
          endwhile;
        endif;
        // Restore original Post Data
        wp_reset_postdata(); ?>
        

</section>   

				<?php endwhile;
				endif; ?>
				
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<script>

  jQuery(document).ready(function($) {
    $('select').prop('selectedIndex', function () {
      var selected = $(this).children('[selected]').index();
      console.log(selected);
      return selected != -1 ? selected : 0;
    });
  });

  var $grid = jQuery('.grid').isotope({
    itemSelector: '.grid__item',
    layoutMode: 'fitRows',
    getSortData: {
      year: '[data-year]', // grant year
      type: '[data-type]'  // grant type
    },
    sortBy: ['year', 'type'],
    sortAscending: false
  });

  var filters = {};

  jQuery('.filters').on('change', '.grid__select', function() {
    var $this = jQuery(this);
    var filterGroup = $this.attr('data-filter-group');
    filters[filterGroup] = $this.val();
    var filterValue = concatValues(filters);
    if(filterValue==='**' || filterValue==='***') {
      filterValue = '*';
    }
    $grid.isotope({filter: filterValue});
  });
  
  
  function concatValues(filters) {
    var type, area, year, value = ' ';
    if(filters['type'] && filters['type'] !== '*') {
      type = filters['type'];
      value += type;
    }
    if(filters['year'] && filters['year'] !== '*') {
      year = filters['year'];
      value += year;
    }
    if(filters['area'] && filters['area'] !== '*') {
      area = filters['area'];
      var preValue = value;
      for(var i = 0; i < area.length; i++) {
        value += area[i];
        if(i + 1 !== area.length) {
          value += ', ' + preValue;
        }
      }
    }
    return value;
  }  

  // function oldConcat(obj) {
  //   for ( var prop in obj ) {
  //       value += obj[ prop ];
  //   }
  //   return value;
  // }
  

</script>

				<?php get_footer(); ?>
				
				