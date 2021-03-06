<?php
/**
 * Template Name: Campaign - 30 Years Strong
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>

<link title="timeline-styles" rel="stylesheet" type="text/css" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
<script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>
<link title="timeline-styles" rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/style_30years.css'; ?>">

<div id='timeline-embed' style="width: 100%; height: 100vh"></div>

<script type="text/javascript">
  // The TL.Timeline constructor takes at least two arguments:
  // the id of the Timeline container (no '#'), and
  // the URL to your JSON data file or Google spreadsheet.
  // the id must refer to an element "above" this code,
  // and the element must have CSS styling to give it width and height
  // optionally, a third argument with configuration options can be passed.
  // See below for more about options.
  
  var options = {
  	hash_bookmark: true
  }

  var timeline = new TL.Timeline('timeline-embed',
    'https://docs.google.com/spreadsheets/d/1fFJOOGcXqQ_VXCi0fCpeqwZbjXPMyrsCUe_SNkl6jKs/edit#gid=0', options);
</script>

				<?php get_footer(); ?>