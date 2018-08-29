<?php
/**
 * Function that truncates long titles.
 *
 * This is the function that truncates titles that are longer than their space allows.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

?>
<?php
/**
 * This lovely snippet of code comes from https://wordpress.org/support/topic/substr-still-echoing-whole-string-help
 *
 * @param string  $link_string String to be linked.
 * @param string  $link Link.
 * @param integer $characters Number of characters to display.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string The truncated title with link.
 */
function filter_shorten_linktext( $link_string, $link, $characters = 25 ) {
	$characters = $characters;
	preg_match( '/<a.*?>(.*?)<\/a>/is', $link_string, $matches );
	if ( isset( $matches[1] ) ) :
		$displayed_title = $matches[1];
		$new_title       = shorten_with_ellipsis( $displayed_title, $characters );
		return str_replace( '>' . $displayed_title . '<', '>' . $new_title . '<', $link_string );
	endif;
}

/**
 * Shorten the input and add an elipsis at the end.
 *
 * @param string  $input_string String to be linked.
 * @param integer $characters Number of characters to display.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string The truncated title with link.
 */
function shorten_with_ellipsis( $input_string, $characters ) {
	return ( strlen( $input_string ) >= $characters ) ? substr( $input_string, 0, ( $characters - 3 ) ) . '...' : $input_string;
}



// This adds filters to the next and previous links, using the above functions
// to shorten the text displayed in the post-navigation bar. The last 2 arguments
// are necessary; the last one is the crucial one. Saying "2" means the function
// "filter_shorten_linktext()" takes 2 arguments. If you don't say so here, the
// hook won't pass them when it's called and you'll get a PHP error.
add_filter( 'previous_post_link', 'filter_shorten_linktext', 10, 2 );
add_filter( 'next_post_link', 'filter_shorten_linktext', 10, 2 );
