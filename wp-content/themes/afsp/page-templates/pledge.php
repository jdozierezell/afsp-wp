<?php
/**
 * Template Name: Pledge
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title');
				if(have_posts()) : while(have_posts()) : the_post();
					$background_image = get_field('p_background');
					// to get a clearer idea of what's happening here, look at inc/imgix.php
					$background_image = wp_get_attachment_image_src($background_image['id']);
					$background_image = $background_image[0];
					$background_image = str_replace('http://', 'https://', $background_image);
					if($pos = strpos($background_image, '?') !== false) :
						$background_image = strstr($background_image, '?', true);
					endif; ?>

<section class="pledge" style="background: url(<?php echo $background_image; ?>?w=1400) no-repeat center right fixed; background-size: cover;">
	<div class="pledge__content">
		<h1 class="pledge__title"><?php the_title(); ?></h1>

				<?php the_content(); ?>

	</div>
	<div class="pledge__form">

				<?php echo afsp_imgix('pledge__image', false, 'p', '100vw', 768, 768, '', ''); ?>

		<h2>Sign the Pledge</h2>

				<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=false]');
				// echo do_shortcode('[emailpetition id="' . get_field('p_shortcode') . '"]');
				$gravity_form_id = 1;
				$entry_count = 0;
				$entries = GFAPI::get_entries($gravity_form_id,'','','',$entry_count);
				$entry_total = count($entries);
				$entry_counter = 0;
				$entries_to_display = 20; ?>

		<h3>Share the Pledge</h3>
		<div class="pledge__share">
			<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//afsp.org/campaigns/national-suicide-prevention-week-2016/lets-have-a-conversation/" target="_blank">Facebook</a>
			<a href="https://twitter.com/intent/tweet?text=Be%20the%20voice%20to%20%23StopSuicide%20by%20taking%20%40afspnational's%20Talk%20Saves%20Pledge.%20I%20did!%20https%3A//afsp.org/campaigns/national-suicide-prevention-week-2016/lets-have-a-conversation/" target="_blank">Twitter</a>
		</div>
		<h3>The Latest Signatures</h3>
		<ul class="pledge__signatures">

				<?php foreach($entries as $entry) : 
					if ($entry_counter >= $entries_to_display) break;
					echo '<li>' . $entry_count . '. ' . $entry['3.3'] . ' ' . $entry['3.6'][0] . '.</li>';
					$entry_count--;
					$entry_counter++;
				endforeach;
				echo '</ul>'; ?>

	</div>
</section>

				<?php endwhile;
				endif; ?>

<script>
		jQuery('.modal__overlay').on('click', function(){
			jQuery('.modal__overlay, .modal').css('display','none');
		});
</script>

				<?php get_footer(); ?>