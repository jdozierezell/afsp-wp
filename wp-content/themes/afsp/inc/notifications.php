<?php

// Code for below found at http://wordpress.stackexchange.com/questions/60378/notify-admin-when-page-is-edited

// Currently disabled because it was causing a feedback loop and I don't really pay attention to these notifications anyway. :(

// add_action( 'save_post', 'afsp_notify_admin_on_publish', 10, 3 );

/**
 * Send an email notification to the administrator when a post is published.
 * 
 * @param   string  $new_status
 * @param   string  $old_status
 * @param   object  $post
 */
function afsp_notify_admin_on_publish( $new_status, $old_status, $post ) {
  
  global $post;
  if( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || $post->post_status == 'auto-draft' )
      return;
  
 // if ( $new_status !== 'publish' || $old_status === 'publish' )
 //    return;
  if ( ! $post_type = get_post_type_object( $post->post_type ) )
      return;

  // Recipient, in this case the administrator email
  $emailto = get_option( 'admin_email' );

  // Email subject, "New {post_type_label}"
  $subject = 'New ' . $post_type->labels->singular_name;

  // Email body
  $message = 'View it: ' . get_permalink( $post->ID ) . "\nEdit it: " . get_edit_post_link( $post->ID );

  wp_mail( $emailto, $subject, $message );
}

?>