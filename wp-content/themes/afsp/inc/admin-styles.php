<?php add_action('admin_head', 'afsp_admin_css');

function afsp_admin_css() {
  global $post_type;
  echo '<style>';
  if(!current_user_can('editor') && !current_user_can('administrator')) :
    echo '#wpseo_meta {display: none;}';
    if(!current_user_can('field_staff')) :
      echo '#pageparentdiv {display: none;}';
    endif;
    if($post_type != 'event') :
      echo '#wppl-meta-box {display: none;}';
    endif;
  endif;
  echo '</style>';
}

?>