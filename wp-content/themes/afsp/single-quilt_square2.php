<?php
/**
 * The template for displaying all chapter pages
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title');
if(have_posts()) : while(have_posts()) : the_post(); 

		$siblings = get_post_siblings('quilt_square', 6, 6);
		$prev_sib = $siblings['prev'];
		$next_sib = $siblings['next']; ?>

		<section class="container previous-quilt-squares">
			<?php for ($i = 1; $i < count($prev_sib); $i++) {
			} ?>
		</section>
		
		<?php $image = get_field('q_square');
		$image_array = wp_get_attachment_image_src($image['id']);
		$src = $image_array[0];
		if($pos = strpos($src, '?') !== false) :
			$src = strstr($src, '?', true);
		endif; ?>
		
		<section class="container current-quilt-square">
			<img src="<?php echo $src; ?>?fit=crop&crop=faces&w=800&h=800" alt="<?php the_title(); ?>" />
			<div class="current-quilt-square-info">
				<h1><?= get_the_title(); ?></h1>
				<p><?= get_field('q_description'); ?></p>
			</div>
		</section>
		
		<section class="container next-quilt-squares"></section>
	
	<?php endwhile;
endif; ?>
<?php get_footer(); ?>