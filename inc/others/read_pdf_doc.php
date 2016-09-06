<?php
add_action( 'wp_ajax_convert_to_txt', 'convert_to_txt' );
add_action( 'wp_ajax_nopriv_convert_to_txt', 'convert_to_txt' );

// convert word and pdf files to txt
function convert_to_txt(){
	var_dump($_FILES);
	die();
}