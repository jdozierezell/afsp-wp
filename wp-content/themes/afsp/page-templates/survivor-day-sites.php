<?php
/**
 * Template Name: Survivor Day Data for Reporting
 *
 * @package afsp
 */

				get_header();
				get_template_part('template-parts/title'); ?>

<div class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</div>

				<?php if(post_password_required()) :
					function my_password_form() {
					    global $post;
					    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
					    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
					    ' . __( "To view this protected post, enter the password below:" ) . '
					    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
					    </form>
					    ';
					    return $o;
					}
					add_filter( 'the_password_form', 'my_password_form' );

					echo get_the_password_form();
				else :

				// WP_Query arguments
				// $args = array (
				// 	'post_type'              => array( 'survivor_day' ),
				// 	'post_status'            => array( 'draft','publish' ),
				// 	'posts_per_page'				 => -1
				// );

				// The Query
				// $sites = new WP_Query( $args );

					global $wpdb;

					$query = "
					    SELECT *
							FROM wp_posts posts
							WHERE posts.post_type = 'survivor_day'
							AND (posts.post_status = 'draft' OR posts.post_status = 'publish')
						";

					$sd_events = $wpdb->get_results($query, OBJECT);

					// The Loop
					if ( $sd_events ) :	?>

<table class="footable tablepress">
	<thead>
    <tr>
      <th colspan="1"></th>
      <th colspan="10">About the Proposed Event</th>
      <th colspan="3">Sponsoring Organization(s)</th>
      <th colspan="6">About the Planning Team</th>
      <th colspan="9">Organizational Logistics</th>
    </tr>
		<tr>
      <th>Registration Date</th>
			<th>City</th>
			<th>State/Province</th>
			<th>Country</th>
			<th>Zip/Postal Code</th>
			<th>First Time Organizer?</th>
			<th>Previous Organizer Year(s)</th>
			<th>Affiliated with AFSP?</th>
			<th>AFSP Contact Name</th>
			<th>Interested in Support?</th>
			<th>AFSP Chapter</th>
			<th>Out of the Darkness Walk</th>
			<th>Other Organization(s)</th>
      <th>About the Organizer</th>
			<th>Main Org. Name</th>
			<th>Main Org. Email</th>
			<th>Main Org. Phone</th>
			<th>Co Org. Name</th>
			<th>Co Org. Email</th>
			<th>Co Org. Phone</th>
      <th>Non-Loss Welcome?</th>
      <th>Memorial Display?</th>
      <th>Attendance Fee</th>
      <th>Custom Survivor Day Date</th>
		</tr>
	</thead>
	<tbody>

				<?php global $post;
					foreach($sd_events as $post) :
						setup_postdata($post); ?>

		<tr>
			<td> <!--Registration Date-->

				<?php the_field('sd_date_submitted');	?>

			</td>
			<td> <!--City-->

				<?php the_field('sd_event_city');	?>

			</td>
			<td> <!--State/Province-->

				<?php if(get_field('sd_event_country') === 'United States of America') :
					echo postal_abbreviation(get_field('sd_event_state'));
				elseif(get_field('sd_event_country') === 'Canada') :
					echo postal_abbreviation(get_field('sd_event_province'));
				endif; ?>

			</td>
			<td> <!--Country-->

				<?php the_field('sd_event_country');	?>

			</td>
			<td> <!--Zip/Postal Code-->

				<?php the_field('sd_event_zip_code');	?>

			</td>
			<td> <!--First Time Organizer?-->

				<?php echo ucfirst(get_field('sd_first_time'));	?>

			</td>
			<td> <!--Previous Organizer Year(s)-->

				<?php if(get_field('sd_organize_years')) :
          the_field('sd_organize_years');
        else :
          echo '--';
        endif; ?>

			</td>
			<td> <!--Affiliated with AFSP?-->

				<?php echo ucfirst(get_field('sd_afsp_affiliated'));	?>

			</td>
			<td> <!--AFSP Contact Name-->

				<?php echo get_field('sd_afsp_contact') ? get_field('sd_afsp_contact') : '--';	?>

			</td>
      <td> <!--Interested in Support?-->

				<?php echo get_field('sd_afsp_support') ? ucfirst(get_field('sd_afsp_support')) : '--';	?>

			</td>
			<td> <!--AFSP Chapter-->

				<?php the_field('sd_afsp_chapter');	?>

			</td>
			<td> <!--OOTD Walk-->

				<?php the_field('sd_afsp_ootd');	?>

			</td>
			<td> <!--Other Organization(s)-->

				<?php $orgs = get_field('sd_other_sponsor');
        for($i = 1; $i <= count($orgs); $i++) {
          $org = $orgs[$i]['sd_other_sponsor_name'];
          $web = $orgs[$i]['sd_other_sponsor_website'];
          if($web != '') :
            echo '<a href="' . $web . '" target="_blank">' . $org . '</a>';
          else :
            echo $org;
          endif;
          if ($i < count($orgs)) :
            echo '<br /><br />';
          endif;
        }	?>

			</td>
			<td> <!--About the Organizer-->

				<?php echo get_field('sd_independant') != '' ? get_field('sd_independant') : '--';	?>

			</td>
			<td> <!--Main Organizer Name-->

				<?php the_field('sd_main_organizer_name');	?>

			</td>
			<td> <!--Main Organizer Email-->

				<a href="mailto:<?php echo get_field('sd_main_organizer_email'); ?>"><?php echo get_field('sd_main_organizer_email'); ?></a>

			</td>
			<td> <!--Main Organizer Phone-->

				<?php the_field('sd_main_organizer_phone');	?>

			</td>
			<td> <!--Co Organizer Name-->

				<?php the_field('sd_co_organizer_name');	?>

			</td>
			<td> <!--Co Organizer Email-->

				<a href="mailto:<?php echo get_field('sd_co_organizer_email'); ?>"><?php echo get_field('sd_co_organizer_email'); ?></a>

			</td>
			<td> <!--Co Organizer Phone-->

				<?php the_field('sd_co_organizer_phone');	?>

			</td>
			<td> <!--Non-Loss Welcome?-->

				<?php $welcome = get_field('sd_attendee_type');
        if($welcome === 'loss_only') :
          echo 'No';
        elseif($welcome === 'non_loss') :
          echo 'Yes';
        else :
          echo 'Not Sure';
        endif; ?>

			</td>
			<td> <!--Memorial Display?-->

				<?php $memorial = get_field('sd_memorial_display');
        if($memorial === 'yes') :
          echo 'Yes';
        elseif($memorial === 'no') :
          echo 'No';
        else :
          echo 'Not Sure';
        endif; ?>

			</td>
			<td> <!--Registration/Attendance Fee-->

				<?php the_field('sd_fee'); ?>

			</td>
			<td> <!--Registration/Attendance Fee-->

				<?php the_field('sd_custom_date'); ?>

			</td>
		</tr>

				<?php endforeach;
					endif;
				endif; ?>

	</tbody>
</table>

				<?php	// Restore original Post Data
				wp_reset_postdata(); ?>

				<?php get_footer(); ?>
