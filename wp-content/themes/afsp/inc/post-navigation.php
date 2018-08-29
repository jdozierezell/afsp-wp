<?php
function afsp_navigation_markup( $links, $class = 'posts-navigation', $screen_reader_text = '' ) {
    if ( empty( $screen_reader_text ) ) {
        $screen_reader_text = __( 'Posts navigation' );
    }
 
    $template = '
    <nav class="%1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>';
 
    return sprintf( $template, sanitize_html_class( $class ), esc_html( $screen_reader_text ), $links );
}

function afsp_get_the_post_navigation( $args = array() ) {
    
    $args = wp_parse_args( $args, array(
        'prev_text'          => previous_post('%', '', 'no'),
        'next_text'          => '%title',
        'screen_reader_text' => __( 'Post navigation' ),
    ) );
 
    $navigation = '';
    $previous   = get_previous_post_link( '<div class="nav-previous">%link</div>', $args['prev_text'] );
    $next       = get_next_post_link( '<div class="nav-next">%link</div>', $args['next_text'] );
 
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = afsp_navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}
?>