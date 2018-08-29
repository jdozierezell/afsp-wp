<?php
/**
 * The imgix function for the theme.
 *
 * This is the imgix function that allows imgix images to be added via ACF
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

/**
 * Imgix function for afsp.org
 *
 * @param string  $class    Name of the img class.
 * @param boolean $subfield Whether or not the $prefix represents a subfield in ACF.
 * @param string  $prefix   Prefix to the image field in ACF.
 * @param string  $sizes    Attribute to determine sizes of the image.
 * @param integer $w1       First width attribute for srcet.
 * @param integer $h1       First height attribute for srcet.
 * @param integer $w2       Second width attribute for srcet.
 * @param integer $h2       Second height attribute for srcet.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return void
 */
function afsp_imgix( $class, $subfield, $prefix, $sizes, $w1, $h1, $w2 = 0, $h2 = 0 ) {
	if ( isset( $_SERVER['REQUEST_URI'] ) ) : // Input var okay.
		$uri = esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ); // Input var okay.
	endif;
	$image        = '';
	$mobile_image = '';
	$imgix1       = '';
	$imgix2       = '';
	if ( true === $subfield ) :
		if ( '/lifesaver-news/' === $uri && true === get_sub_field( $prefix . '_separate_image' ) ) :
			$image = get_sub_field( $prefix . '_mobile_image' );
		else :
			$image = get_sub_field( $prefix . '_image' );
		endif;
		$mobile_image = get_sub_field( $prefix . '_mobile_image' );
		$crop         = get_sub_field( $prefix . '_crop' );
		$fit          = get_sub_field( $prefix . '_fit' );
		$face_index   = get_sub_field( $prefix . '_face_index' );
		$face_pad     = get_sub_field( $prefix . '_face_pad' );
	else :
		if ( '/lifesaver-news/' === $uri && true === get_field( $prefix . '_separate_image' ) ) :
			$image = get_field( $prefix . '_mobile_image' );
		else :
			$image = get_field( $prefix . '_image' );
		endif;
		$mobile_image = get_field( $prefix . '_mobile_image' );
		$crop         = get_field( $prefix . '_crop' );
		$fit          = get_field( $prefix . '_fit' );
		$face_index   = get_field( $prefix . '_face_index' );
		$face_pad     = get_field( $prefix . '_face_pad' );
	endif;
	$image_array = wp_get_attachment_image_src( $image['id'] );
	$src         = $image_array[0];
	// if the page is loaded over ssl, we need to add the secure protocol to the source url.
	$src = str_replace( 'http://', 'https://', $src );
	$pos = strpos( $src, '?' );
	if ( false !== $pos ) :
		$src = strstr( $src, '?', true );
	endif;
	if ( $mobile_image ) :
		$mobile_image_array = wp_get_attachment_image_src( $mobile_image['id'] );
		$mobile_src         = $mobile_image_array[0];
		// if the page is loaded over ssl, we need to add the secure protocol to the source url.
		$mobile_src = str_replace( 'http://', 'https://', $mobile_src );
		$mobile_pos = strpos( $mobile_src, '?' );
		if ( false !== $mobile_pos ) :
			$mobile_src = strstr( $mobile_src, '?', true );
		endif;
	endif;
	$imgix1 = $src . '?';
	if ( $crop ) :
		$imgix1 .= '&crop=' . $crop;
	endif;
	if ( $fit ) :
		$imgix1 .= '&fit=' . $fit;
	endif;
	if ( $face_index ) :
		$imgix1 .= '&faceindex=' . $face_index;
	endif;
	if ( $face_pad ) :
		$imgix1 .= '&facepad=' . $face_pad;
	endif;
	$imgix11 = $imgix1 . '&w=' . floor( $w1 ) . '&h=' . floor( $h1 );
	$imgix12 = $imgix1 . '&w=' . floor( $w1 / 2 ) . '&h=' . floor( $h1 / 2 );
	$imgix13 = $imgix1 . '&w=' . floor( $w1 / 3 ) . '&h=' . floor( $h1 / 3 );
	$imgix14 = $imgix1 . '&w=' . floor( $w1 / 4 ) . '&h=' . floor( $h1 / 4 );
	if ( 0 !== $w2 ) :
		if ( $mobile_image ) :
			$imgix2 = $mobile_src;
		else :
			$imgix2 = $src;
		endif;
		$imgix2 = $imgix2 . '?';
		if ( $crop ) :
			$imgix2 .= '&crop=' . $crop;
		endif;
		if ( $fit ) :
			$imgix2 .= '&fit=' . $fit;
		endif;
		if ( $face_index ) :
			$imgix2 .= '&faceindex=' . $face_index;
		endif;
		if ( $face_pad ) :
			$imgix2 .= '&facepad=' . $face_pad;
		endif;
		$imgix21 = $imgix2 . '&w=' . floor( $w2 ) . '&h=' . floor( $h2 );
		$imgix22 = $imgix2 . '&w=' . floor( $w2 / 2 ) . '&h=' . floor( $h2 / 2 );
		$imgix23 = $imgix2 . '&w=' . floor( $w2 / 3 ) . '&h=' . floor( $h2 / 3 );
		$imgix24 = $imgix2 . '&w=' . floor( $w2 / 4 ) . '&h=' . floor( $h2 / 4 );
	endif;

	if ( 0 !== $w2 ) :
		$srcset_1 = $imgix11 . ' ' . floor( $w1 ) . 'w, ' . $imgix12 . ' ' . floor( $w1 / 2 ) . 'w, ' . $imgix13 . ' ' . floor( $w1 / 3 ) . 'w, ' . $imgix14 . ' ' . floor( $w1 / 4 ) . 'w';
		$srcset_2 = $imgix21 . ' ' . floor( $w2 ) . 'w, ' . $imgix22 . ' ' . floor( $w2 / 2 ) . 'w, ' . $imgix23 . ' ' . floor( $w2 / 3 ) . 'w, ' . $imgix24 . ' ' . floor( $w2 / 4 ) . 'w';
		echo '<picture class="' . esc_attr( $class ) . '">';
		echo '<source class="imgix-fluid"  media="(min-width: 768px)" srcset="' . esc_attr( $srcset_1 ) . '">';
		echo '<source class="imgix-fluid" srcset="' . esc_attr( $srcset_2 ) . '">';
		echo '<img src="' . esc_attr( $imgix11 ) . '" class="imgix-fluid" alt="' . esc_attr( $image['alt'] ) . '" sizes="' . esc_attr( $sizes ) . '" />';
		echo '</picture>';
	else :
		$srcset_1 = $imgix11 . ' ' . floor( $w1 ) . 'w, ' . $imgix12 . ' ' . floor( $w1 / 2 ) . 'w, ' . $imgix13 . ' ' . floor( $w1 / 3 ) . 'w, ' . $imgix14 . ' ' . floor( $w1 / 4 ) . 'w';
		echo '<img src="' . esc_attr( $imgix11 ) . '" srcset="' . esc_attr( $srcset_1 ) . '" class="imgix-fluid ' . esc_attr( $class ) . '" alt="' . esc_attr( $image['alt'] ) . '" sizes="' . esc_attr( $sizes ) . '" />';
	endif;
}
