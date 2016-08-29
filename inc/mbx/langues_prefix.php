<?php
// add a metabox post title. under the header

add_action( 'add_meta_boxes', 'init_langues_prefix' );
function init_langues_prefix()
{
	add_meta_box('langues_prefix', 'Prefix de la langues', 'langue_cpt_langues_prefix', 'langues', 'side', 'default');
}

function langue_cpt_langues_prefix($post){
	$data_prefix = get_post_meta($post->ID,'langue_prefix',true);	
	echo '<input type="text" name="langue_prefix" value="'.(!empty($data_prefix)? $data_prefix:'').'" placeholder="Ex: Fr ou En"/>';
}

add_action('save_post','save_cpt_langues_prefix');
function save_cpt_langues_prefix($post_ID){
	if(isset($_POST['langue_prefix']))
    	update_post_meta($post_ID,'langue_prefix', esc_html($_POST['langue_prefix']));
}
