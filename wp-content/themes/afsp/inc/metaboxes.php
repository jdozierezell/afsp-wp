<?php 
  function afsp_remove_meta_boxes() {

      remove_meta_box('_wppl_street', 'chapter', 'high');
      remove_meta_box('_wppl_apt', 'chapter', 'high');
      remove_meta_box('_wppl_city', 'chapter', 'high');
      remove_meta_box('_wppl_state', 'chapter', 'high');
      remove_meta_box('_wppl_zipcode', 'chapter', 'high');
      remove_meta_box('_wppl_country', 'chapter', 'high');
      remove_meta_box('_wppl_phone', 'chapter', 'high');
      remove_meta_box('_wppl_fax', 'chapter', 'high');
      remove_meta_box('_wppl_email', 'chapter', 'high');
      remove_meta_box('_wppl_website', 'chapter', 'high');
      remove_meta_box('_wppl_enter_lat', 'chapter', 'high');
      remove_meta_box('_wppl_enter_long', 'chapter', 'high');
      remove_meta_box('_wppl_lat', 'chapter', 'high');
      remove_meta_box('_wppl_long', 'chapter', 'high');
      remove_meta_box('_wppl_address', 'chapter', 'high');
      remove_meta_box('_wppl_days_hours', 'chapter', 'high');
      remove_meta_box('_wppl_state_long', 'chapter', 'high');
      remove_meta_box('_wppl_country_long', 'chapter', 'high');
      remove_meta_box('_wppl_formatted_address', 'chapter', 'high');
      remove_meta_box('_wppl_street_number', 'chapter', 'high');
      remove_meta_box('_wppl_street_name', 'chapter', 'high');

  }
  add_action('add_meta_boxes', 'afsp_remove_meta_boxes', 40);


?>