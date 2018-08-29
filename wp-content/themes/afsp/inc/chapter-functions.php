<?php

function afsp_no_media_link() {
	// Set default values for the upload media box
	update_option('image_default_link_type', 'none' );
	update_option('image_default_size', 'large' );

}
add_action('after_setup_theme', 'afsp_no_media_link');

function afsp_remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter( 'post_thumbnail_html', 'afsp_remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'afsp_remove_width_attribute', 10 );

function afsp_allow_style_tags($options) {
	if(!isset($options['extended_valid_elements'])) {
		$options['extended_valid_elements'] = 'style';
	} else {
		$options['extended_valid_elements'] .= ',style';
	}
	return $options;
}
add_filter('tiny_mce_before_edit', 'afsp_allow_style_tags');
?>