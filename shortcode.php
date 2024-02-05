<?php
/**
 * This is the file for the shortcode
 */

add_shortcode( 'jorge-contact-form', 'jorge_render_contact_form' );
function jorge_render_contact_form( $att, $content ) {

	ob_start();
	require_once plugin_dir_path( __FILE__ ) . '/jorge-contact-form-template.php';
	return ob_get_clean();

}
