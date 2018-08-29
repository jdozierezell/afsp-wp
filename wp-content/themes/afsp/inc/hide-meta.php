<?php 
function thats_no_meta() {
  remove_meta_box('wppl-meta-box','chapter','normal');
}
if(!current_user_can('manage_options')) {
 // add_action('do_meta_boxes','thats_no_meta');
}
?>