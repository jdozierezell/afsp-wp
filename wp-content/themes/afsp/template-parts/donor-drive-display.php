<?php
/**
 * Template Part: Donor Drive Display
 *
 * Displays the latest event for the chapter
 *
 * @package afsp
 */

$chapter_code    = get_field( 'caf_donor_drive_chapter_code' );
$chapter_code    = str_replace( ' ', '', $chapter_code );
$filename        = get_template_directory() . '/imports/merged.json';
$time_adjustment = 100800; // adjusting for Pacific zone events + 1 day.
$json            = file_get_contents( $filename );
$array           = json_decode( $json, true );
$featured        = get_field( 'ch_event' );
$empty           = true;
foreach ( $array['result']['row'] as $data ) {
	$trim_date     = $data['startdate'];
	$trim_date     = strpos( $trim_date, 'T' ) ? substr( $trim_date, 0, strpos( $trim_date, 'T' ) ) : $trim_date;
	$date          = strtotime( $trim_date );
	$chapter_codes = $data['customfieldcode1']; // variable for the chapter codes
	$chapter_codes = str_replace( ' ', '', $chapter_codes );
	$event_id      = $data['recordid'];
	if ( is_array( $chapter_codes ) ) : // check to see if this event is an event from our site, and thus an array
		if ( in_array( $chapter_code, $chapter_codes ) ) : // check to see if this event is sponsored by this chapter
			$chapter_codes = $chapter_code; // if yes, null the array and just use the chapter code for this chapter
		endif;
	endif;
	if ( $event_id === $featured && ( $chapter_code === $chapter_codes && time() - $time_adjustment <= $date ) ) :
		$name          = $data['name'];
		$city          = $data['city'];
		$state         = $data['state'];
		$record_id     = $data['recordid'];
		$program_code  = $data['programcode'];
		$empty         = false;
		$afsp_link     = isset( $data['sitelink'] ) ? $data['sitelink'] : '';
		$earliest_date = $date;
		break;
	endif;
	if ( ( ! isset( $earliest_date ) || $earliest_date > $date ) && ( $chapter_codes === $chapter_code && time() - $time_adjustment <= $date ) ) :
		$name          = $data['name'];
		$city          = $data['city'];
		$state         = $data['state'];
		$record_id     = $data['recordid'];
		$program_code  = $data['programcode'];
		$empty         = false;
		$afsp_link     = isset( $data['sitelink'] ) ? $data['sitelink'] : '';
		$earliest_date = $date;
	endif;
} ?>
<div class="chapter__events">
	<h2>Chapter Events</h2>
	<?php
	if ( false === $empty ) :
		if ( 'CW' === $program_code ) :
			?>
			<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/2015-OOTDW-DC_096.jpg?&crop=faces&fit=crop&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/2015-OOTDW-DC_096.jpg?&crop=faces&fit=crop&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/2015-OOTDW-DC_096.jpg?&crop=faces&fit=crop&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/2015-OOTDW-DC_096.jpg?&crop=faces&fit=crop&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/2015-OOTDW-DC_096.jpg?&crop=faces&fit=crop&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" />
		<?php elseif ( 'CAMPUS' === $program_code ) : ?>
			<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/JKP10105edit.jpg?&crop=faces&fit=crop&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/JKP10105edit.jpg?&crop=faces&fit=crop&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/JKP10105edit.jpg?&crop=faces&fit=crop&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/JKP10105edit.jpg?&crop=faces&fit=crop&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/JKP10105edit.jpg?&crop=faces&fit=crop&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" />
		<?php elseif ( 'NONWALK' === $program_code ) : ?>
			<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/OOD-Walkers-Walking-3-of-17.jpg?&crop=faces&fit=crop&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/OOD-Walkers-Walking-3-of-17.jpg?&crop=faces&fit=crop&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/OOD-Walkers-Walking-3-of-17.jpg?&crop=faces&fit=crop&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/OOD-Walkers-Walking-3-of-17.jpg?&crop=faces&fit=crop&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/OOD-Walkers-Walking-3-of-17.jpg?&crop=faces&fit=crop&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" />
		<?php elseif ( 'AFSP' === $program_code ) : ?>
			<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/iStock_000023568318_Medium.jpg?&crop=faces&fit=crop&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/iStock_000023568318_Medium.jpg?&crop=faces&fit=crop&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/iStock_000023568318_Medium.jpg?&crop=faces&fit=crop&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/iStock_000023568318_Medium.jpg?&crop=faces&fit=crop&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/iStock_000023568318_Medium.jpg?&crop=faces&fit=crop&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" />
		<?php else : ?>
			<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" /> 
		<?php
		endif;
if ( 'AFSP' !== $program_code ) :
	$link = 'https://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=' . $record_id;
else :
	$link = $afsp_link;
endif;
		?>
		<a href="<?php echo esc_url( $link ); ?>">
			<h3><?php echo esc_html( $name ); ?></h3>
			<p>
				<?php
				echo date( 'F jS', $earliest_date );
				if ( [] !== $city || [] !== $state ) :
					echo '&nbsp;&nbsp;|&nbsp;&nbsp;' . esc_html( $city ) . ', ' . esc_html( $state );
				endif;
				?>
			</p>
		</a>
		<form class="chapter__events-form" method="get" action="<?php get_home_url(); ?>/our-work/chapters/events">
			<input type="hidden" name="chapter_code" value="<?php echo get_field( 'caf_donor_drive_chapter_code' ); ?>" />		
			<input class="features__button" type="submit" value="See all events"/>
		</form>
	<?php else : ?> 
		<img src="https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=700&h=350" srcset="https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=700&h=350 700w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=350&h=175 350w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=233&h=116 233w, https://afsp.imgix.net/wp-content/uploads/2016/01/Francis.Website.No-events.jpg?&rect=0,105,968,484&w=175&h=87 175w" class="imgix-fluid" alt="' . $image['alt'] . '" sizes="100vw" />   
		<h3>There are no events scheduled at this time.</h3>
		<p>&nbsp;</p>
		<form class="chapter__events-form" method="get" action="<?php get_home_url(); ?>/our-work/chapters/events">
			<input type="hidden" name="chapter_code" value="<?php echo get_field( 'caf_donor_drive_chapter_code' ); ?>" />
			<input class="features__button" type="submit" value="See past events"/>
		</form>
	<?php endif; ?>
	<hr>
</div>
