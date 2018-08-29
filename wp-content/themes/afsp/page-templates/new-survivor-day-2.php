<?php
/**
 * Template Name: New Survivor Day - Step 2
 *
 * @package afsp
 */

        add_action('acf/save_post', 'notify_survivor_day_update');

        function notify_survivor_day_update() {

          $post = get_post($_GET['id']);
          $title = get_the_title($post->ID);
          $url = get_permalink($post->ID);
          $organizer_email = get_field('sd_main_organizer_email', $_GET['id']);

          $to = ['jdozier-ezell@afsp.org', 'survivorday@afsp.org', $organizer_email];
          $headers = 'From: Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>\r\n';
          $headers .= 'MIME-Version: 1.0\r\n';
          $headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';
          $subject = 'Your Survivor Day Webpage Has Been Updated';
          $body = 'Thank you. Your Survivor Day webpage for ' . $title . ' has now been updated. You can see it here:' . $url . '. Please note that we reserve the right to edit the changes and corrections you\'ve made. If you have any questions, please contact the Loss & Healing department at survivorday@afsp.org.';

          wp_mail($to, $subject, $body, $headers);

        }

        acf_form_head();
        get_header();


        get_template_part('template-parts/title'); ?>

<div id="primary" class="container">
	<div id="content" class="site-content" role="main">

        <?php /* The loop */ ?>
		    <?php if(have_posts()) : while (have_posts()) : the_post();
		        $post_id = $_GET['id'];
            $sd_title = get_the_title($post_id);
            $sd_url = get_permalink($post_id); ?>

		<h1 class="landing__title container"><?php the_title(); ?></h1>

          <?php if($_GET['updated'] != true) : ?>

    <h3>You are currently editing the <u><?php echo $sd_title ?></u> Survivor Day Event.
      If this is not your event, please stop editing this form and contact our Loss &amp; Healing department 
      at <a href="mailto:survivorday@afsp.org">survivorday@afsp.org</a> to receive your correct form URL.</h3>
    <p>The following information will appear on your event webpage on afsp.org.
      <strong>Since the information is public, please double-check that it is correct.</strong>
      Please note that we reserve the right to edit the information you provide below.</p>

          <?php endif; ?>

        <?php
        acf_form(array(
          'post_id'		=> $post_id,
          'field_groups' => false,
          'fields' => ['sd_event_location',
                'sd_event_country',
                'sd_event_address_1',
                'sd_event_address_2',
                'sd_event_city',
                'sd_event_state',
                'sd_event_province',
                'sd_event_zip_code',
                'sd_additional_event',
                'sd_event_start',
                'sd_event_end',
                'sd_food',
                'sd_fee',
                'sd_donation',
                'sd_fee_amount',
                'sd_contact_event',
                'sd_additional_information',
                // 'field_591b3c37b41cc', // this may need to be updated when moving from stage to live site
                'sd_date_submitted'
                ], // select fields to show
          'post_title' => false,
          'submit_value'		=> 'Update your Survivor Day Organizer Application/Event Registration',
          'updated_message' => '<h1>Thank you. Your Survivor Day webpage for ' . $sd_title . ' has now been updated. <a href="' . $sd_url . '">You can see it here.</a> Please note that we reserve the right to edit the changes and corrections you\'ve made. If you have any questions, please contact the Loss & Healing department at <a href="mailto:survivorday@afsp.org">survivorday@afsp.org</a>.</h1><br /><br />'
        )); ?>

        <?php endwhile;
        endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->
<script>

// helpful date code comes from http://stackoverflow.com/questions/1531093/how-to-get-current-date-in-javascript
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; // Jan is 0
var yy = today.getFullYear();
if(dd < 10) {
	dd = '0' + dd;
}
if(mm < 10) {
	mm = '0' + mm;
}
today = mm + '/' + dd + '/' + yy;
jQuery('#acf-field_573efc0661aa6').attr('value', today);

</script>

				<?php get_footer(); ?>
