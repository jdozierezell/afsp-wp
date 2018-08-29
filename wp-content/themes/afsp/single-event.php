<?php
/**
 * The template for displaying single events
 *
 * @package afsp
 */

				get_header(); 
				if(have_posts()) : while(have_posts()) : the_post();

        get_template_part('template-parts/chapter-pixels'); ?>

<header class="breadcrumbs__container">
  <div class="breadcrumbs">
  
        <p id="breadcrumbs">
          <span>
            
        <?php	$terms = get_field('e_chapter'); 
        foreach($terms as $key=>$term) : ?>
            
            <a href="<?php echo site_url() . '/chapter/' . $term->slug ?>"><?php echo chapter_term_to_name($term); ?></a> › 
            
        <?php endforeach; ?>
            
          </span>
          <span class="breadcrumb_last">Events</span>
        </p>

  </div>
</header>

        <?php if(get_field('e_map_position') != 'bottom' && get_field('e_map_position') != 'hide') : ?>
				
<section class="splash container splash--map">
	
	      <?php echo do_shortcode('[gmw_single_location map_width="100%" map_height="450px" ul_marker="0" distance="0" additional_info="0" info_window="0"]'); ?>

</section>

        <?php endif; ?>

<h1 class="landing__title container"><?php the_title(); ?></h1>
<section class="event__details container">
  <div class="event__site">
    
        <?php $start_date = DateTime::createFromFormat('Y-m-d', get_field('e_start_date'));
        if(get_field('e_start_time')) :
          $start_field  = get_field_object('e_start_time');
          $start_value  = get_field('e_start_time');
          $start_label  = $start_field['choices'][$start_value];
        endif;
        $end_date     = DateTime::createFromFormat('Y-m-d', get_field('e_end_date')); 
        if(get_field('e_end_time')) :
          $end_field    = get_field_object('e_end_time');
          $end_value    = get_field('e_end_time');
          $end_label    = $end_field['choices'][$end_value];
        endif;
        
        
        if(get_field('e_start_date') === get_field('e_end_date')) : ?>
        
    <h2>
      
        <?php echo $start_date->format('M. j, Y'); ?>
      
    </h2>
        
        <?php if($start_label) : ?>
    
    <h3>
        
        <?php echo $start_label;
            if($end_label) :
              echo ' &ndash; ' . $end_label;
            endif; ?>
          
    </h3>
    
        <?php endif;
        else : ?>
        
    <h4>
      
        <?php echo $start_label ? 'From: ' . $start_date->format('M. j, Y') . ', ' . $start_label : 'From: ' . $start_date->format('M. j, Y');
          echo '<br/><br/>'; 
          echo $end_label ? 'To: ' . $end_date->format('M. j, Y') . ', ' . $end_label : 'To: ' . $end_date->format('M. j, Y'); ?>
      
    </h4>
    
        <?php endif; ?>
        
    <p>
    
        <?php echo do_shortcode('[gmw_post_info info="street"]') . 
        '<br />' . do_shortcode('[gmw_post_info info="city,state" divider=", "]') . 
             ' ' . do_shortcode('[gmw_post_info info="zipcode"]'); ?>
    
    </p>
    
        <?php if(get_field('e_registration_link')) : ?>
    
    <a class="features__button" href="<?php the_field('e_registration_link'); ?>" target="_blank">Register today</a>
    
        <?php endif; 
        if(get_field('e_contact_name') || get_field('e_contact_email')) :

        $c_name = get_field('e_contact_name');
        $c_email = get_field('e_contact_email'); ?>

      <p>For questions about this event, contact <?php echo $c_name; ?> at <a href="mailto:<?php echo $c_email; ?>"><?php echo $c_email; ?></a>.</p>

        <?php endif; ?>

  </div>
  <div class="event__description">

        <?php the_field('e_event_description'); ?>

        <?php if(get_field('e_map_position') == 'bottom') : ?>
        
<section class="splash container splash--map">
  
        <?php echo do_shortcode('[gmw_single_location map_width="100%" map_height="450px" ul_marker="0" distance="0" additional_info="0" info_window="0"]'); ?>

</section>

        <?php endif; ?>
    
  </div>
</section>
          
           
  
  				<?php endwhile;
				endif; ?>
				
				<?php get_footer(); ?>