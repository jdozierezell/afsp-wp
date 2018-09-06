<?php

add_action('init', 'register_hourly_merge_event');

function register_hourly_merge_event() {
  if(!wp_next_scheduled('merge_events')) {
    wp_schedule_event(time(), 'hourly', 'merge_events');
  }
}

add_action('merge_events', 'afsp_merge_events');

function afsp_merge_events() {

  $slug = 'event';

  function afsp_get_post_location_from_db( $post_id ) { // this is essentially a function stolen from Geo My WP. Wordpress was having trouble finding it. So I helped.

    global $wpdb;

    $location = wp_cache_get( 'gmw_post_location', $group = $post_id );

    if ( false === $location ) {

    	$location = $wpdb->get_row(
    			$wpdb->prepare("
    					SELECT * FROM {$wpdb->prefix}places_locator
    					WHERE `post_id` = %d", array( $post_id )
    			) );

        wp_cache_set( 'gmw_post_location', $location, $post_id );
    }

    return ( isset( $location ) ) ? $location : false;
  }

  // if($slug != $post->post_type) {
  //   return;
  // }

  // $notWP = 'http://afsp.staging.wpengine.com/wp-content/themes/afsp';
  // $filename = $notWP . '/imports/donor-drive.xml';

	$filename = get_template_directory() . '/imports/donor-drive.xml';

  libxml_use_internal_errors(true);
  $xml = simplexml_load_file($filename);

  $json = json_encode($xml);
  $array = json_decode($json, true);

  if(!$array) : // make sure donor drive isn't being f*cking stupid
    return;
  endif;

  $rowid = 0;

  foreach($array['result']['row'] as $row) {
    if($row['recordid'] > $rowid) {
      $rowid = $row['recordid'];
    }
  }

  // WP_Query arguments
  $args = array (
    'post_type'              => array( 'event','survivor_day' ),
    'post_status'            => array( 'publish' ),
    'posts_per_page'         => -1
  );

  // The Query
  $events = new WP_Query( $args );

  // The Loop
  if ( $events->have_posts() ) :
    $counter = 0;
    while ( $events->have_posts() ) : $events->the_post(); $counter++;

      $chapter_codes  = [];
      $post_id        = get_the_ID();
      $post_type      = get_post_type($post_id);
      $event_loc      = afsp_get_post_location_from_db($post_id);

      if($post_type === 'event') : // if this is an event post type

        $terms = get_field('e_chapter');
        if (is_array($terms)) :
          foreach ($terms as $term) :
            $chapter = $term->name;
            $chapter_codes[] = chapter_name_to_code($chapter);
          endforeach;
        else :
          $chapter = $terms->name;
          $chapter_codes[] = chapter_name_to_code($chapter);
        endif;

        if(!get_field('e_start_time')) :
          $start_time = '00:00:00-0500';
        else :
          $start_time = get_field('e_start_time');
        endif;
        if(!get_field('e_end_time')) :
          $end_time = '00:00:00-0500';
        else :
          $end_time = get_field('e_end_time');
        endif;


        $array['result']['row'][] = array(

          'name' => get_the_title(),
          'startdate' => get_field('e_start_date') . 'T' . $start_time,
          'city' => $event_loc->city,
          'state' => $event_loc->state,
          'customfieldcode1' => $chapter_codes,
          'programcode' => 'AFSP',
          'enddate' => get_field('e_end_date') . 'T' . $end_time,
          'recordid' => $rowid + $counter,
          'postid' => $post_id,
          'posttype' => $post_type,
          'sitelink' => get_permalink()

        );

      elseif($post_type === 'survivor_day') : // if this is an event post type

        $chapters = get_field('sd_afsp_chapter');

        if(is_array($chapters)) :
          foreach ($chapters as $chapter) :
            $chapter = 'AFSP ' . $chapter; // need to add AFSP because it isn't in the field dropdown
            $chapter_codes[] = chapter_name_to_code($chapter);
          endforeach;
        else :
          $chapter = 'AFSP ' . $chapter; // need to add AFSP because it isn't in the field dropdown
          $chapter_codes[] = chapter_name_to_code($chapter);
        endif;


        if(get_field('sd_custom_date') != '') :
          $sd_date = get_field('sd_custom_date', false, false);
          $sd_date = new DateTime($sd_date);
          $sd_date_month = $sd_date->format('m');
          $sd_date_day = $sd_date->format('d');
          $sd_date_year = $sd_date->format('Y');
          $sd_date = mktime(0,0,0,date('m',$sd_date_month),date('d',$sd_date_day),date('Y',$sd_date_year));
        else :
          $sd_date = date('Y-m-d', mktime(0,0,0,11,17,2018));
        endif;

        $start_time = '00:00:00-0500';
        $end_time = '00:00:00-0500';

        $array['result']['row'][] = array(

          'name' => 'Survivor Day: ' . get_the_title(),
          'startdate' => $sd_date . 'T' . $start_time,
          'city' => $event_loc->city,
          'state' => $event_loc->state,
          'customfieldcode1' => $chapter_codes,
          'programcode' => 'AFSP',
          'enddate' => $sd_date . 'T' . $end_time,
          'recordid' => $rowid + $counter,
          'postid' => $post_id,
          'posttype' => $post_type,
          'sitelink' => get_permalink()

        );

      endif;

    endwhile;

echo '<pre>';
var_dump($array['result']['row']);
echo '</pre>';

  endif;

  // Restore original Post Data
  wp_reset_postdata();

  $json_file = get_template_directory() . '/imports/merged.json';

  if(!file_exists($filename)) {
    echo 'File not found.';
  }

  $fp = fopen($json_file, 'w');

  if(!$fp) {
      echo 'File open failed.';
  }

  fwrite($fp, json_encode($array));
  fclose($fp);

}

?>
