<?php
/**
 * Template Name: Survivor Day Data for DD
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
			<th>Date Submitted</th>
			<th>City</th>
			<th>State</th>
			<th>Organizer Name(s) and Contact Information</th>
			<th>First Time Organizer?</th>
			<th>Is Organizer Affiliated With AFSP?</th>
			<th>AFSP Chapter/Walk Sponsor</th>
			<th>Other Sponsoring Organization(s)</th>
		</tr>
	</thead>
	<tbody>
					
				<?php global $post;
					foreach($sd_events as $post) : 
						setup_postdata($post); ?>
						
		<tr>
			<td>
				
				<?php if(!get_field('sd_date_submitted')) :
					echo '05/19/2016';
				else :
					the_field('sd_date_submitted');
				endif; ?>
				
			</td> <!--Event Name-->
			<td>
				
				<?php the_field('sd_event_city');	?>
			
			</td> <!--City-->
			<td>
				
				<?php if(get_field('sd_event_country') === 'United States of America') :
					echo postal_abbreviation(get_field('sd_event_state'));
				elseif(get_field('sd_event_country') === 'Canada') :
					echo postal_abbreviation(get_field('sd_event_province'));
				endif; ?>
				
			</td> <!--State/Province-->
			<td>
				
				<?php $organizers = get_field('sd_main_organizer_name') . '<br /><a href="' . get_field('sd_main_organizer_email') . '">' . get_field('sd_main_organizer_email') . '</a><br />' . get_field('sd_main_organizer_phone');
				if(get_field('sd_main_organizer_name') !== get_field('sd_co_organizer_name')) :
					$organizers .= '<br /><br />' . get_field('sd_co_organizer_name') . '<br /><a href="' . get_field('sd_co_organizer_email') . '">' . get_field('sd_co_organizer_email') . '</a><br />' . get_field('sd_co_organizer_phone');
				endif; 
				echo $organizers; ?>
				
			</td> <!--Organizer Name(s) and Contact Information-->
			<td>
				
				<?php if(get_field('sd_first_time') === 'yes') :
					echo 'Yes';
				else :
					echo 'No';
				endif; ?>
				
			</td> <!--First Time Organizer-->
			<td>
				
				<?php if(get_field('sd_afsp_affiliated') === 'yes') :
					echo 'Yes';
				else :
					echo 'No';
				endif; ?>
				
			</td> <!--Is Organizer Affiliated with AFSP?-->
			<td>
				
				<?php $sponsors = get_field('sd_sponsoring_organizations');
				$organizations = '';
				if(in_array('AFSP chapter', $sponsors)) :
					$chapters = get_field('sd_afsp_chapter');
					$chap_num = 1;
					foreach($chapters as $key=>$chapter) :
						if($key > 0) :
							$organizations .= '<br />';
						endif;
						$organizations .= $chapter;
					endforeach;
				endif;
				if(in_array('AFSP chapter-in-formation', $sponsors)) :
					$organizations .= $organizations === '' ? get_field('sd_afsp_in_formation') : '<br />' . get_field('sd_afsp_in_formation');
				endif;
				if(in_array('AFSP Out of the Darkness walk', $sponsors)) :
					$organizations .= $organizations === '' ? get_field('sd_afsp_ootd') : '<br />' . get_field('sd_afsp_ootd');
				endif;
				echo $organizations; ?>
			</td> <!--AFSP Chapter/Walk Sponsor-->
			<td>
				
				<?php $sponsors = get_field('sd_sponsoring_organizations');
				if(in_array('Other', $sponsors)) :
					if(have_rows('sd_other_sponsor')) : 
						$count = 0;
						$organizations = '';
						while(have_rows('sd_other_sponsor')) : the_row();
							if($count > 0) :
								$organizations .= '<br />';
							endif;
							$organizations .= get_sub_field('sd_other_sponsor_website') ? '<a href="' . get_sub_field('sd_other_sponsor_website') . '">' . get_sub_field('sd_other_sponsor_name') . '</a>' : get_sub_field('sd_other_sponsor_name');
							$count++;
						endwhile;
					endif;
					echo $organizations;
				endif; ?>
			</td> <!--Other Sponsoring Organization(s)-->
		</tr>
		
				<?php endforeach;
					endif;
				endif; ?>
				
	</tbody>
</table>
				
				<?php	// Restore original Post Data
				wp_reset_postdata(); ?>

				<?php get_footer(); ?>