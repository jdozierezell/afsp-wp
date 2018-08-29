<?php
/**
 * Template Name: Landing
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
global $post;
$post_title = get_the_title( $post->ID );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		if ( have_rows( 'fg_features' ) ) :
			$i = 0;
			while ( have_rows( 'fg_features' ) ) :
				the_row();
				$i++;
				$row = get_field( 'fg_features' );
				if ( 1 === $i ) :
					?>
					<section class="splash container">
						<?php
						if ( 'video' === get_sub_field( 'fg_is_image' ) ) :
							$video = get_sub_field( 'fg_video' );
							?>
							<div class="videoEmbed">
								<iframe width="853" height="480" src="<?php echo esc_url( $video ); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						<?php
						else :
							afsp_imgix( 'splash__image', true, 'fg', '100vw', 1532, 768, 768, 768 );
						endif;
						?>
						<h1 class="landing__title"><?php echo esc_html( $post_title ); ?></h1>
					</section>
					<?php
					if ( 'Risk Factors and Warning Signs' === get_the_title() ) :
						$container_size = 'container--small';
					endif;
					$container_class = isset( $container_size ) ? 'container' . $container_size : 'container';
					?>
					<section class="<?php echo esc_attr( $container_class ); ?>">
						<div class="features">
							<h2 class="features__header features__header--solo"><?php esc_html( the_sub_field( 'fg_header' ) ); ?></h2>
							<div class="features__body">
								<?php esc_html( the_sub_field( 'fg_body' ) ); ?>
							</div>
							<?php if ( get_sub_field( 'fg_button' ) ) : ?>
								<a class="features__button" href="<?php echo esc_url( $link ); ?>"><?php esc_html( the_sub_field( 'fg_button' ) ); ?></a>
							<?php endif; ?>
						</div>		  
					</section>
				<?php
				elseif ( $i > 1 ) :
					afsp_features(); // Code for this function exists in inc/features.php.
				endif;
			endwhile;
		endif;
		if ( 'Education' === get_the_title() ) : // Is this the education page ? Show the grid.
			get_template_part( 'template-parts/program-grid' );
		endif;
	endwhile;
endif;
get_footer();
?>
