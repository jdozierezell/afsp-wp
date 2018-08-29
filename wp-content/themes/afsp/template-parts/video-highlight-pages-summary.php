<!-- Begin Featured Pages -->

        <?php if(have_rows('vd_video_highlights_hp_featured_pages')) : ?>
					
<section class="container highlight-pages-summary">

				<?php if(get_field('vd_video_highlights_hp_title') != '') : ?>

	<h2 class="highlight-pages__title"><?php the_field('vd_video_highlights_hp_title'); ?></h2>

				<?php endif; ?>
				
				<?php while(have_rows('vd_video_highlights_hp_featured_pages')) : the_row();
						if($counter < 3) :
							$delay = $counter/4;
						else :
							$delay = $counter/4 - 0.5;
						endif; ?>

		<div class="highlight-pages-summary--wrapper">

				<?php	if(get_row_layout() == 'hp_internal') : 
							$post_id = get_sub_field('hp_internal_page', false, false);
							$image = image_url('hp_featured_internal_page_image', 1);
							$title = get_sub_field('hp_featured_internal_title');
              $desc = get_sub_field('hp_featured_internal_description');
							if($post_id) : ?>

      <img class="image" src="<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces" alt="">
      <div class="page-summary">
        <h3>

        <?php 	if($title != '') :
                  echo $title;
                else :
                  echo get_the_title($post_id);
                endif; ?>

        </h3>
        <?php echo $desc; ?>
        <a class="features__button" href="<?php echo get_the_permalink($post_id); ?>">Learn More</a>  
      </div>

				<?php	endif;
						elseif(get_row_layout() == 'hp_external') :
							$url = get_sub_field('hp_external_page');
							$image = image_url('hp_external_page_image', 1);
							$title = get_sub_field('hp_external_page_title');
              $desc = get_sub_field('hp_featured_external_description');
							if($url) : ?>
              
      <img class="image" src="<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces" alt="">
      <div class="page-summary">
        <h3><?php echo $title; ?></h3>
        <?php echo $desc; ?>
        <a class="features__button" href="<?php echo $url; ?>">Learn More</a>
      </div>

				<?php endif;
						endif; ?>

		</div>

				<?php $counter++;
				endwhile; ?>

	</section>

				<?php endif; ?>

<!-- End Featured Pages -->