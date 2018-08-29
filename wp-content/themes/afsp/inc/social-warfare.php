<?php

add_filter('sw_analytics' , 'quilt_hash' , 1 );

function quilt_hash($array) {
	if(is_page('digital-memory-quilt')) :
		$array['url'] = 'http://afsp.staging.wpengine.com/find-support/ive-lost-someone/digital-memory-quilt/%23quilt-square-' . get_the_ID();
	endif;
		return $array;
}

remove_filter('sw_analytics', 'sw_google_analytics');
add_filter('sw_analytics', 'afsp_sw_google_analytics');

function afsp_sw_google_analytics( $array ) {
	
	// Fetch the user options
	$options = sw_get_user_options();
	$url = $array['url'];
	$network = $array['network'];
	
	// Disable Analytics forever on the quilt so that deep linking will work correctly
	if(is_page('digital-memory-quilt')) :
		$options['googleAnalytics'] = false;
	endif;
	
	// Check if Analytics have been enabled or not
	if($options['googleAnalytics'] == true):
		$url = $url.urlencode('?utm_source='.$network.'&utm_medium='.$options['analyticsMedium'].'&utm_campaign='.$options['analyticsCampaign'].'');
		return $url;
	else:
		return $url;
	endif;
}
?>