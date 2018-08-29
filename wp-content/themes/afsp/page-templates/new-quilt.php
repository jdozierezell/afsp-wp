<?php
/**
 * Template Name: New Quilt Square
 *
 * @package afsp
 */

				acf_form_head();
				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<div id="primary" class="container">
	<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<h1 class="landing__title container"><?php the_title(); ?></h1>
		
		<?php the_content(); ?>

			<?php acf_form(array(
				'post_id'		=> 'new_post',
				'new_post'		=> array(
					'post_type'		=> 'quilt_square',
					'post_status'		=> 'draft'
				),
				'post_title' => true,
				'submit_value'		=> 'Submit your quilt square',
				'return' => 'http://afsp.org/find-support/ive-lost-someone/digital-memory-quilt/thank-creating-quilt-square/'
			)); ?>

		<?php endwhile; ?>

	</div><!-- #content -->
</div><!-- #primary -->
<script type="text/javascript">
	var title = document.getElementsByTagName('label');
  title[1].innerHTML = "Quilt Square Title or Name of Person Lost";
</script>

				<?php get_footer(); ?>