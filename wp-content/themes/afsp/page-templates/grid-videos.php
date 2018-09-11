<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part( 'template-parts/title' );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<?php
    endwhile;
endif;
get_footer();
?>