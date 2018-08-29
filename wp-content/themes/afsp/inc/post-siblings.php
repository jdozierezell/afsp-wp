<?php
// https://wordpress.stackexchange.com/questions/14502/get-next-prev-3-posts-in-relation-to-current-post
function get_post_siblings($type = 'post', $before = 1, $after = 1, $date = '') {
  global $wpdb, $post;

  if (empty($date)) :
    $date = $post->post_date;
  endif;
  $before = absint($before);
  $after = absint($after);
  if (!$before || !$after) :
    return;
  endif;

  $p = $wpdb->get_results( "
    (
      SELECT
        *
      FROM
        $wpdb->posts p1
      WHERE
        p1.post_date < '$date' AND
        p1.post_type = '$type' AND
        p1.post_status = 'publish'
      ORDER by
        p1.post_date DESC
      LIMIT
        $before
    )
    UNION
    (
      SELECT
        *
      FROM
        $wpdb->posts p2
      WHERE
        p2.post_date > '$date' AND
        p2.post_type = '$type' AND
        p2.post_status = 'publish'
      ORDER by
        p2.post_date ASC
      LIMIT
        $after
    )
    ORDER by post_date ASC
  " );
  $i = 0;
  $adjacents = array();
  for ($c = count($p); $i < $c; $i++) {
    if ($i < $before) :
      $adjacents['prev'][] = $p[$i];
    else :
      $adjacents['next'][] = $p[$i];
    endif;
  }

  return $adjacents;
}