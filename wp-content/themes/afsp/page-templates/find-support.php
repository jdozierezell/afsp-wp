<?php
/**
 * Template Name: Find Support
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/splash-container' );
		get_template_part( 'template-parts/icon-features' );
	endwhile;
endif;
get_footer();
