<?php
/*
Plugin Name: Ninja Forms Change User Value List Message
Plugin URI: http://wpninjas.net
Description: This plugin allows you to change the user list label
Version: 1.0
Author: WPN Zach
Author URI: http://zachskaggs.com
*/
<?php
 
function nf_change_admin_email_title( $title ) {
    global $ninja_forms_processing;
    if ( 1 == $ninja_forms_processing->get_form_ID() ) {
        $title = 'Here is some stuff';
    }
    return $title;
}
add_filter( 'nf_email_user_values_title', 'nf_change_admin_email_title' );
