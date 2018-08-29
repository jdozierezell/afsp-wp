<?php add_action( 'admin_init', 'redirect_non_admin_users' );
/**
 * Redirect non-admin users to home page
 *
 * This function is attached to the 'admin_init' action hook.
 */
function redirect_non_admin_users() {
    if ( ! ( current_user_can( 'edit_posts' ) || current_user_can( 'edit_tribe_events' ) ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
        wp_redirect( home_url() );
        exit;
    }
}
