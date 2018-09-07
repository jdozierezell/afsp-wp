<?php
/**
 * Add ACF fiels to geomywp for frontend form use
 *
 * @category afsp
 * @package  afsp
 * @author   "Jonathan Dozier-Ezell" <jdozier-ezell@oldafsp.dev.cc>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU Public License
 * @link     https://github.com/jdozierezell/afsp
 * @since    1.0
 */

add_action( 'acf/save_post', 'save_acf_gmw' );

/**
 * Saves ACF field data to GMW function gmw_update_post_location()
 *
 * @param int $post_id ID of current post being updated.
 *
 * @return null
 */
function save_acf_gmw( $post_id ) {
	$post_type = get_post_type();
	$title     = get_the_title();
	// phpcs:disable
	if ( isset( $_POST['acf'] ) ) :
		$acf = $_POST['acf'];
	endif;
	// phpcs:enable
	if ( ! isset( $acf ) ) :
		return;
	endif;
	// die(print_r($acf));
	// setup arguments for GEO my WP geocoder function.
	if ( 'support_group' === $post_type || 'Submit a New Support Group' === $title ) :
		$country  = $acf['field_54ca9f07289a8'];
		$state    = $acf['field_54ca9e6f289a7'];
		$province = $acf['field_54caa059289a9'];
		$city     = $acf['field_54ca9e62289a6'];
		if ( false === $acf['field_54f4b2cd7e5f1'] ) :
			$street_address = $acf['field_54ca9e54289a5'];
		endif;
		$zipcode = $acf['field_54caa079289aa'];
	elseif ( 'survivor_day' === $post_type || 'Survivor Day Event Application Form' === $title || 'Survivor Day Event Information Form' === $title ) :
		$country  = $acf['field_5707c4d4b1d3a'];
		if ( isset( $acf['field_5707c4e0b1d3e'] ) ) :
			$state = $acf['field_5707c4e0b1d3e'];
		endif;
		if ( isset( $acf['field_5707c4e5b1d3f'] ) ) :
			$province = $acf['field_5707c4e5b1d3f'];
		endif;
		$city     = $acf['field_5707c4ddb1d3d'];
		// TBD is screwing things up, so...
		if ( $acf['field_5707c4d6b1d3b'] && 'TBD' !== $acf['field_5707c4d6b1d3b'] && ' ' !== $acf['field_5707c4d6b1d3b'] && '' !== $acf['field_5707c4d6b1d3b'] ) :
			$street_address = $acf['field_5707c4d6b1d3b'];
		endif;
		$zipcode = $acf['field_5707c4e9b1d40'];
	endif;
	if ( 'Canada' === $country ) :
		$state = $province;
	endif;
	// include the file with the geocode function.
	include_once GMW_PT_PATH . '/includes/gmw-posts-locator-functions.php';
	$location = array(
		'city'    => $city,
		'state'   => $state,
		'zipcode' => $zipcode,
		'country' => $country,
	);
	if ( $street_address ) :
		$location['street'] = $street_address;
	endif;
	// $location = wp_json_encode( $location );
	// the function.
	gmw_update_post_location( $post_id, $location );
}

add_filter( 'gmw_pt_location_query_clauses', 'gmw_orderby_city', 10, 2 );

/**
 *
 * Sort items by state if no address is given
 *
 * @param array $clauses An array containing the filter clauses.
 * @param array $gmw Array that contains all gmw data.
 */
function gmw_orderby_city( $clauses, $gmw ) {
	// phpcs:disable
	if ( isset( $_GET['address'] ) ) :
		$address = $_GET['address'];
	endif;
	// phpcs:enable
	if ( ! isset( $address[0] ) ) :
		$clauses['orderby'] = ' gmwlocations.state ASC';
	endif;
	return $clauses;
}

add_filter( 'gmw_pt_location_query_clauses', 'gmw_country_state_filter', 99, 2 );

/**
 *
 *  Add filter results by country or state
 *
 * @param array $clauses An array containing the filter clauses.
 * @param array $gmw Array that contains all gmw data.
 */
function gmw_country_state_filter( $clauses, $gmw ) {
	global $wpdb;

	/*
	* check if a state value exists.
	* everytime the state value exists in URL the search query below will take over
	* and filter results  based on that state.
	* That is the reason we keep giving the states select box the default value on page load.
	* To prevent visitors from having to manually change it back to deafult when
	* they want to do a proximity search based on address instead of state
	*/
	// phpcs:disable
	if ( isset( $_GET ) ) :
		$get = $_GET;
	endif;
	// phpcs:enable
	if ( ( ! isset( $get['gmw_state'] ) || empty( $get['gmw_state'] ) ) && ( ! isset( $get['gmw_country'] ) || empty( $get['gmw_country'] ) ) ) :
		return $clauses;
	endif;
	// filter the tables clauses.
	$clauses['acf'] = ' wp_posts.*, gmwlocations.* ';
	if ( isset( $get['gmw_country'] ) ) :
		if ( '' !== $get['gmw_country'] ) :
			// filter the WHERE clause to look for locations with based on their country.
			$clauses['where'] .= $wpdb->prepare( ' AND gmw_locations.country_name = %s', $get['gmw_country'] );
		endif;
	elseif ( isset( $get['gmw_state'] ) ) :
		if ( '' !== $get['gmw_state'] ) :
			// filter the WHERE clause to look for locations with based on their state.
			$clauses['where'] .= $wpdb->prepare( ' AND gmw_locations.region_name = %s', $get['gmw_state'] );
		endif;
	endif;
	$clauses['groupby'] = "$wpdb->posts.ID";
	// order results by state name since we cannot order by distance.
	$clauses['orderby'] = "$wpdb->posts.post_title";
	unset( $clauses['having'] );
	return $clauses;
}

/**
 *
 * Add dropdown select for state search
 *
 * @param array $gmw Array that contains all gmw data.
 */
function gmw_states_dropdown( $gmw ) {
	global $wpdb;
	// get states and countries that exist in locations table in database.
	// note that DISTINCT is being used to make sure each state called only once.
	if ( 'Find Your Chapter' === get_the_title() || 'Chapters' === get_the_title() ) :
		$type = 'chapter';
	elseif ( 'Find a Support Group' === get_the_title() ) :
		$type = 'support_group';
	elseif ( 'Find a Survivor Day Event' === get_the_title() || 'Survivor Day' === get_the_title() ) :
		$type = 'survivor_day';
	endif;
	$states               = $wpdb->get_col("
           	SELECT DISTINCT `region_name`
           	FROM {$wpdb->prefix}gmw_locations as locations
          	JOIN {$wpdb->prefix}posts as posts
          	ON locations.object_id = posts.ID
          	WHERE posts.post_type = '" . $type . "' AND posts.post_status = 'publish' AND `country_code` = 'US' AND `region_name` IS NOT NULL
          	and trim(coalesce(region_name, '')) <>''
          	ORDER BY `region_name`");
	$provinces            = $wpdb->get_col("
			SELECT DISTINCT `region_name`
			FROM {$wpdb->prefix}gmw_locations as locations
			JOIN {$wpdb->prefix}posts as posts
          	ON locations.object_id = posts.ID
          	WHERE posts.post_type = '" . $type . "' AND posts.post_status = 'publish' AND `country_code` = 'CA' AND `region_name` IS NOT NULL
          	and trim(coalesce(region_name, '')) <>''
          	ORDER BY `region_name`");
	$countries            = $wpdb->get_col("
           	SELECT DISTINCT `country_name`
           	FROM {$wpdb->prefix}gmw_locations as locations
          	JOIN {$wpdb->prefix}posts as posts
          	ON locations.object_id = posts.ID
           	WHERE posts.post_type = '" . $type . "' AND posts.post_status = 'publish' AND NOT `country_code` = 'US' AND NOT `country_code` = 'CA'
           	and trim(coalesce(country_name, '')) <>''
			   ORDER BY `country_name`");
	?>
	<!-- create the states select box -->
	<div class="find-chapter__dropdown">
		<label for="gmw_state">Or search by</label>
		<select id="state" class="gmw-state-dropdown" name="gmw_state">
			<?php
			$option_name  = ' US State or Territory';
			$state_set    = isset( $states[0] );
			$province_set = isset( $provinces[0] );
			if ( $province_set ) :
				$option_name = 'US State or CA Province';
			endif;
			?>
			<option value="" selected="selected"><?php echo esc_html( $option_name ); ?></option>
			<?php
			if ( $state_set ) :
				if ( $province_set ) :
					?>
					<optgroup label="US States and Territories">
				<?php
				endif;
				// loop through states and add to the select box.
				foreach ( $states as $state ) {
					$value = $state; // create $value variable so that later changes to $state don't effect option value.
					if ( 'VI' === $state ) : // change $state variable for Virgin Islands because country_name in this case is same as country_short.
						$state = 'Virgin Islands';
					endif;
					?>
					<option value="<?php echo esc_attr( $value ); ?>"><?php echo esc_html( $state ); ?></option>
				<?php
				}
				if ( $province_set ) :
					?>
					</optgroup>
				<?php
				endif;
			endif;
			if ( $province_set ) :
				?>
				<optgroup label="Canadian Provinces">
					<?php foreach ( $provinces as $province ) { // loop through provinces and add to the select box. ?>
						<option value="<?php echo esc_attr( $province ); ?>"><?php echo esc_html( $province ); ?></option>
					<?php } ?>
				</optgroup>
			<?php endif; ?>
		</select>
	</div>
	<?php if ( 'survivor_day' === $type || 'support_group' === $type && '' !== $countries[0] ) : ?>
		<div class="find-chapter__dropdown">
			<label for="gmw_country">or</label>
			<select id="country" class="gmw-state-dropdown" name="gmw_country">
				<option value="" selected="selected">Country Outside US &amp; CA</option>
				<?php foreach ( $countries as $country ) : // loop through countries and add to the select box. ?>
					<option value="<?php echo esc_attr( $country ); ?>"><?php echo esc_html( $country ); ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	<?php endif; ?>
	<script>
		jQuery('select[name="gmw_state"]').on('change', function() {
			jQuery('select[name="gmw_country"]').remove();
			jQuery('label[for="gmw_country"]').remove();
			jQuery(this).closest('form').submit();
		});
	</script>
<?php
}
?>
