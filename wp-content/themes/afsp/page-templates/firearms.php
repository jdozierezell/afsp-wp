<?php
/**
 * Template Name: Firearms
 *
 * @package afsp
 */
				get_header(); 
				get_template_part('template-parts/title'); ?>

<section class="firearm__wrapper">

				<?php afsp_imgix('firearm__image', false, 'si', '100vw', 2304, 768, 768, 768); ?>

	<h1 class="firearm__title"><?php the_title(); ?></h1>
</section>
<section class="firearm__content container">
	<h2 class="firearm__header"><?php the_field('f_header'); ?></h2>

	<?php the_field('f_content'); ?>

</section>
<section class="container">
	<h2 class="firearm__learn">Learn More</h2>

				<?php if(have_rows('lo_lost_link')) : ?>

	<div class="firearm__links">    
        
        <?php while(have_rows('lo_lost_link')) : the_row(); 
                if(get_sub_field('lo_link_type') == 'internal') :
                  $link = get_sub_field('lo_page_link');
                else :
                  $link = get_sub_field('lo_external_page_link');
                endif; ?>
    
    <a class="firearm__link" href="<?php echo $link; ?>">
						
				<?php afsp_imgix('firearm__link-image', true, 'lo', '100vw', 768, 768, '', ''); ?>

		<h3 class="firearm__link-text"><?php the_sub_field('lo_link_text'); ?></h3>
    </a>
    
        <?php endwhile; ?>
        
  </div>   
        
        <?php endif; ?>

</section>

				<?php get_footer(); 	?>