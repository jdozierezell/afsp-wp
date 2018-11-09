<?php
/**
 * Template Name: Event Grid
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/chapter-pixels' );
$chapter_code    = $_GET['chapter_code'];
$chapter_code    = str_replace( ' ', '', $chapter_code );
$chapter         = afsp_chapter_breadcrumbs( $chapter_code );
$time_adjustment = 100800; // adjusting for Pacific zone events + 1 day
?>
<header class="breadcrumbs__container">
	<div class="breadcrumbs">
		<p id="breadcrumbs">
			<span>
				<a href="<?php echo get_site_url() . '/chapter/' . str_replace( ' ', '-', $chapter ); ?>"><?php echo esc_html( $chapter ); ?></a>
			</span>
			<span class="breadcrumb_last">Events</span>
		</p>
	</div>
</header>
<?php
$id             = get_the_ID();
$current_year   = date( 'Y' );
$previous_limit = mktime( 0, 0, 0, 1, 1, $current_year );
$filename       = get_template_directory() . '/imports/merged.json';
$json           = file_get_contents( $filename );
$upcoming_array = json_decode( $json, true );
$previous_array = $upcoming_array;
// this function sorts the upcoming array from early to late
function sort_upcoming_events( $a, $b ) {
	if ( $a['enddate'] == $b['enddate'] ) :
		return 0;
	endif;
	return ( $a['enddate'] < $b['enddate'] ) ? -1 : 1;
}
// this function sorts the previous array from late to early
function sort_previous_events( $a, $b ) {
	if ( $a['enddate'] == $b['enddate'] ) :
		return 0;
	endif;
	return ( $a['enddate'] < $b['enddate'] ) ? 1 : -1;
}
usort( $upcoming_array['result']['row'], 'sort_upcoming_events' );
usort( $previous_array['result']['row'], 'sort_previous_events' );
?>
<div class="events-grid">Upcoming <?php echo esc_html( $chapter ); ?> Events</div>
<section class="events__grid container--large">
	<?php
	$empty_upcoming = true;
	$empty_previous = true;
	foreach ( $upcoming_array['result']['row'] as $data ) {
		$trim_date     = $data['startdate'];
		$trim_date     = strpos( $trim_date, 'T' ) ? substr( $trim_date, 0, strpos( $trim_date, 'T' ) ) : $trim_date;
		$start_date    = strtotime( $trim_date );
		$trim_date     = $data['enddate'];
		$trim_date     = strpos( $trim_date, 'T' ) ? substr( $trim_date, 0, strpos( $trim_date, 'T' ) ) : $trim_date;
		$end_date      = strtotime( $trim_date );
		$name          = $data['name'];
		$city          = $data['city'];
		$state         = $data['state'];
		$record_id     = $data['recordid'];
		$program_code  = $data['programcode'];
		$chapter_codes = $data['customfieldcode1']; // variable for the chapter codes
		$chapter_codes = str_replace( ' ', '', $chapter_codes );
		if ( is_array( $chapter_codes ) ) : // check to see if this event is an event from our site, and thus an array
			if ( in_array( $chapter_code, $chapter_codes ) ) : // check to see if this event is sponsored by this chapter
				$chapter_codes = $chapter_code; // if yes, null the array and just use the chapter code for this chapter
			endif;
		endif;
		if ( $chapter_codes === $chapter_code && time() - $time_adjustment <= $end_date ) :
			if ( 'AFSP' !== $program_code ) :
				$link = 'http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=' . $record_id;
			else :
				$link = $data['sitelink'];
			endif;
			?>
			<a class="event__item <?php echo $record_id; ?>" href="<?php echo $link; ?>">
				<table class="event__info">
					<tbody>
						<tr>
							<td class="event__title"><b><?php echo $name; ?></b> <br /> <br /> <?php echo date( 'F jS', $start_date ); ?></td>
						</tr>
					</tbody>
				</table>	
			</a>  
			<?php
			$empty_upcoming = false;
		endif;
	}
	?>
</section>         
<?php if ( $empty_upcoming ) : ?>
<p class="no-events">There are no upcoming events scheduled at this time.</p>
<?php endif; ?>
<div class="events-grid">Previous <?php echo esc_html( $current_year . ' ' . $chapter ); ?> Events</div>
<section class="events__grid container--large">       
	<?php
	foreach ( $previous_array['result']['row'] as $data ) {
		$trim_date     = $data['enddate'];
		$trim_date     = strpos( $trim_date, 'T' ) ? substr( $trim_date, 0, strpos( $trim_date, 'T' ) ) : $trim_date;
		$end_date      = strtotime( $trim_date );
		$name          = $data['name'];
		$city          = $data['city'];
		$state         = $data['state'];
		$record_id     = $data['recordid'];
		$program_code  = $data['programcode'];
		$chapter_codes = $data['customfieldcode1']; // variable for the chapter codes
		$chapter_codes = str_replace( ' ', '', $chapter_codes );
		if ( is_array( $chapter_codes ) ) : // check to see if this event is an event from our site, and thus an array
			if ( in_array( $chapter_code, $chapter_codes ) ) : // check to see if this event is sponsored by this chapter
				$chapter_codes = $chapter_code; // if yes, null the array and just use the chapter code for this chapter
			endif;
		endif;
		if ( $chapter_codes === $chapter_code && ( time() - $time_adjustment >= $end_date && $end_date >= $previous_limit ) ) :
			if ( 'AFSP' !== $program_code ) :
				$link = 'http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=' . $record_id;
			else :
				$link = $data['sitelink'];
			endif;
			?>
			<a class="event__item <?php echo $record_id; ?>" href="<?php echo esc_url( $link ); ?>">
				<table class="event__info">
					<tbody>
						<tr>
							<td class="event__title"><?php echo $name; ?></td>
						</tr>
					</tbody>
				</table>	
			</a>   
			<?php
			$empty_previous = false;
		endif;
	}
	?>
</section>  
<?php if ( $empty_previous ) : ?>
<p class="no-events">There are no previous events to display at this time.</p>
<?php
endif;
get_footer();
?>
