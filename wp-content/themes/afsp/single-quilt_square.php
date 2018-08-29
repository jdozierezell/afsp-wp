<?php
/**
 * The template for displaying all chapter pages
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title');
if(have_posts()) : while(have_posts()) : the_post(); 
global $wpdb, $post;
$current_post = $post;

$p = $wpdb->get_results( "
	(
		SELECT
			*
		FROM
			$wpdb->posts p1
		WHERE
			p1.post_date > '$post->post_date' AND
			p1.post_type = 'quilt_square' AND
			p1.post_status = 'publish'
		ORDER by
			p1.post_date DESC
		LIMIT
			6
	)" );

if (count($p) === 6) : ?>

	<section class="quilt__gallery2">
		<?php	for ($i = 1; $i <= 6; $i++) {
			$post = get_next_post();
			setup_postdata($post); 
			$image = get_field('q_square');
			$image_array = wp_get_attachment_image_src($image['id']);
			$src = $image_array[0];
			if($pos = strpos($src, '?') !== false) :
				$src = strstr($src, '?', true);
			endif;?>
			<div class="quilt__square">               
				<a class="quilt__link" href="<?= get_the_permalink(); ?>">
					<img src="<?= $src; ?>?fit=crop&amp;crop=faces&amp;w=400&amp;h=400" alt="Jordan Loriss">
						<h3 class="quilt__square-title"><?= get_the_title(); ?></h3>
				</a>
    	</div>
		<?php }
		$post = $current_post; ?>
	</section>
		
<?php endif;
	$image = get_field('q_square');
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
			<?= do_shortcode('[social_warfare]'); ?>
		</div>
	</section>
		
	<section class="quilt__gallery2">
	<?php	for ($i = 1; $i <= 6; $i++) {
		$post = get_previous_post();
		setup_postdata($post); 
		$image = get_field('q_square');
		$image_array = wp_get_attachment_image_src($image['id']);
		$src = $image_array[0];
		if($pos = strpos($src, '?') !== false) :
			$src = strstr($src, '?', true);
		endif;?>
		<div class="quilt__square">               
			<a class="quilt__link" href="<?= get_the_permalink(); ?>">
				<img src="<?= $src; ?>?fit=crop&amp;crop=faces&amp;w=400&amp;h=400" alt="Jordan Loriss">
					<h3 class="quilt__square-title"><?= get_the_title(); ?></h3>
			</a>
		</div>
	<?php }
	$post = $current_post; ?>
</section>
	
	<?php endwhile;
endif; ?>
<?php get_footer(); ?>