<?php
/**
 * Template Name: New Survivor Day
 *
 * @package afsp
 */

add_action( 'acf/pre_save_post', 'save_survivor_day' );
/**
 * Perform pre save tasks for survivor day post
 *
 * @param integer $post_id The id of the post.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string The title.
 */
function save_survivor_day( $post_id ) {
	// phpcs:disable
	$acf = $_POST['acf'];
	// phpcs:enable
	if ( isset( $acf['field_5707c4d4b1d3a'] ) ) :
		$country = sanitize_text_field( wp_unslash( $acf['field_5707c4d4b1d3a'] ) );
	endif;
	if ( isset( $acf['field_5707c4ddb1d3d'] ) ) :
		$title = sanitize_text_field( wp_unslash( $acf['field_5707c4ddb1d3d'] ) );
	endif;
	if ( 'United States of America' === $country ) :
		if ( isset( $acf['field_5707c4e0b1d3e'] ) ) :
			$title .= ', ' . sanitize_text_field( wp_unslash( $acf['field_5707c4e0b1d3e'] ) );
		endif;
	elseif ( 'Canada' === $country ) :
		if ( isset( $acf['field_5707c4e5b1d3f'] ) ) :
			$title .= ', ' . sanitize_text_field( wp_unslash( $acf['field_5707c4e5b1d3f'] ) ) . ', ' . $country;
		endif;
	else :
		$title .= ', ' . $country;
	endif;
	$post    = array(
		'post_type'   => 'survivor_day',
		'post_status' => 'draft',
		'post_title'  => $title,
	);
	$post_id = wp_insert_post( $post );
	// phpcs:disable
	$_POST['return'] = add_query_arg( array( 'post_id' => $post_id ), $_POST['return'] );
	// phpcs:enable
	return $post_id;
}
add_action( 'acf/save_post', 'notify_survivor_day' );
/**
 * Notify the submitter
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return void
 */
function notify_survivor_day() {
	// phpcs:disable
	$acf = $_POST['acf'];
	// phpcs:enable
	if ( isset( $acf['field_5707b6d7b1d27'] ) ) :
		$organizer = esc_url_raw( wp_unslash( $acf['field_5707b6d7b1d27'] ) );
	endif;
	if ( isset( $acf['field_5707b709b1d28'] ) ) :
		$organizer_email = esc_url_raw( wp_unslash( $acf['field_5707b709b1d28'] ) );
	endif;
	$organizer_email = $acf['field_5707b709b1d28'];
	$to              = [ 'jdozier-ezell@afsp.org', 'survivorday@afsp.org', $organizer_email ];
	$headers         = 'From: Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>\r\n';
	$headers        .= 'MIME-Version: 1.0\r\n';
	$headers        .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';
	$subject         = 'Your Survivor Day Event Application Has Been Submitted';
	$body            = 'Thank you, ' . $organizer . '. Your Survivor Day Event Application has been submitted for review. If your application is accepted, we will create a webpage for your event within two weeks. Otherwise we will be in touch as soon as possible. If you have any questions, please contact the Loss & Healing department at survivorday@afsp.org.';
	wp_mail( $to, $subject, $body, $headers );

}

acf_form_head();
get_header();
get_template_part( 'template-parts/title' );
?>

<div id="primary" class="container">
	<div id="content" class="site-content" role="main">

	<?php
	/* The loop */
	while ( have_posts() ) :
		the_post();
		?>
		<h1 class="landing__title container"><?php the_title(); ?></h1>
			<?php
			acf_form( array(
				'post_id'         => 'new_sd_event',
				'fields'          => [
					'field_59245708fe7f0',
					'sd_first_time',
					'sd_organize_years',
					'sd_afsp_affiliated',
					'sd_afsp_contact',
					'sd_afsp_support',
					'sd_other_affiliated',
					'sd_other_affiliated_which',
					'sd_independant',
					'field_5707b210b1d22',
					'sd_agreement',
					'sd_main_organizer_name',
					'sd_main_organizer_email',
					'sd_main_organizer_phone',
					'sd_organizer_publish',
					'sd_contact_name',
					'sd_contact_email',
					'sd_contact_phone',
					'sd_co_organizer_name',
					'sd_co_organizer_email',
					'sd_co_organizer_phone',
					'field_591b3c37b41cc',
					'sd_attendee_type',
					'field_5707c3adb1d38',
					'sd_event_location',
					'sd_event_country',
					'sd_event_address_1',
					'sd_event_address_2',
					'sd_event_city',
					'sd_event_state',
					'sd_event_province',
					'sd_event_zip_code',
					'sd_additional_event',
					'sd_sponsoring_organizations',
					'sd_afsp_chapter',
					'sd_afsp_ootd',
					'sd_other_sponsor',
					'sd_event_start',
					'sd_event_end',
					'sd_food',
					'sd_contact_potential',
					'sd_contact_event',
					'sd_additional_information',
				], // select fields to show.
				'submit_value'    => 'Submit your Survivor Day Event Application',
				'updated_message' => '<p><strong>Thank you. Your Survivor Day Event Application has been submitted
                      for review.</strong></p>
                   <p>If your application is accepted, we will create a webpage
                      for your event within two weeks. Otherwise we will be in
                      touch as soon as possible.</p>
                   <p>If you have any questions, please contact the Loss & Healing department at <a href="mailto:survivorday@afsp.org">survivorday@afsp.org</a>.</p>',
				'honeypot'        => true,
			));
			?>

		<?php endwhile; ?>

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
