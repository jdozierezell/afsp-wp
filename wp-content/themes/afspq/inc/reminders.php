<?php 

/*
 * Send a reminder to contacts to let them know they owe us all the things. 
 *
 */
 
  //this is what let's us use WP_Query outside of the normal wordpress context
  define('WP_USE_THEMES', false);
  require_once('../../../../wp-load.php');

  $args = array(
				'post_type' => 'queues',
				'cat' => -51,
				'posts_per_page' => -1
	);

	// The Query
	$queues = new WP_Query($args);
	
	if ($queues->have_posts()) : while ($queues->have_posts()) : $queues->the_post();
	    
	    if(get_field('q_status') === 'Under Review') :
	      $requested = get_field('q_review_requested');
	      $requested = new DateTime($requested);
	      $today = new DateTime();
	      if($today >= $requested) :
	        
	        $emailto = array();
	        $contacts = get_field('q_contacts');
	        foreach($contacts as $contact) :
	            $emailto[] = $contact['q_contact_email'];
	        endforeach;
          
          ?><pre><?php
          
          var_dump($emailto);
          
          ?></pre><?php
          
          $subject = 'Checking in on ' . get_the_title();
          
          ?><pre><?php
          
          var_dump(subject);
          
          ?></pre><?php
  
          // let the client know this should be html
          $headers = array('Content-Type: text/html; charset=UTF-8', 'Reply-To: Tara Criscuolo <tcriscuolo@afsp.dev.cc>, Jonathan Dozier-Ezell <jdozier-ezell@afsp.dev.cc>');
          
          ?><pre><?php
          
          var_dump($headers);
          
          ?></pre><?php
          
          if(get_field('q_draft_number') == 1) :
            $draft_number = 'the 1st draft';
          elseif(get_field('q_draft_number') == 2) :
            $draft_number = 'the 2nd draft';
          elseif(get_field('q_draft_number') == 3) :
            $draft_number = 'the 3rd draft';
          elseif(get_field('q_draft_number') > 3) :
            $draft_number = 'draft #' . $draft_number;
          endif;
          
          $body = 'Good morning!<br /><br />Your friendly neighborhood Q administrators just want to remind you that you currently have a draft of <b>' . get_the_title() . '</b> for review. You are currently reviewing <b>' . $draft_number . '</b> of this project. We know that keeping your project on schedule is as important to you as it is to us, so please help us by providing your feedback by the end of the day. If you don\'t think you\'ll be able to meet that deadline, just hit reply and let us know. Depending on your project\'s timeframe, we may need to adjust the due date to accomodate for the delay.<br /><br />Thank you,<br /><br />The Q';
          
          ?><pre><?php
          
          var_dump($body);
          
          ?></pre><?php
	        
	        wp_mail( $emailto, $subject, $body, $headers );
	      
	      endif;
      endif;
    endwhile;
  endif;
?>