<?php 


// Code available at http://casabona.org/2014/12/add-attachments-wordpress-search-results
function chapterland_attachment_search($query) {
	if($query->is_search) :
		$query->set('post_type', array('post','page','attachment'));
		$query->set('post_status', array('publish','inherit'));
	endif;
	return $query;
}

// add_filter('pre_get_posts', 'chapterland_attachment_search');

?>