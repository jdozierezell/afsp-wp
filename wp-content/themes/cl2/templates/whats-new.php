<?php $new_number = $new_number;
$args = array(
  'post_type' => array('page', 'item'),
  'post_status' => 'publish',
  'posts_per_page' => $new_number,
  'order' => 'DESC',
  'orderby' => 'modified',
  'tax_query' => array(
      array(
          'taxonomy' => 'access_level',
          'field' => 'slug',
          'terms' => role_permissions()
      )
  ),
  'date_query' => array(
      array(
          'column' => 'post_modified_gmt',
          'after' => '3 months ago'
      )
  ),
  'post__not_in' => array(120, 119)
);
$items = new WP_Query($args); 
if ($items->have_posts()) : 
  include(locate_template('templates/page-list.php'));
else : 
  echo "It looks like we haven't created anything new in the past 90 days. If you feel like you're missing something though, don't hesitate to reach out by emailing <a href=\"mailto:jdozier-ezell@afsp.dev.cc?subject=What's New\">Jonathan Dozier-Ezell</a>.";
endif; ?>