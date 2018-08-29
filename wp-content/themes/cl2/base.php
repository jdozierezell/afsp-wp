<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

// $access = get_field('iap_access_level');
// $access_level = $access->slug;

// function go_to_whats_new() {
//   wp_redirect(get_home_url() . '/whats-new');
// }

// $page_ID = get_the_ID();
// $access_level = '';
// if (has_term('volunteer', 'access_level', $page_ID)) : 
//   $access_level = 'volunteer';
// elseif(has_term('board', 'access_level', $page_ID)) :
//   $access_level = 'board';
// elseif(has_term('staff', 'access_level', $page_ID)) :
//   $access_level = 'staff';
// endif;
// if(!is_page('whats-new') && $access_level !== '') :
//   $user = wp_get_current_user();
//   $user_level = $user->roles[0];
//   if(role_to_number($access_level) > role_to_number($user_level)) :
//     go_to_whats_new();
//   endif;
// endif;


if (!is_user_logged_in()) :
  auth_redirect();
endif; ?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="page-content" role="document">
      <?php if (!is_page('login')) : ?>
        <?php get_template_part('templates/navigation'); ?> 
      <?php endif; ?>
      <?php include Wrapper\template_path(); ?>
      <?php // Commented out below because site is not currently using sidebars. Uncomment to use sidebars if needed.
      //if (Setup\display_sidebar()) : ?>
        <!-- <aside class="sidebar"> -->
          <?php // include Wrapper\sidebar_path(); ?>
        <!-- </aside>/.sidebar -->
      <?php //endif; ?>
    </div><!-- /.wrap -->
    <script> 
      var $buoop = {notify:{e:11,f:-4,o:-4,s:-2,c:-4},insecure:true,unsupported:true,api:5}; 
      function $buo_f(){ 
      var e = document.createElement("script"); 
      e.src = "//browser-update.org/update.min.js"; 
      document.body.appendChild(e);
      };
      try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
      catch(e){window.attachEvent("onload", $buo_f)}
    </script>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
