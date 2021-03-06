<?php
/**
 * Template Name: For Journalists
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post();
				  get_template_part('template-parts/splash-container'); ?>

<div class="container">
  <h2 class="page__header"><?php the_field('c_page_header'); ?></h2>
</div>				
<section class="container">
  <div class="sidebar">
  <div class="sidebar__nav-container" id="slick-container">
    <nav class="sidebar__nav" id="slick-sidebar">
      
        <?php if(have_rows('c_content')) : 
          $counter = 0;
          while(have_rows('c_content')) : the_row(); $counter++; ?>
      
       <a class="sidebar__nav-item" id="anchor<?php echo $counter; ?>" href="#section<?php echo $counter; ?>"><?php the_sub_field('c_content_header'); ?></a>
       
        <?php endwhile;
        endif; ?>
      
      <a class="sidebar__nav-item" id="anchor0" href="#section0">Press Releases</a>
    </nav>
  </div>
  <div class="sidebar__content">
    
        <?php if(have_rows('c_content')) :
          $counter = 0;
          while(have_rows('c_content')) : the_row(); $counter++;
          if (get_sub_field('c_is_flex') == true) :
            $flex = 'flex';
          endif; 
          $flex_class = isset( $flex ) ? "sidebar__content-section $flex" : 'sidebar__content-section';
          ?>
    
    <section class="<?php echo esc_attr( $flex_class ); ?>" id="section<?php echo $counter; ?>">
      <h2 class="sidebar__content-header"><?php the_sub_field('c_content_header'); ?></h2>
      <div>
        
        <?php if(!get_sub_field('c_link_to_pages')) :
          the_sub_field('c_content_section');
        else :
          if(have_rows('c_page_links')) : while(have_rows('c_page_links')) : the_row();
              $post_object = get_sub_field('c_page');
              if($post_object) :
                $post = $post_object;
                setup_postdata($post); ?>
                
        <div class="sidebar-link__container">
          <h3 class="sidebar-link__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          <p class="sidebar-link__teaser"><?php the_field('t_teaser'); ?></p>
        </div>
                
        <?php wp_reset_postdata(); // like we were never here
              endif;
            endwhile;
          endif;
        endif; ?>
      
      <a class="sidebar__top" href="#slick-container">&#x25B2; Back to Top</a>  
      </div>
    </section>
    
        <?php endwhile;
        endif; ?>
        
    <section class="sidebar__content-section" id="section0">
      <h2 class="sidebar__content-header">Press Releases</h2>
      <p><em>Want to be the first to know the latest AFSP news? <a href="mailto:aobrien@afsp.org?subject=Add Me to the Press Releases List&body=I'd like to receive the latest news related to suicide prevention from AFSP. Please add me to the list. Thanks!">Click here to be added to our mailing list.</a></em></p>
      
        <?php // WP_Query arguments
        $args = array (
        	'post_type'  => array( 'post' ),
        	'tag'        => 'press-release',
        	'meta_key'	 => 'b_date',
        	'orderby'		 => 'meta_value_num',
        	'order'      => 'DESC',
        );
        
        // The Query
        $press = new WP_Query( $args );
        
        // The Loop
        if ( $press->have_posts() ) : while ( $press->have_posts() ) : $press->the_post(); ?>
        	
        <div class="sidebar-link__container">
          <h4 class="sidebar-link__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
          <p class="sidebar-link__teaser"><?php the_field('t_teaser'); ?></p>
        </div> 
        	
    	  <?php endwhile;
    	  endif;
        
        // Restore original Post Data
        wp_reset_postdata(); ?>
      
    </section>
    
  </div>
  </div>
</section>		

        <?php if(get_field('c_cta_header')) : ?>

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
  		  endif; ?>
  		  
	  </div>
	</div>
</section>
				<?php	endwhile;
				endif; ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/ScrollToPlugin.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
<script>
  jQuery(document).ready(function($) {
    
    $('#slick-sidebar').slicknav({
      prependTo: '#slick-container',
      label: 'View Sections'
    });
    function loadScript() {
      if ($(window).width() >= 768) {
        $.getScript('<?php echo get_template_directory_uri(); ?>/js/sidebar.js');
      }
    }
    loadScript();
    $(window).resize(function() {
      loadScript();
    });
  });
</script>

				<?php get_footer(); ?>