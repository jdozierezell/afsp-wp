<?php
/**
 * Template Name: Grant
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>
				
<section class="grant container">
  
        <?php if(get_field('g_image')) :
              echo afsp_imgix( 'grant__image', false, 'g', '(min-width:768px) 10vw, 100vw', 768, 768, '', ''); 
            else : ?>
             
  <img class="grant__image" src="http://placehold.it/768/fc4c02/ffffff?text=Image+Coming+Soon" /> 
              
        <?php endif;
            if(have_rows('g_grantees')) : ?>

  <div class="grant__info">
    <h1 class="grant__title"><?php the_title(); ?></h1>
    
        <?php while(have_rows('g_grantees')) : the_row(); ?>
    
    <h2 class="grant__grantee"><?php the_sub_field('g_grantee'); ?>, <?php the_sub_field('g_institution'); ?></h2>
    
        <?php if(get_field('g_mentor')) : ?>
        
    <h3 class="grant__type"><strong>Mentor:</strong> <?php the_field('g_mentor'); ?></h3>
    
        <?php endif; ?>
  
        <?php endwhile;
            endif; 
            $amount = get_field('g_amount'); 
            $type_field = get_field_object('g_type');
        $type_field = get_field_object('g_type');
        $type = $type_field['choices'][get_field('g_type')]; ?>
    <h3 class="grant__type"><?php the_field('g_year'); ?> <?php echo $type; ?></h3>
    <h3 class="grant__type"><?php echo 'USD $' . number_format($amount); ?></h3>
    
  </div>
</section>
<section class="sidebar container">
  <div class="sidebar__nav-container" id="slick-container">
    <nav class="sidebar__nav" id="slick-sidebar">
      
        <?php if(have_rows('c_content')) : 
          $counter = 0;
          $number = count(get_field('c_content'));
          if($number >= 2) :
            while(have_rows('c_content')) : the_row(); $counter++; ?>
      
       <a class="sidebar__nav-item" id="anchor<?php echo $counter - 1; ?>" href="#section<?php echo $counter - 1; ?>"><?php the_sub_field('c_content_header'); ?></a>
       
        <?php endwhile;
          endif;
        endif; ?>
       
    </nav>
  </div>
  <div class="grant-sidebar__content">
    
        <?php if(have_rows('c_content')) :
          $counter = 0;
          while(have_rows('c_content')) : the_row(); $counter++;
          if (get_sub_field('c_is_flex') == true) :
            $flex = 'flex';
          endif; ?>
    
    <section class="sidebar__content-section <?php echo $flex; ?>" id="section<?php echo $counter - 1; ?>">
      <h2 class="sidebar__content-header"><?php the_sub_field('c_content_header'); ?></h2>
      <div><?php the_sub_field('c_content_section'); ?></div>
    </section>
    
        <?php endwhile;
        endif; ?>
    
  </div>
</section>	
  <!--<div class="grant__content"><?php // the_content(); ?></div>-->
				

			<?php endwhile;
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
        $.getScript('<?php echo get_template_directory_uri(); ?>/js/sidebar_grants.js');
      }
    }
    loadScript();
    $(window).resize(function() {
      loadScript();
    });
  });
</script>

				<?php get_footer(); ?>