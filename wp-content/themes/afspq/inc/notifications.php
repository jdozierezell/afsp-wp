<?php

// Code for below found at http://wordpress.stackexchange.com/questions/60378/notify-admin-when-page-is-edited

add_action( 'acf/save_post', 'afsp_notify_admin_on_publish', 1 );

/**
 * Send an email notification to the administrator when a post is published.
 * 
 * @param   string  $new_status
 * @param   string  $old_status
 * @param   object  $post
 */
function afsp_notify_admin_on_publish( $new_status, $old_status, $post ) {
  
  global $post;
  if((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || $post->post_status == 'auto-draft' || empty($_POST['acf'])) :
    return;
  endif;
  
  $fields = $_POST['acf'];
  $screen = get_current_screen();
  $post_type = $screen->post_type;
 
  if($post_type !== 'queues') :
    return;
  endif;
  
  // prep all the variables (well, at least most of them)
  $old_assigned = get_field('assigned_to');
  $new_assigned = $fields['field_542406ac41c3c'];
  $old_status = get_field('q_status');
  $new_status = $fields['field_56f27b85178ce'];
  $old_draft_number = get_field('q_draft_number');
  $new_draft_number = $fields['field_56f27da7178d1'];
  $old_hold = get_field('q_hold_date');
  $new_temp_hold = $fields['field_56f27d75178d0'];
  if($new_temp_hold !== '') : //check to make sure we actually have a date
    $new_hold = date('m/d/Y', strtotime($new_temp_hold)); // formatting the date to match the processed acf data
  else :
    $new_hold = '';
  endif;
  $old_notes = get_field('q_notes');
  $new_notes = $fields['field_56f27b3e178cc'];
  $diff_notes = array_diff($old_notes, $new_notes); // this extra bit helps compare the two arrays because their keys will always be different
  
  $old_distributed = get_field('q_distributed');
  $new_distributed = $fields['field_56f2abeaa3f04'];
  $old_digital = get_field('digital_delivery_date');
  $new_temp_digital = $fields['field_54216d5d21e04'];
  $new_digital = date('m/d/Y', strtotime($new_temp_digital)); // formatting the date to match the processed acf data
  $old_physical = get_field('physical_delivery_date');
  $new_temp_physical = $fields['field_5422c9ebd362d'];
  $new_physical = date('m/d/Y', strtotime($new_temp_physical)); // formatting the date to match the processed acf data
  
  $old_department = get_field('department');
  $new_department = $fields['field_541035c0f396b'];
  $old_contacts = get_field('q_contacts');
  $new_contacts = $fields['field_56f2ac8de192c'];
  $diff_contacts = array_diff($old_contacts, $new_contacts); // this extra bit helps compare the two arrays because their keys will always be different
  $old_temp_requester = get_field('q_requesters_notes');
  $old_strip_requester = strip_tags($old_temp_requester);
  $old_requester = str_replace(array('.', ' ', "\n", "\t", "\r"), '', $old_strip_requester);
  $new_temp_requester = $fields['field_56f2ace4e192f'];
  $new_strip_requester = strip_tags($new_temp_requester);
  $new_requester = str_replace(array('.', ' ', "\n", "\t", "\r"), '', $new_strip_requester);
  $old_attachments = get_field('file_attachments');
  $new_attachments = $fields['field_54416d15b4d0b'];
  $diff_attachments = array_diff($old_attachments, $new_attachments); // this extra bit helps compare the two arrays because their keys will always be different

  // recipients include those added in the notify general option and those listed on the contacts
  $emailto = get_option( 'notify_email' );
  $emailto = str_replace(' ', '', $emailto);
  $emailto = explode(',', $emailto);
  
  $contact_emails = $fields['field_56f2ac8de192c'];
  
  foreach($contact_emails as $key => $value) :
    $emailto[] = $value['field_56f2acbde192e'];
  endforeach;
  
  switch($new_assigned) {
    // case 'Alexis':
    //   $emailto[] = 'aobrien@afsp.dev.cc';
    //   break;
    case 'Brett':
      $emailto[] = 'bwean@afsp.dev.cc';
      break;
    case 'Dozier':
      $emailto[] = 'jdozier-ezell@afsp.dev.cc';
      break;
    case 'Hannah':
      $emailto[] = 'hmoch@afsp.dev.cc';
      break;
    case 'Tara':
      $emailto[] = 'tcriscuolo@afsp.dev.cc';
      break;
  }

  // email subject
  $subject = 'Here\'s an update about ' . get_the_title();
  
  // let the client know this should be html
  $headers = array('Content-Type: text/html; charset=UTF-8');

  // make some notifications...all the notifications
  $body = '';

  if($old_status !== $new_status) :
    if($old_status == '') :
      $body .= 'Your project\'s status has been changed to <b>' . $new_status . '</b>.<br /><br /> ';
    elseif($new_status === 'Under Review') :
      $body .= 'Your project\'s status has been changed from <b>' . $old_status . '</b> to <b>' . $new_status . ': Draft #' . $new_draft_number . '</b>. ';
    else :
      $body .= 'Your project\'s status has been changed from <b>' . $old_status . '</b> to <b>' . $new_status . '</b>. ';
      $body .= ($new_status == 'On Hold' ? 'We\'ll check in again with you on <b>' . $new_hold . '</b>.' : '');
      $body .= '<br /><br />';
    endif;
  endif;
  if($old_status !== 'On Hold' && $new_status === 'On Hold') :
    // keep quiet
  elseif($new_status === 'On Hold') :
    $body .= ($old_hold !== $new_hold && $old_hold != '' && $new_hold != '' ? get_the_title() . ' has been put on hold until <b>' . $new_hold . '</b>. We\'ll check back in with you then.<br /><br />' : '');
  endif;
  $body .= (!empty($diff_notes) ? 'Notes for ' . get_the_title() . ' have been updated.<br /><br />' : '');
  $body .= ($old_assigned !== $new_assigned ? 'Congratulations, your project is now in ' . $new_assigned . '\'s quite capable hands.<br /><br />' : '');
  if($old_distributed !== $new_distributed) :
    switch($new_distributed) {
      case 'online':
        $distribute = 'that your project will live online. Awesome!';
        break;
      case 'small':
        $distribute = 'that you\'ll have a small print run. That\'s cool.';
        break;
      case 'large':
        $distribute = 'that you want a large print run. Go big or go home!';
        break;
      case 'dk':
        $distribute = 'that you\'re not sure how you want to share your message with the world. Don\'t worry; we\'ll help you figure it out.';
        break;
    }
    $body .= 'You indicated ' . $distribute . '<br /><br />';
  endif;
  if($new_distributed == 'online' || $new_distributed == 'small') :
    $body .= ($old_digital !== $new_digital ? 'The due date has been changed to <b>' . $new_digital . '</b>.<br /><br />' : '');
  elseif($new_distributed == 'large' || $new_distributed == 'dk') :
    $body .= ($old_physical !== $new_physical ? 'The due date has been changed to <b>' . $new_physical . '</b>.<br /><br />' : '');
  endif;
  $body .= ($old_department !== $new_department && $old_department != '' ? 'Your project has a new department. Are you moving to <b>' . $new_department . '</b> too?<br /><br />' : '');
  $body .= (!empty($diff_contacts) ? 'The contacts on this project have been updated. Thanks for letting us know.<br /><br />' : '');
  $body .= ($old_requester !== $new_requester ? 'Your notes have been updated. Thanks!<br /><br />' : '');
  $body .= (!empty($diff_attachments) ? 'The attachments for this project have been updated. Thanks for the gift.<br /><br />' : '');
  
  $category_id = get_cat_ID('Project Delivered');
  
  if(in_category($category_id)) :
    $body .= 'This project has been archived. Good work everyone.<br /><br />';
  endif;
  
  
  if($body == '') :
    return;
  endif;

  $body .= 'Well, that\'s all the news. If you see a mistake or need to make further updates, <a href="' . get_edit_post_link( $post->ID ) . '">click here</a>.';

  wp_mail( $emailto, $subject, $body, $headers );
}

?>