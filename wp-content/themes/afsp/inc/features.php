<?php
/**
 * Determine layout of features section
 *
 * @category AFSP
 * @package  AFSP
 * @author   "Jonathan Dozier-Ezell" <jdozier-ezell@afsp.org>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU Public License
 * @link     https://github.com/jdozierezell/afsp
 * @since    1.0
 */

/**
 * Features section
 *
 * @param string $custom custom class size.
 * @param string $section section class prefix.
 *
 * @return null
 */
function afsp_features( $custom = null, $section = null ) {
	if ( is_front_page() ) :
		$container_size = 'container--large';
	endif;
	$layout   = get_sub_field( 'fg_layout' );
	$is_image = get_sub_field( 'fg_is_image' );
	$image    = get_sub_field( 'fg_image' );
	$svg      = get_sub_field( 'fg_svg' );
	if ( 'internal' === get_sub_field( 'fg_link_type' ) ) :
		$link = get_sub_field( 'fg_button_link' );
	else :
		$link = get_sub_field( 'fg_external_button_link' );
	endif;
	$custom_class = '';
	if ( 'third' === $custom ) :
		$custom_class = 'features--third';
	endif;
	$section_class = '';
	if ( null !== $section ) {
		$section_class = 'sidebar__content-section';
	}
	if ( 'left' === $layout ) :
		$container_section_class = "container $section_class";
		$custom_class            = isset( $custom_class ) ? "features features--left $custom_class" : 'features features--left';
		?>
		<section class="<?php echo esc_attr( $container_section_class ); ?>" id="<?php echo esc_attr( $section ); ?>">
			<div class="<?php echo esc_attr( $custom_class ); ?>">
				<div class="features__image-wrapper">
					<?php
					if ( 'raster' === $is_image ) :
						afsp_imgix( 'features__image features__image--imgix', true, 'fg', '(min-width: 768px100vw) 40vw, 100wv', 768, 768, 768, 512 );
					elseif ( 'external' === $is_image ) :
						?>
						<img class="features__image features__image--square" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php
					elseif ( 'internal' === $is_image ) :
						echo esc_html( $svg );
					endif;
					?>
				</div>    
				<div class="features__cta">
					<h2 class="features__header"><?php esc_html( the_sub_field( 'fg_header' ) ); ?></h2>
					<div class="features__body">
						<?php esc_html( the_sub_field( 'fg_body' ) ); ?>
					</div>
					<?php if ( get_sub_field( 'fg_button' ) ) : ?>
						<a class="features__button" href="<?php echo esc_url( $link ); ?>"><?php esc_html( the_sub_field( 'fg_button' ) ); ?></a>
						<?php endif; ?>
				</div>
			</div>
		</section>
	<?php
	elseif ( 'right' === $layout ) :
		$section_container_class = isset( $container_size ) ? "container $container_size" : 'container';
		$section_container_id    = "$section $section_class";
		?>
		<section class="<?php echo esc_attr( $section_container_class ); ?>" id="<?php echo esc_attr( $section_container_id ); ?>">
			<div class="features features--right">
				<div class="features__image-wrapper">
					<?php
					if ( 'raster' === $is_image ) :
						afsp_imgix( 'features__image features__image--imgix', true, 'fg', '(min-width: 768px) 40vw, 100vw', 768, 768, 768, 512 );
					elseif ( 'external' === $is_image ) :
						?>
						<img class="features__image features__image--square" src="<?php echo esc_attr( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php
					elseif ( 'internal' === $is_image ) :
						echo esc_html( $svg );
					endif;
					?>
				</div>    
				<div class="features__cta">
					<h2 class="features__header"><?php esc_html( the_sub_field( 'fg_header' ) ); ?></h2>
					<div class="features__body">
						<?php esc_html( the_sub_field( 'fg_body' ) ); ?>
					</div>
					<?php if ( get_sub_field( 'fg_button' ) ) : ?>
						<a class="features__button" href="<?php echo esc_attr( $link ); ?>"><?php esc_html( the_sub_field( 'fg_button' ) ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php
	elseif ( 'full' === $layout ) :
		$section_container_id = "$section $section_class";
		?>
		<section class="features features--full" id="<?php echo esc_attr( $section_container_id ); ?>">
			<?php afsp_imgix( 'features__image', true, 'fg', '100vw', 1536, 1094, 768, 1536 ); ?>
			<div class="features__cta">
				<div class="container">
					<h2 class="features__header"><?php the_sub_field( 'fg_header' ); ?></h2>
					<div class="features__body">
						<?php the_sub_field( 'fg_body' ); ?>
					</div>
						<?php if ( get_sub_field( 'fg_button' ) ) : ?>
							<a class="features__button" href="<?php echo esc_html( $link ); ?>"><?php the_sub_field( 'fg_button' ); ?></a>
						<?php endif; ?>
				</div>
			</div>
		</section>
	<?php
	elseif ( 'below' === $layout ) :
		$section_container_class = "container $container_size";
		$section_container_id    = "$section $section_class";
		?>
		<section class="splash container" id="<?php echo esc_attr( $section_container_id ); ?>">
			<?php afsp_imgix( 'splash__image', true, 'fg', '100vw', 1532, 768, 768, 768 ); ?>
		</section>
		<section class="<?php echo esc_attr( $section_container_class ); ?>">
			<div class="features">
				<h2 class="features__header"><?php the_sub_field( 'fg_header' ); ?></h2>
				<div class="features__body"><?php the_sub_field( 'fg_body' ); ?></div>
				<?php if ( get_sub_field( 'fg_button' ) ) : ?>
					<a class="features__button" href="<?php echo esc_attr( $link ); ?>"><?php the_sub_field( 'fg_button' ); ?></a>
				<?php endif; ?>
			</div>		  
		</section>
	<?php
	elseif ( 'none' === $layout ) :
		$section_container_class = "container $container_size";
		$section_container_id    = "$section $section_class";
		?>
		<section class="<?php echo esc_attr( $section_container_class ); ?>" id="<?php echo esc_attr( $section_container_id ); ?>">
			<div class="features">
				<h2 class="features__header features__header--solo"><?php the_sub_field( 'fg_header' ); ?></h2>
				<div class="features__body">
					<?php the_sub_field( 'fg_body' ); ?>
				</div>
				<?php if ( get_sub_field( 'fg_button' ) ) : ?>
					<a class="features__button" href="<?php echo esc_url( $link ); ?>"><?php the_sub_field( 'fg_button' ); ?></a>
				<?php endif; ?>
			</div>		  
		</section>
	<?php
	elseif ( 'background' === $layout ) :
		$section_container_id = "$section $section_class";
		?>
		<section class="features features--full-background" id="<?php echo esc_attr( $section_container_id ); ?>">
			<div class="features__cta">
				<div class="container container--flex">
					<h2 class="features__header"><?php the_sub_field( 'fg_header' ); ?></h2>
					<div class="features__body">
						<?php the_sub_field( 'fg_body' ); ?>
					</div>
					<?php if ( get_sub_field( 'fg_button' ) ) : ?>
					<div class="features__button-wrapper">
						<a class="features__button" href="<?php echo esc_url( $link ); ?>"><?php the_sub_field( 'fg_button' ); ?></a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>

	<?php
	endif;
}
?>
