<?php

/*
 * Add taxonomy filters to backend post lists
 */

add_action( 'restrict_manage_posts', 'afsp_add_taxonomy_filters' );

function afsp_add_taxonomy_filters() {
	global $typenow;
 
	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array('event-type', 'chapter-tag');
 
	// must set this to the post type you want the filter(s) displayed on
	if( $typenow == 'event' || $typenow == 'chapter' ){
 
		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
				echo "</select>";
			}
		}
	}
}

/*
 * Keep chapter admins from completely trashing their posts
 */

// code for the following filter and action provided by http://wordpress.stackexchange.com/questions/74488/restrict-access-to-the-trash-folder-in-posts

add_filter( 'views_edit-chapter', 'afsp_remove_trash_link' );
add_action( 'admin_head-edit.php', 'afsp_block_trash_access' );

function afsp_remove_trash_link( $views ) // this hides trash from non-admins
{
    if( !current_user_can( 'delete_plugins' ) )
        unset( $views['trash'] );

    return $views;
}

function afsp_block_trash_access() // this redirects non-admins if they try to access trash directly
{
    global $current_screen;

    if( 
        'chapter' != $current_screen->post_type 
        || 'trash' != $_GET['post_status'] 
    )
        return;

    if( !current_user_can( 'delete_plugins' ) )
    {
        wp_redirect( admin_url() . 'edit.php' ); 
        exit;
    }
}

/*
 * Add sortable data columns to admin support group listing
 */

add_filter( 'manage_edit-support_group_columns', 'support_group_columns_head');
add_action( 'manage_support_group_posts_custom_column', 'support_group_columns_body' );
add_action( 'pre_get_posts', 'support_groups_define_meta' );
add_filter( 'manage_edit-support_group_sortable_columns', 'support_group_columns_sort' );

function support_group_columns_head ( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Title',
        'city' => 'City',
        'country' => 'Country',
        'state' => 'State',
        'province' => 'Province',
        'status' => 'Status',
        'author' => 'Author',
        // 'comments' => 'Comments',
        'date' => 'Date'
    );
    return $columns;
}

function support_group_columns_body ( $column ) {
    global $post;
    if ( $column == 'city' ) {
        echo the_field( 'city' );
    } elseif ( $column == 'state' ) {
        echo the_field( 'state' );
    } elseif ( $column == 'province' ) {
        echo the_field( 'province' );
    } elseif ( $column == 'country' ) {
        echo the_field( 'country' );
    }    
}

function support_groups_define_meta ( $query ) {
    if ( !is_admin() ) {
        return;
    } else {
        $orderby = $query -> get( 'orderby' );
        if ( $orderby == 'city' ) {
            $query -> set( 'meta_key', 'city' );
            $query -> set( 'orderby', 'meta_value' );
        } elseif ( $orderby == 'state' ) {
            $query -> set( 'meta_key', 'state' );
            $query -> set( 'orderby', 'meta_value' );
        } elseif ( $orderby == 'province' ) {
            $query -> set( 'meta_key', 'province' );
            $query -> set( 'orderby', 'meta_value' );
        } elseif ( $orderby == 'country' ) {
            $query -> set( 'meta_key', 'country' );
            $query -> set( 'orderby', 'meta_value' );
        } 
    }
}

function support_group_columns_sort( $columns ) {
    $columns[ 'city' ] = 'city';
    $columns[ 'state' ] = 'state';
    $columns[ 'province' ] = 'province';
    $columns[ 'country' ] = 'country';
    return $columns;
}

/*
 * Force a category selection. This is currently inactive.
 */

// code for the following action modified from the plugin Force Post Category Selection available on wordpress.org

// add_action('admin_init', 'force_post_cat_init');
// add_action('edit_form_advanced', 'force_post_cat');

function force_post_cat_init() 
{
  wp_enqueue_script('jquery');
}
function force_post_cat() 
{
  echo "<script type='text/javascript'>\n";
  echo "
  jQuery('#publish').click(function() 
  {
   	var cats = jQuery('[id=\"taxonomy-chapter-tag\"]')
      .find('.selectit')
      .find('input');
	if(cats.length)
	{
		category_selected=false;
		for (counter=0; counter<cats.length; counter++) 
		{
			if (cats.get(counter).checked==true) 
			{
				category_selected=true;
				break;
			}
		}
		if(category_selected==false) 
		{
			alert('You have not selected any category for the post. Kindly select post category.');
			setTimeout(\"jQuery('#ajax-loading').css('visibility', 'hidden');\", 100);
			jQuery('[id=\"taxonomy-chapter-tag\"]').find('.tabs-panel').css('background', '#FC4C02');
			jQuery('[id=\"taxonomy-chapter-tag\"]').find('.tabs-panel label').css('color', '#FFFFFF');
			setTimeout(\"jQuery('#publish').removeClass('button-primary-disabled');\", 100);
			return false;
		}
	}
  });
  ";
   echo "</script>\n";
}

/*
 * Hide location columns from chapter page post type because they're confusing folks. Not currently working. Let's come back to it.
 */

function afsp_manage_columns( $columns ) {
  unset($columns['location']);
  return $columns;
}

function my_column_init() {
  global $post_type;
  if($post_type == 'chapter') :
    add_filter( 'manage_posts_columns' , 'my_manage_columns' );
  endif;
}
add_action( 'admin_init' , 'my_column_init' );

?>