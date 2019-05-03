<?php
/**
 * The template for displaying Survivor Day events
 *
 * @package afsp
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<header class="breadcrumbs__container">
			<div class="breadcrumbs">
				<p id="breadcrumbs">
					<span>
						<?php
						$chapters = get_field( 'sd_afsp_chapter' );
						if ( get_field( 'sd_event_address_1' ) && 'TBD' !== get_field( 'sd_event_address_1' ) && ' ' !== get_field( 'sd_event_address_1' ) ) :
							$street_address = get_field( 'sd_event_address_1' );
						endif;
						$post_id  = get_the_ID();
						$location = array(
							'post_id'   => $post_id, // post ID.
							'post_type' => get_post_type( $post_id ), // post Type.
							'city'      => get_field( 'sd_event_city' ),
							'state'     => get_field( 'sd_event_state' ),
							'zipcode'   => get_field( 'sd_event_zip_code' ),
							'country'   => get_field( 'sd_event_country' ),
						);
						if ( isset( $street_address ) ) :
							$location['street'] = $street_address;
						endif;
						if ( is_array( $chapters ) ) :
							foreach ( $chapters as $key => $chapter ) :
								$url = get_site_url() . '/chapter/afsp-' . chapter_to_base_url( $chapter );
								echo '<a href="' . esc_url( $url ) . '">AFSP ' . esc_html( $chapter ) . '</a> › ';
							endforeach;
						else :
							$url = get_site_url() . '/chapter/afsp-' . chapter_to_base_url( $chapter );
							echo '<a href="' . esc_url( $url ) . '">AFSP ' . esc_html( $chapter ) . '</a> › ';
						endif;
						?>
					</span>
					<span class="breadcrumb_last">Events</span>
				</p>
			</div>
		</header>
		<section class="isosld-splash container">
			<?php
			if ( isset( $street_address ) ) :
				echo do_shortcode( '[gmw_single_location address_fields="street, city, state" map_width="100%" map_height="450px" ul_marker=0 distance=0 info_window=0]' );
			else :
				echo do_shortcode( '[gmw_single_location address_fields="city, state" map_width="100%" map_height="450px" ul_marker=0 distance=0 info_window=0]' );
			endif;
			?>
			<h1 class="landing__title container"><?php the_title(); ?></h1>
		</section>
		<section class="event__details container">
			<div class="event__site">
				<?php
				if ( get_field( 'e_start_time' ) ) :
					$start_date  = DateTime::createFromFormat( 'Y-m-d', get_field( 'e_start_date' ) );
					$start_field = get_field_object( 'e_start_time' );
					$start_value = get_field( 'e_start_time' );
					$start_label = $start_field['choices'][ $start_value ];
				endif;
				if ( get_field( 'e_end_time' ) ) :
					$end_date  = DateTime::createFromFormat( 'Y-m-d', get_field( 'e_end_date' ) );
					$end_field = get_field_object( 'e_end_time' );
					$end_value = get_field( 'e_end_time' );
					$end_label = $end_field['choices'][ $end_value ];
				endif;
				?>
				<h3>
					<?php
					if ( '' != get_field( 'sd_custom_date' ) ) :
						echo esc_html( get_field( 'sd_custom_date' ) );
					else :
						echo 'Nov. 23, 2019';
					endif;
					?>
				</h3>
				<?php
				if ( get_field( 'sd_event_start' ) ) : ?>
                <h4>
                    <?php $times =  esc_html( get_field( 'sd_event_start' ) );
                    if ( get_field( 'sd_event_end' ) ) :
                        $times .= ' — ' . esc_html( get_field( 'sd_event_end' ) );
                    endif;
                    echo $times;
                    ?>
                </h4>
                <?php
                endif;
                ?>
				<p>
					<?php
					$event_country = get_field( 'sd_event_country' );
					if ( 'United States of America' === $event_country ) :
						$state = get_field( 'sd_event_state' );
					elseif ( 'Canada' === $event_country ) :
						$state = get_field( 'sd_event_province' );
					else :
						$state = $event_country;
					endif;
					echo esc_html( get_field( 'sd_event_location' ) );
					echo get_field( 'sd_event_location' ) ? '<br />' : '';
					echo get_field( 'sd_event_address_1' ) ? esc_html( get_field( 'sd_event_address_1' ) ) . '<br />' : '';
					echo get_field( 'sd_event_address_2' ) ? esc_html( get_field( 'sd_event_address_2' ) ) . '<br />' : '';
					$address_csz  = get_field( 'sd_event_city' ) ? get_field( 'sd_event_city' ) . ', ' : '';
					$address_csz .= $state ? $state . '&nbsp;&nbsp;' : '';
					$address_csz .= get_field( 'sd_event_zip_code' ) ? get_field( 'sd_event_zip_code' ) : '';
					echo esc_html( $address_csz );
					?>
				</p>
				<?php
				if ( get_field( 'sd_additional_event' ) ) :
					echo wp_kses( get_field( 'sd_additional_event' ), $GLOBALS['allowed_html'] );
				endif;
				// if ( get_field( 'sd_registration_link' ) ) :
				?>
					<a class="features__button" href="https://www.surveymonkey.com/r/99JL2FB" target="_blank">Register today</a>
				<?php // endif; ?>
				<p><i>In the interest of creating a safe space for loss survivors, some events are exclusively for survivors of suicide loss. In addition, many events cannot accommodate children and teens.  If you have any questions, please contact the event host directly.</i></p>
			</div>
			<div class="event__description">
				<?php if ( '' != get_field( 'sd_custom_date' ) ) : ?>
					<p><em>Note: This Survivor Day event will be held on <strong><?php echo esc_html( get_field( 'sd_custom_date' ) ); ?></strong> instead of November 23, 2019.</em></p>
				<?php endif; ?>
				<!-- <p><strong>Online Registration is now closed. If you would like to attend an event please contact the main organizer by email. In addition, a Survivor Day Live program will be streamed on AFSP’s Facebook page at 4:30pm EST on Saturday, November 23rd. This will be an online interactive discussion with a screening of our 2019 Documentary, A Daughter’s Journey.</strong></p> -->
				<p>Each year, the American Foundation for Suicide Prevention supports hundreds of large and small Survivor Day events around the world, in which suicide loss survivors come together to find connection, understanding and hope through their shared experience. While each event is unique and offers various programming, all feature an AFSP-produced documentary that offers a message of growth, resilience and connection.</p>
				<?php
				$reg_begins = strtotime( '07/01/17' );
				$time       = strtotime( date( 'm/d/y' ) );
				if ( $time < $reg_begins ) :
					echo '<p><strong>Attendee registration for this event will begin after July 1.  Please check back for details.</strong></p>';
				endif;
				?>
				<h3>Event Details</h3>
				<br />
				<?php
				if ( false !== get_field( 'sd_contact_event' ) ) :
					$attendee_contact = 'Contact(s) for Inquiries Prior to the Event ';
					$day_contact      = 'Contact(s) on the Day of the Event ';
				else :
					$attendee_contact = 'Contact(s) ';
				endif;
				?>
				<h4><?php echo esc_html( $attendee_contact ); ?></h4>
				<?php
				$contacts = array();
				if ( 'yes' === get_field( 'sd_organizer_publish' ) ) :
					$contacts[] = array(
						'name'  => get_field( 'sd_main_organizer_name' ),
						'email' => get_field( 'sd_main_organizer_email' ),
						'phone' => get_field( 'sd_main_organizer_phone' ),
					);
				elseif ( 'no' === get_field( 'sd_organizer_publish' ) ) :
					$contacts[] = array(
						'name'  => get_field( 'sd_contact_name' ),
						'email' => get_field( 'sd_contact_email' ),
						'phone' => get_field( 'sd_contact_phone' ),
					);
				endif;
				if ( have_rows( 'sd_contact_potential' ) ) :
					while ( have_rows( 'sd_contact_potential' ) ) :
						the_row();
						$contacts[] = array(
							'name'  => get_sub_field( 'sd_contact_potential_name' ),
							'email' => get_sub_field( 'sd_contact_potential_email' ),
							'phone' => get_sub_field( 'sd_contact_potential_phone' ),
						);
				endwhile;
				endif;
				?>
				<p>
					<?php
					if ( ! empty( $contacts ) ) :
						foreach ( $contacts as $contact ) :
							$mailto = 'mailto:' . $contact['email'];
							echo esc_html( $contact['name'] );
							echo '<br /><a href="' . esc_url( $mailto ) . '">' . esc_html( $contact['email'] ) . '</a>';
							echo '<br />' . esc_html( $contact['phone'] );
							if ( end( $contacts ) !== $contact ) :
								echo '<br /><br />';
							endif;
						endforeach;
					endif;
					?>
				</p>
				<?php
				if ( have_rows( 'sd_contact_event' ) ) :
					echo '<h4>' . esc_html( $day_contact ) . '</h4>';
					while ( have_rows( 'sd_contact_event' ) ) :
						the_row();
						$name  = get_sub_field( 'sd_contact_event_name' );
						$email = get_sub_field( 'sd_contact_event_email' );
						$phone = get_sub_field( 'sd_contact_event_phone' );
						?>
						<p>
							<?php
							if ( $name ) :
								echo esc_html( $name );
							endif;
							if ( $email ) :
								$mailto = 'mailto:' . $email;
								echo '<br /><a href="' . esc_url( $mailto ) . '">' . esc_html( $email ) . '</a>';
							endif;
							if ( $phone ) :
								echo '<br />' . esc_html( $phone );
							endif;
							?>
						</p>
					<?php
					endwhile;
				endif;
				?>
				<h4>Food Served</h4>
				<p><?php the_field( 'sd_food' ); ?></p>
				<h4>Charge/Donation</h4>
				<p>
					<?php
					$fee = get_field( 'sd_fee' );
					switch ( $fee ) {
						case 'no':
							echo 'None';
							break;
						case 'donation':
							echo get_field( 'sd_donation' ) !== '' ? 'Suggested donation: ' . esc_html( get_field( 'sd_donation' ) ) : 'Donations welcome';
							break;
						case 'yes':
							echo 'Registration/attendance fee: ' . esc_html( get_field( 'sd_fee_amount' ) );
							break;
					}
					?>
				</p>
				<?php
				$sponsoring_org = get_field( 'sd_sponsoring_organizations' );
				if ( 'None' !== $sponsoring_org[0] ) :
				?>
					<h4>Sponsoring Organization(s)</h4>
						<p>
							<?php
							$sponsors      = get_field( 'sd_sponsoring_organizations' );
							$organizations = '';
							if ( in_array( 'AFSP chapter', $sponsors, true ) ) :
								$chapters = get_field( 'sd_afsp_chapter' );
								$chap_num = 1;
								foreach ( $chapters as $key => $chapter ) :
									if ( $key > 0 ) :
										$organizations .= '<br />';
									endif;
									$url            = get_home_url() . '/chapter/afsp-' . chapter_to_base_url( $chapter );
									$organizations .= '<a href="' . $url . '" target="_blank">AFSP ' . $chapter . '</a>';
								endforeach;
							endif;
							if ( in_array( 'AFSP chapter-in-formation', $sponsors, true ) ) :
								$organizations .= '' === $organizations ? get_field( 'sd_afsp_in_formation' ) : '<br />' . get_field( 'sd_afsp_in_formation' );
							endif;
							if ( in_array( 'AFSP Out of the Darkness walk', $sponsors, true ) ) :
								$organizations .= '' === $organizations ? get_field( 'sd_afsp_ootd' ) : '<br />' . get_field( 'sd_afsp_ootd' );
							endif;
							if ( in_array( 'Other', $sponsors, true ) ) :
								if ( have_rows( 'sd_other_sponsor' ) ) :
									while ( have_rows( 'sd_other_sponsor' ) ) :
										the_row();
										if ( '' !== $organizations ) :
											$organizations .= '<br />';
										endif;
										$org_url        = true === strpos( get_sub_field( 'sd_other_sponsor_website' ), 'http' ) ? get_sub_field( 'sd_other_sponsor_website' ) : 'http://' . get_sub_field( 'sd_other_sponsor_website' );
										$organizations .= get_sub_field( 'sd_other_sponsor_website' ) ? '<a href="' . $org_url . '">' . get_sub_field( 'sd_other_sponsor_name' ) . '</a>' : get_sub_field( 'sd_other_sponsor_name' );
										$count++;
									endwhile;
								endif;
							endif;
							echo $organizations; //phpcs:ignore
							?>

						</p>
				<?php
				endif;
				if ( '' !== get_field( 'sd_additional_information' ) ) :
					echo '<h4>Additional Information</h4>';
					echo wp_kses( get_field( 'sd_additional_information' ), $GLOBALS['allowed_html'] );
				endif;
				?>
			</div>
		</section>



	<?php
	endwhile;
endif;
get_footer();
?>
