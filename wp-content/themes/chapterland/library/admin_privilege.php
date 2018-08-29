<?php

if ( ! current_user_can( 'publish_tribe_events' ) ) {
    show_admin_bar( false );
}

?>