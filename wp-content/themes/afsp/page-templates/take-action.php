<?php
/**
 * Template Name: Take Action
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>		
		<section class="splash container">
			<?php afsp_imgix( 'splash__image', false, 'sicta', '100vw', 1532, 768, 768, 768 ); ?>
			<div class="splash__cta">
				<?php
				if ( get_field( 'sicta_call_to_action' ) ) :
				?>
					<h2 class="splash__action"><?php the_field( 'sicta_call_to_action' ); ?></h2>
				<?php
				endif;
				if ( 'internal' === get_field( 'sicta_link_type' ) ) :
					$link = get_field( 'sicta_internal_link' );
				else :
					$link = get_field( 'sicta_external_link' );
				endif;
				?>
				<a class="features__button" href="<?php echo esc_url( $link ); ?>"><?php the_field( 'sicta_call_to_action_button' ); ?></a>
			</div>
			<h1 class="landing__title container"><?php the_title(); ?></h1>
		</section>
		<?php
		get_template_part( 'template-parts/icon-features' );
	endwhile;
endif;
get_footer();
?>
