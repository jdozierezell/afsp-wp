<?php
/**
 * Plugin Name: AFSP Queue
 * Plugin URI: http://afsp.wpengine.com
 * Description: Plugin provides the queue post type and other functionality.
 * Version: 1.0
 * Author: Jonathan Dozier-Ezell
 * Author URI: http://jonathandozierezell.com
 * License: GPL2
 */

// Register Custom Post Type
function afsp_queue_me() {

	$labels = array(
		'name'                => _x( 'Queues', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Queue', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Queues', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Projects', 'text_domain' ),
		'view_item'           => __( 'View Project', 'text_domain' ),
		'add_new_item'        => __( 'Add New Project', 'text_domain' ),
		'add_new'             => __( 'Add New Project', 'text_domain' ),
		'edit_item'           => __( 'Edit Project', 'text_domain' ),
		'update_item'         => __( 'Update Project', 'text_domain' ),
		'search_items'        => __( 'Search Projects', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'queues', 'text_domain' ),
		'description'         => __( 'Queued items for production', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => array( 'queue', 'queues'),
		'map_meta_cap'		  => true,
	);
	register_post_type( 'queues', $args );

}

// Hook into the 'init' action
add_action( 'init', 'afsp_queue_me', 0 );

add_filter('gettext','custom_enter_title');

function custom_enter_title( $input ) {

    global $post_type;

    if( is_admin() && 'Enter title here' == $input && 'queues' == $post_type )
        return 'Enter Project Name';

    return $input;
}



// add_action('acf/validate_value/name=q_override', 'q_validate_override', 10, 4);

// function q_validate_override($valid, $value, $field, $input) {
// 	$q_override = $value;
// 	return $valid;
// }

// // ACF 5 Validation Filters
// add_filter('acf/validate_value/name=digital_delivery_date', 'validate_digital_date', 10, 4);

// // check the digital date

// function validate_digital_date( $valid, $value, $field, $input ){
	
// 	// bail early if value is already invalid
// 	if( !$valid ) {
		
// 		return $valid;
		
// 	}

	
	
// 	if($q_override !== '1') :
// 	// load image data
// 	$due_date = new DateTime($value);
	
// 	$post= $_GET['post_id'];
	
// 	$published_date = get_the_time('d/m/Y', $post);
// 	if($published_date !== '') :
// 		$basis = new DateTime($published_date);
// 	else :
//   	$basis = new DateTime();
// 	endif;
//   $basis->modify('+2 weeks');
//     if ($basis > $due_date) :
//         $valid = $post . ' In order to ensure the best quality for the Foundation, we request at least 2 weeks to work on your project. In special situations, exceptions can be requested by emailing Tara or Jonathan.';
//     endif;
//   endif;
	
// 	// return
// 	return $valid;
	
	
// }

// // check the physical date

// // add_filter('acf/validate_value/name=physical_delivery_date', 'validate_physical_date', 10, 4);

// function validate_physical_date( $valid, $value, $field, $input ){
	
// 	// bail early if value is already invalid
// 	if( !$valid ) {
		
// 		return $valid;
		
// 	}
	
// 	if($q_override !== '1') :
// 	// load image data
// 	$due_date = new DateTime($value);
//   $basis = new DateTime();
//   $basis->modify('+2 weeks');
//     if ($basis > $due_date) :
//         $valid = 'In order to ensure the best quality for the Foundation, we request at least 4 weeks to work on your project. In special situations, exceptions can be requested by emailing Tara or Jonathan.';
//     endif;
//   endif;
	
	
// 	// return
// 	return $valid;
	



// }
?>