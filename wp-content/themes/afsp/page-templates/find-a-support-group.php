<?php
/**
 * Template Name: Find a Support Group
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' ); ?>
<section class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<section class="container">
			<div class="support-group__content">
				<?php the_field( 'lsc_before' ); ?>
			</div>
		</section>			
		<section class="container support-group__search">
			<?php
			echo apply_filters( 'the_content', '[gmw form="8"]' );
			?>

</section>					
<section class="container">
	<div class="support-group__content">
		<?php the_field( 'lsc_after' ); ?>
	</div>
</section>				
	<?php
	endwhile;
endif;
get_footer(); ?>
