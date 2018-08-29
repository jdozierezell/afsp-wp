<?php
/**
 * Template Name: May Mental Health
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title');

				get_template_part('template-parts/helpers/image-url');

				if(have_posts()) : while(have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/splash-container'); ?>

<main class="may">

	<section class="container highlight-intro">

					<?php the_content(); ?>

	</section>

					<?php get_template_part('template-parts/highlight-pages'); ?>

	<section class="container highlight-intro">

					<?= get_field('vd_video_text'); ?>

	</section>

				<?php if(get_field('vd_signup') === 'yes') :
					get_template_part('template-parts/mailchimp');
				endif; ?>

				<?php get_template_part('template-parts/video-display'); ?>
				<?php get_template_part('template-parts/video-highlight-pages'); ?>

</main>

				<?php endwhile; ?>
				<?php endif; ?>

				<?php get_footer(); ?>
