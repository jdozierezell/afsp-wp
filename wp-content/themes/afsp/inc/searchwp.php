<?php
function my_searchwp_do_shortcode( $do_shortcode, $post_being_indexed, $content_being_indexed, $meta_key_being_indexed ) {
	return true;
}
add_filter( 'searchwp_do_shortcode', 'my_searchwp_do_shortcode', 10, 4 );



function my_searchwp_query_main_join( $sql, $engine ) {
	global $wpdb;
	$my_meta_key = 'sp_search_priority';  // the meta_key you want to order by, meta key for Search Priority
	$sql = $sql . " LEFT JOIN {$wpdb->postmeta} ON {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id AND {$wpdb->postmeta}.meta_key = '{$my_meta_key}'";
	return $sql;
}
add_filter( 'searchwp_query_main_join', 'my_searchwp_query_main_join', 10, 2 );
function my_searchwp_query_orderby( $orderby ) {
	global $wpdb;
	$my_order = "DESC"; // sort in descending order
	// sort by meta_value, then by SearchWP calculated keyword weight, then by post date
	$new_orderby = "ORDER BY {$wpdb->postmeta}.meta_value+0 {$my_order}, " . str_replace( 'ORDER BY', '', $orderby );
	return $new_orderby;
}
add_filter( 'searchwp_query_orderby', 'my_searchwp_query_orderby' );


// remove stopwords
function my_searchwp_stopwords( $terms ) {

    // we DO NOT want to ignore 'first' so remove it from the list of common words
    $words_to_keep = array( 'may' );

    $terms = array_diff( $terms, $words_to_keep );

    return $terms;
}
add_filter( 'searchwp_stopwords', 'my_searchwp_stopwords' );
