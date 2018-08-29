<?php
add_action('init', 'afsp_rss');

function afsp_rss() {
  add_feed('afspfeed', 'afsp_rss_function');
}

function afsp_rss_function() {
  get_template_part('rss', 'afspfeed');
}

?>