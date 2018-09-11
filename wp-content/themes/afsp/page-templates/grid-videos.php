<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title');
if(have_posts()) : while(have_posts()) : the_post(); ?>			
        <div class="filters">
            <div class="container">
                <?php 
                $type = get_field_object('field_560ea1b7b18db');
                if ( $type ) :
                ?>
                    <div class="facet">
                        <label for="type">Grant Type</label>		    
                        <select class="grid__select" data-filter-group="type" id="type" name="<?php echo $type['key']; ?>">
                            <option value="*">Show All</option>
                            <?php foreach($type['choices'] as $key => $value) { ?>
                                <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>		
                <?php
                endif; 
                $area = get_field_object('field_560edfac797ec');
                if ( $area ) :
                ?>
                    <div class="facet">
                        <label for="area">Research Area(s)</label>		    
                        <select class="grid__select" data-filter-group="area" id="area" name="<?php echo $area['key']; ?>[]" multiple>
                            <option value="*">Show All</option>
                            <?php foreach($area['choices'] as $key => $value) { ?>
                                <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>
				
                <?php
                endif; 
                $year = get_field_object('field_560e804dde723');
                if($year) :
                ?>
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
            <?php if ( have_rows( 'vg_videos' ) ) : while ( have_rows( 'vg_videos' ) ) : the_row; ?>
                <div class="videoEmbed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/H44tfaLvp8I?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </section>   
	
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
</script>

<?php
    endwhile;
endif;
get_footer();
?>