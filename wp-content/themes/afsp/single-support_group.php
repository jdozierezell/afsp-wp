<?php
/**
 * The template for displaying all support group pages
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<section class="container">
			<?php echo do_shortcode( '[gmw_single_location map_width="100%" map_height="450px" ul_marker="0" distance="0" additional_info="0" info_window="0"]' ); ?>
			<h1 class="landing__title container"><?php the_title(); ?></h1>
			<div class="disclaimer">
				<p><em>AFSP makes the support group listings directory for suicide loss survivors available as a public service and does not run, recommend, endorse, or fund any of the groups listed. In addition, we do not monitor individual groups and only update information as it is made available to us by the facilitators and/or sponsoring organizations.</em></p>
				<p><strong>Please follow up with the listed contact to ensure their group is still active and confirm both meeting times and location.</strong></p>
			</div>
			<?php
			if ( get_field( 'support_group_website' ) || get_field( 'hosting_sponsoring_organization_website') ) : ?>
				<div class="support__details">
					<h3>Website</h3>
					<?php 
					$group_website = '';
					$sponsor_website = '';
					if ( get_field( 'support_group_website' ) ) :
						if ( false === strpos( get_field( 'support_group_website' ), 'http://' ) || strpos( get_field( 'support_group_website' ), 'https://' ) ) :
							$group_website .= 'http://';
						endif;
						$group_website .= get_field( 'support_group_website' ); ?>
						<p><a href="<?php echo esc_url( $group_website ); ?>"><?php the_field( 'support_group_website' ); ?></a></p>
					<?php
					endif;
					if ( get_field( 'hosting_sponsoring_organization_website' ) ) :
						if ( false === strpos( get_field( 'hosting_sponsoring_organization_website' ), 'http://' ) || strpos( get_field( 'hosting_sponsoring_organization_website' ), 'https://' ) ) :
							$sponsor_website .= 'http://';
						endif;
						$sponsor_website .= get_field( 'hosting_sponsoring_organization_website' ); ?>
						<p><a href="<?php echo esc_url( $sponsor_website ); ?>"><?php the_field( 'hosting_sponsoring_organization_website' ); ?></a></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="support__details">
				<h3>Meeting Place</h3>
				<?php
				if ( 'United States of America' === get_field( 'country' ) ) :
					$state = get_field( 'state' );
				elseif ( 'Canada' === get_field( 'country' ) ) :
					$state = get_field( 'province' );
				else :
					$state = false;
				endif;
				$country           = get_field( 'country' );
				$times             = get_field( 'support_group_meets' );
				$meeting_frequency = get_field( 'meeting_frequency' );
				switch ( $meeting_frequency ) {
					case 'Monthly':
						$frequency = 'monthly';
						break;
					case 'Twice a Month':
						$frequency = 'twice a month';
						break;
					case 'Weekly':
						$frequency = 'weekly';
						break;
					case 'Other':
						$frequency = get_field( 'other' );
						break;
					case 'Varies':
						$frequency = false;
						break;
				};
				?>
				<p>
					<?php
					if ( get_field( 'meeting_place' ) ) :
						echo 'Please contact us for location details.<br>';
					else :
						echo esc_html( get_field( 'meeting_site' ) ) . '<br>';
						echo esc_html( get_field( 'street_address' ) ) . '<br>';
					endif;
					$state          = $state ?: ' ';
					$country        = 'United States of America' === $country ? '' : $country;
					$city_state_zip = get_field( 'city' ) . ',' . $state . get_field( 'zip_postal_code' ) . ' ' . $country;
					echo esc_html( $city_state_zip );
					?>
				</p>
			</div>
			<div class="support__details">
				<h3>Meeting Time(s)</h3>
				<?php
				if ( ! $frequency ) :
					echo '<p>Please contact us for meeting times.</p>';
				else :
					echo '<p>The group meets ' . esc_html( strtolower( $times ) );
					if ( 'During a Specific Timeframe' === $times ) :
						echo ' from ' . esc_html( get_field( 'start_date' ) ) . ' to ' . esc_html( get_field( 'end_date' ) );
					endif;
					echo '. Meetings are held ' . esc_html( $frequency );
					if ( 'twice a month' === $frequency ) :
						$twice = count( get_field( 'semimonthly_days_and_times' ) );
						if ( have_rows( 'semimonthly_days_and_times' ) ) :
							$counter = 0;
							while ( have_rows( 'semimonthly_days_and_times' ) ) :
								the_row();
								$counter++;
								$print = ' on the ' . strtolower( get_sub_field( 'occurence' ) ) . ' ' . get_sub_field( 'day' ) . ' of the month from ' . get_sub_field( 'start_time' ) . ' to ' . get_sub_field( 'end_time' );
								if ( $counter < $twice ) :
									$print .= ' and ';
								else :
									$print .= '.';
								endif;
								echo esc_html( $print );
							endwhile;
						endif;
					elseif ( 'monthly' === $frequency ) :
						if ( have_rows( 'monthly_day_and_time' ) ) :
							while ( have_rows( 'monthly_day_and_time' ) ) :
								the_row();
								$monthly_day_time = ' on the ' . strtolower( get_sub_field( 'occurence' ) ) . ' ' . get_sub_field( 'day' ) . ' of the month from ' . get_sub_field( 'start_time' ) . ' to ' . get_sub_field( 'end_time' ) . '.';
								echo esc_html( $monthly_day_time );
							endwhile;
						endif;
					elseif ( 'weekly' === $frequency ) :
						if ( have_rows( 'weekly_day_and_time' ) ) :
							while ( have_rows( 'weekly_day_and_time' ) ) :
								the_row();
								$weekly_day_time = ' on ' . get_sub_field( 'day' ) . 's from ' . get_sub_field( 'start_time' ) . ' to ' . get_sub_field( 'end_time' ) . '.';
								echo esc_html( $weekly_day_time );
							endwhile;
						endif;
					elseif ( 'other' === $frequency ) :
						echo esc_html( get_field( 'other' ) );
					endif;
					echo '</p>';
				endif;
				?>
			</div>
			<div class="support__details">
				<h3>Contact</h3>
				<?php
				if ( have_rows( 'contact_persons' ) ) :
					$persons = count( get_field( 'contact_persons' ) );
					$counter = 0;
					while ( have_rows( 'contact_persons' ) ) :
						the_row();
						$counter++;
						echo '<p>' . esc_html( get_sub_field( 'contact_name' ) ) . '<br>';
						if ( get_sub_field( 'contact_phone' ) ) :
							echo esc_html( get_sub_field( 'contact_phone' ) ) . '<br>';
						endif;
						if ( get_sub_field( 'contact_email' ) ) :
							$mailto = 'mailto:' . get_field( 'contact_email' );
							echo '<a href="' . esc_url( $mailto ) . '">' . esc_html( get_sub_field( 'contact_email' ) ) . '</a>';
						endif;
						if ( $counter < $persons ) :
							echo '</p><p>';
						endif;
					endwhile;
				endif;
				echo '</p>';
				?>
			</div>
			<?php
			$type = get_field( 'group_type' );
			if ( get_field( 'group_demographic' ) ) :
			?>
				<div class="support__details">
					<h3>Group Demographic</h3>
					<?php the_field( 'group_demographic' ); ?>
				</div>
			<?php endif; ?>
			<div class="support__details">
				<h3>Group Type</h3>
				<p><?php echo 'Open' === $type ? 'This group is open, which means that new members may join at any time.' : 'This group is closed, which means that new members may join only at specific times or under certain circumstances.'; ?></p>
			</div>
			<?php if ( get_field( 'registration_process' ) ) : ?>
				<div class="support__details">
					<h3>Registration</h3>
					<p><?php the_field( 'registration_process' ); ?></p>
				</div>
			<?php endif; ?>
			<div class="support__details">
				<h3>Facilitator</h3>
				<p>
					<?php
					$facilitators = get_field( 'facilitator' );
					if ( ! isset( $facilitators[1] ) ) :
						if ( 'Peer' === $facilitators[0] ) :
							echo 'Fellow loss survivor';
						elseif ( 'Mental Health Professional' === $facilitators[0] ) :
							echo 'Mental health professional';
						endif;
					elseif ( $facilitators[1] ) :
						echo 'Mental health professional and fellow loss survivor';
					endif;
					?>
				</p>
			</div>
			<div class="support__details">
				<h3>Cost</h3>
				<?php
				$costs = get_field( 'costs' );
				switch ( $costs ) {
					case 'No Charge':
						$cost = 'None';
						break;
					case 'Fixed Charge':
						$cost = get_field( 'amount' );
						break;
					case 'Sliding Scale':
						$cost = get_field( 'minimum_amount' );
						break;
					case 'Donations Accepted But Not Required':
						if ( 'n/a' === get_field( 'amount' ) || 'N/A' === get_field( 'amount' ) ) {
							$cost = 'Donations accepted';
						} else {
							$cost = 'Suggested donation: ' . get_field( 'amount' );
						}
						break;
					case 'Other':
						$cost = get_field( 'other_cost' );
						break;
				};
				echo '<p>' . esc_html( $cost ) . '</p>';
				?>
			</div>
			<?php
			if ( get_field( 'hosting_sponsoring_organization' ) || get_field( 'hosting_sponsoring_organization_website' ) ) :
				if ( get_field( 'hosting_sponsoring_organization_website' ) ) :
					$sponsor_website = '';
					if ( false === strpos( get_field( 'hosting_sponsoring_organization_website' ), 'http://' ) || strpos( get_field( 'hosting_sponsoring_organization_website' ), 'https://' ) ) :
							$sponsor_website .= 'http://';
					endif;
					$sponsor_website   .= get_field( 'hosting_sponsoring_organization_website' );
					$sponsor_text       = get_field( 'hosting_sponsoring_organization_website' );
					$sponsor_close_link = '</a>';
				endif;
				$sponsor_text = get_field( 'hosting_sponsoring_organization' ) ? get_field( 'hosting_sponsoring_organization' ) : $sponsor_text;
				$sponsor_info = '<div class="support__details"><h3>Hosting/Sponsoring Organization</h3><p>' . $sponsor_text . $sponsor_close_link . '</p></div>';
				echo wp_kses( $sponsor_info, $GLOBALS['allowed_html'] );
			endif;
			if ( get_field( 'additional_information' ) ) :
			?>
				<div class="support__details">
					<h3>Additional Information</h3>
					<?php the_field( 'additional_information' ); ?>
				</div>
			<?php
			endif;
			if ( get_field( 'last_updated' ) ) :
			?>
			<hr>
			<div class="support__details">
				<p>This listing was most recently updated on <?php the_field( 'last_updated' ); ?>.</p>
			</div>
			<?php endif; ?>
		</section>
	<?php
	endwhile;
endif;
get_footer();?>
