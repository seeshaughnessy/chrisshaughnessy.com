<?php
// This file handles my custom functions

// filter the Gravity Forms button type
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button' id='gform_submit_button_{$form['id']}'><span><i class='fa fa-envelope-o' aria-hidden='true'></i> Send</span></button>";
}