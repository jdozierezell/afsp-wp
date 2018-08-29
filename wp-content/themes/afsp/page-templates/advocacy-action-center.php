<?php
/**
 * Template Name: Action Center
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>
				
<script language="javascript" src="//www.congressweb.com/cweb/js/jquery.congressweb.iframe.js"></script>
<script language="javascript">$cweb(function(){ $cweb('#iframe').congressweb({ url : '//www.congressweb.com/AFSP', responsive	: true }); });</script>
<div id="iframe"></div>

				<?php get_footer(); ?>