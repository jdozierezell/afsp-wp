<?php
/**
 * Template Name: New Support Group
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

			<?php acf_form(array(
				'post_id'		=> 'new_post',
				'new_post'		=> array(
					'post_type'		=> 'support_group',
					'post_status'		=> 'draft'
				),
				'post_title' => true,
				'submit_value'		=> 'Submit your support group',
				'updated_message' => 'Thank you. Your group has been submitted for review and will be available publicly shortly. For questions or concerns, please contact <a href="mailto:sdonnick@afsp.org">sdonnick@afsp.org</a>.'
			)); ?>

		<?php endwhile; ?>

	</div><!-- #content -->
</div><!-- #primary -->

				<?php get_footer(); ?>