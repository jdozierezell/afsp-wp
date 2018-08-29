<?php
/*
Template Name: Template - Business Cards
*/

get_header(); ?>

<?php if(!is_user_logged_in()) :
  // nuthin
else :

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/business_card.css">
<div id="business_card"></div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/business_card.js"></script>

<?php endif; ?>

<?php get_footer(); ?>