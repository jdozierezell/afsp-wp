<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function sidebar_widget_init() { // not currently using this. mostly here as an example

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'sidebar_widget_init' );

?>