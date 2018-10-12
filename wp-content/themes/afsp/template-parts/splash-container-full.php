<?php
/**
 * The splash image container for our theme.
 *
 * This is the template part that displays the splash container
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

?>
<section class="splash container-full" role="region" aria-label="page media (image or video) and title">
	<?php
	$display = get_field( 'si_image_video' );
	if ( 'youtube' === $display || 'vimeo' === $display ) :
		$video     = 'youtube' === $display ? get_field( 'si_youtube' ) : get_field( 'si_vimeo' );
		$video_url = $video . '?rel=0&amp;showinfo=0';
		?>
		<div class="videoEmbed">
			<iframe width="853" height="480" src="<?php echo esc_url( $video_url ); ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?php
	elseif ( 'images' === $display ) :
		if ( 'internal' === get_field( 'si_link_image' ) ) :
			$image_link = get_field( 'si_featured_image_internal' );
		elseif ( 'external' === get_field( 'si_link_image' ) ) :
			$image_link = get_field( 'si_featured_image_external' );
		endif;
		if ( 'no' !== get_field( 'si_featured_image' ) && isset( $image_link ) ) :
		?>
			<a href="<?php echo esc_url( $image_link ); ?>" target="_blank">
		<?php
		endif;
		if ( have_rows( 'si_all_images' ) ) :
		?>
				<div id="splash-carousel" class="gallery js-flickity splash__image" data-flickity-options='{ "contain": true, "wrapAround": true, "pageDots": false, "autoPlay": true }'>
			<?php
			while ( have_rows( 'si_all_images' ) ) :
				the_row();
				?>
					<div class="gallery-cell gallery-cell__full">
						<?php afsp_imgix( 'splash__image', true, 'si_one', '100vw', 1532, 768, 768, 768 ); ?>
					</div>    
			<?php endwhile; ?>
				</div>
		<?php
		endif;
	else :
		if ( 'internal' === get_field( 'si_link_image' ) ) :
			$image_link = get_field( 'si_featured_image_internal' );
		elseif ( 'external' === get_field( 'si_link_image' ) ) :
			$image_link = get_field( 'si_featured_image_external' );
		endif;
		if ( 'no' !== get_field( 'si_featured_image' ) && isset( $image_link ) ) :
		?>
			<a href="<?php echo esc_url( $image_link ); ?>" target="_blank">
		<?php
		endif;
		afsp_imgix( 'splash__image', false, 'si', '100vw', 1532, 768, 768, 768 );
	endif;
	if ( 'no' !== get_field( 'si_featured_image' ) && isset( $image_link ) ) :
	?>
			</a>
	<?php endif; ?>
</section>
