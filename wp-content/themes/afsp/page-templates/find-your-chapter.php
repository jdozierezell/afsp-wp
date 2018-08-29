<?php
/**
 * Template Name: Find Your Chapter
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>
<section class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<section class="container">
			<?php echo do_shortcode( '[gmw form="7"]' ); ?>
		</section>
		<section class="container">
			<?php the_content(); ?>
		</section>				
	<?php
	endwhile;
endif;
get_footer();
?>
