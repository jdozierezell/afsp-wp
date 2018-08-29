<?php

function wpseo_remove_home_breadcrumb($links)
{
	if ($links[0]['url'] == get_home_url()) { array_shift($links); }
	return $links;	
}
add_filter('wpseo_breadcrumb_links', 'wpseo_remove_home_breadcrumb');

?>