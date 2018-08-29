<?php
/**
 * Template Name: Become an Advocate
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
<div class="container">
	<script language="javascript" src="//www.congressweb.com/cweb/js/jquery.congressweb.iframe.js"></script>
	<script language="javascript">$cweb(function(){ $cweb('#iframe').congressweb({ url : '//www.congressweb.com/AFSP/signup/go/id/93F69D0B-A17F-71F6-65506749AE8AC29C', responsive	: true }); });</script>
	<div id="iframe"></div>
</div>

				<?php get_footer(); ?>