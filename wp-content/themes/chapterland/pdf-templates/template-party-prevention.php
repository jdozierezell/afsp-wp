<?php
/*
Template Name: Template - Party for Prevention Flyer
*/

get_header(); ?>

<?php if(!is_user_logged_in()) :
  // nuthin
else :

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/party_prevention.css">
<div id="party_prevention"></div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/party_prevention.js"></script>

<?php endif; ?>

<?php get_footer(); ?>