<!-- Begin Featured Pages -->

				<?php if(have_rows('hp_featured_pages')) :
        $rows = have_rows('hp_featured_pages');
				$counter = 0;
        $row_count = count($rows);
        $row_class = '';
        if($row_count % 4 === 0) :
          $row_class = 4;
        elseif($row_count % 3 == 0) :
          $row_class = 3;
        elseif($row_count % 2 == 0) :
          $row_class = 2;
        endif;
        var_dump($row_class);
        var_dump($row_class);
         ?>
<section class="container featured-pages">
	<h2 class="featured-pages__title">Discover AFSP</h2>
				
				<?php while(have_rows('hp_featured_pages')) : the_row();
						if($counter < 3) :
							$delay = $counter/4;
						else :
							$delay = $counter/4 - 0.5;
						endif; ?>

		<div class="featured-pages--wrapper">

				<?php	if(get_row_layout() == 'hp_internal') : 
							$post_id = get_sub_field('hp_internal_page', false, false);
							$image = image_url('hp_featured_internal_page_image', 1);
							$title = get_sub_field('hp_featured_internal_title');
							if($post_id) : ?>
							
			<a class="wow fadeInUp featured__<?php echo $row_class; ?>" data-wow-delay="<?php echo $delay; ?>s" href="<?php echo get_the_permalink($post_id); ?>" style="background-image:url('<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces'), linear-gradient(to bottom, transparent 50%, #2f3539)">
				<p>

				<?php 	if($title != '') :
									echo $title;
								else :
									echo get_the_title($post_id);
								endif; ?>

				</p>
			</a>

				<?php	endif;
						elseif(get_row_layout() == 'hp_external') :
							$url = get_sub_field('hp_external_page');
							$image = image_url('hp_external_page_image', 1);
							$title = get_sub_field('hp_external_page_title');
							if($url) : ?>
							
			<a class="wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s" href="<?php echo $url; ?>" style="background-image:url('<?php echo $image; ?>?w=768&h=768&fit=crop&crop=faces'), linear-gradient(to bottom, transparent 50%, #2f3539)">
				<p><?php echo $title; ?></p>
			</a>

				<?php endif;
						endif; ?>

		</div>

				<?php $counter++;
				endwhile; ?>

	</section>

				<?php endif; ?>

<!-- End Featured Pages -->