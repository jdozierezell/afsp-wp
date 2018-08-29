<?php
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );

    if(is_page("Survivor Day Resources")) :
    	$message = 'The Survivor Day organizer resources page is now only accessible to registered event organizers. <strong>Contact Inge De Taeye, Loss & Healing Programs Manager, at <a href="mailto:idetaeye@afsp.org">idetaeye@afsp.org</a> with questions</strong>.  To view this page, enter the ';
    	$label = "password:";
    else :
    	$message = "To view this protected post, enter the ";
    	$label = "password:";
    endif;

    $o = '<form style="padding: 2rem;" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( $message ) . '
    <label for="' . $label . '">' . __( $label ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

echo get_the_password_form();
?>