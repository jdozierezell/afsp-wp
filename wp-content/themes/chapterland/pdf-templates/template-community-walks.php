<?php
/*
Template Name: Template - Community Walks Flyer
*/

get_header(); ?>

<?php if(!is_user_logged_in()) :
  // nuthin
else :

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/community_walks.css">
<div id="community_walks"></div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/pdf-templates/dist/community_walks.js"></script>

<?php endif; ?>

<?php get_footer(); ?>