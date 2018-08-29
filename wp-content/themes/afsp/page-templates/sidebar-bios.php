<?php
/**
 * Template Name: Sidebar Bios
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post();
				  get_template_part('template-parts/splash-container'); ?>
			
<section class="container">
  <div class="sidebar">
  <div class="sidebar__nav-container" id="slick-container">
    <nav class="sidebar__nav" id="slick-sidebar">
      
        <?php if(have_rows('sb_bios')) : 
          $counter = 0;
          while(have_rows('sb_bios')) : the_row(); $counter++; ?>
      
       <a class="sidebar__nav-item" id="anchor<?php echo $counter - 1; ?>" href="#section<?php echo $counter - 1; ?>"><?php the_sub_field('sb_name'); ?></a>
       
        <?php endwhile;
        endif; ?>
       
    </nav>
  </div>
  <div class="sidebar__content">
    
        <?php if(have_rows('sb_bios')) :
          $counter = 0;
          while(have_rows('sb_bios')) : the_row(); $counter++; ?>
    
    <section class="sidebar__content-section <?php echo $flex; ?>" id="section<?php echo $counter - 1; ?>">
      <h2 class="sidebar__content-header"><?php the_sub_field('sb_name'); ?></h2>
      <div class="sidebar__content-wrapper">

        <?php echo afsp_imgix( 'sidebar__content-image', true, 'bio', '(min-width:768px) 10vw, 100vw', 768, 768, '', '');  ?>
        
      <div class="sidebar__content-text">
        
        <?php echo apply_filters('the_content', get_sub_field('sb_content')); ?>
      
      </div>
      <a class="sidebar__top" href="#slick-container">&#x25B2; Back to Top</a>  
      </div>
    </section>
    
        <?php endwhile;
        endif; ?>
    
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