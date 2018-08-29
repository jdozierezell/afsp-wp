<?php

/*
 * Creating a custom setting to add standard notification email addresses. 
 *
 */

// code for the below snippet comes from https://trepmal.com/2011/03/07/add-field-to-general-settings-page/

$new_general_setting = new new_general_setting();

class new_general_setting {
    function __construct( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function new_general_setting( ) {
        self::__construct();
    }
    function register_fields() {
        register_setting( 'general', 'notify_email', 'esc_attr' );
        add_settings_field('notify_email', '<label for="notify_email">'.__('Comma-separated list of emails to be notified upon updates.' , 'notify_email' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'notify_email', '' );
        echo '<input type="text" id="notify_email" name="notify_email" style="width:100%" value="' . $value . '" />';
    }
}

?>