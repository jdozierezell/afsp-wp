<?php
/**
 * Template Name: File Display
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<div class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</div>
				
				<?php	if(have_posts()) : while(have_posts()) : the_post(); ?>
				
<section class="file__selected container">
	<img id="selected" class="file__selected-image" src="" />
	<a id="download-image" class="file__link" download href="">Download image for social sharing</a>
	<a id="download-pdf" class="file__link" href="">Download PDF (two-sided)</a>
</section>				
<section class="file__display container">
	<div class="file__intro"><?php the_content(); ?></div>
				
				<?php if(have_rows('ff_files')) : while(have_rows('ff_files')) : the_row(); 
				$file_name = get_sub_field('ff_file_name');
				$file_name = preg_replace("/[\s]/", "-", $file_name);
				?>
					
<a class="file" data-state="<?php echo $file_name; ?>" data-link="<?php the_sub_field('ff_file'); ?>">
	<img src="<?php the_sub_field('ff_display_image'); ?>" />
	<p class="file__name">Click to view<br/><?php the_sub_field('ff_file_name'); ?></p>
</a>
					
				<?php endwhile;
						endif; ?>
						
</section>
<div class="container">
	<hr />
	<button id="state-button" class="features__button states__button">Hide all states</button>
</div>
						
				<?php	endwhile;
				endif; ?>

<script>
	jQuery(document).ready(function($) {
		var hash = window.location.hash.substr(1);
		if (hash !== '') {
			console.log(hash);
			$('#selected').attr('src', $('a[data-state="' + hash + '"]').children('img').attr('src'));
			$('#download-image').attr('href', $('a[data-state="' + hash + '"]').children('img').attr('src'));
			$('#download-pdf').attr('href', $('a[data-state="' + hash + '"]').data('link'));
			$('.file__display').hide();
			$('#state-button').text('View all states');
		}
		var selected = function() {
			if ($('#selected').attr('src') == '') {
				$('#selected').parent().addClass('file__selected--hidden');
				console.log('src empty');
			} else {
				$('#selected').parent().removeClass('file__selected--hidden');
				console.log('src nonempty');
			}	
		};
		selected();
		$('.file').on('click', function(event) {
			event.preventDefault();
			var state = $(this).data('state');
			var link = $(this).data('link');
			var image = $(this).children('img').attr('src');
			$('#selected').attr('src', image);
			selected();
			$('#download-image').attr('href', image);
			$('#download-pdf').attr('href', link);
			if ($(window).scrollTop() !== $('#selected').scrollTop() || $('#selected').scrollTop() === 0) {
				$('html, body').animate({
					scrollTop: $('#selected').offset().top
					}, 500);
			} else {
				$('#selected').get(0).scrollIntoView();
			}
			window.location = window.location.href.split('#')[0] + '#' + state;
		})
		$('#state-button').on('click', function(e){
			e.preventDefault();
			$('.file__display').toggle('slow');
			if($(this).text() == 'View all states') {
				$(this).text('Hide all states');
			} else if($(this).text('Hide all states')) {
				$(this).text('View all states');
			}
		});
	});
</script>

				<?php get_footer(); ?>