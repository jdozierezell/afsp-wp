<?php
/**
 * Template Name: ISP
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				
				if(have_posts()) : while(have_posts()) : the_post();
				
				?>

			<?php if(have_rows('fg_features')) : $i = 0; 
				while(have_rows('fg_features')) : the_row(); $i++;
					$row = get_field('fg_features');
					if ($i == 1) : ?>

<section class="splash container">
        
  	  <?php afsp_imgix('splash__image', true, 'fg', '100vw', 1532, 768, 768, 768); ?>
  	   
</section>
<section class="program-feature container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
	<h2 class="program-feature__header"><?php the_sub_field('fg_header'); ?></h2>
	<div class="program-feature__body"><?php the_sub_field('fg_body'); ?></div>
  		  
  		<?php if(get_sub_field('fg_button')) : ?>
  		  
		<a class="features__button" href="<?php echo $link ?>"><?php the_sub_field('fg_button'); ?></a>
  		
  		<?php endif; ?>
  		  
</section>

				<?php	endif;
				endwhile;
			endif; ?>

<section class="isp container">
	<img class="isp__image" src="http://afsp.staging.wpengine.com/wp-content/uploads/2015/10/howISPworks.png" />
	<img class="isp__image" src="http://afsp.staging.wpengine.com/wp-content/uploads/2015/10/connection.png" />
	<img class="isp__image" src="http://afsp.staging.wpengine.com/wp-content/uploads/2015/10/engagement.png" />
	<img class="isp__image" src="http://afsp.staging.wpengine.com/wp-content/uploads/2015/10/treatment.png" />
</section>

				<?php if(have_rows('fg_features')) : $i = 0; 
					while(have_rows('fg_features')) : the_row(); $i++;
						$row = get_field('fg_features');
						if ($i > 1) :
							afsp_features(); // Code for this function exists in inc/features.php
						endif;
					endwhile;
				endif; 
			endwhile;
		endif; ?>

				<?php get_footer(); ?>