<?php

add_filter( 'tribe_event_label_singular', 'event_display_name' );
function event_display_name() {
	return 'Event';
}
 
add_filter( 'tribe_event_label_plural', 'event_display_name_plural' );
function event_display_name_plural() {
	return 'Events';
}

?>