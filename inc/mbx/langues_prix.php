<?php
// add a metabox post title. under the header

add_action( 'add_meta_boxes', 'init_langues_prix' );
function init_langues_prix()
{
	add_meta_box('langues_prix', 'Prix de la langues', 'langue_cpt_langues_prix', 'langues', 'side', 'default');
}

function langue_cpt_langues_prix($post){
	$data_prefix = get_post_meta($post->ID,'langue_prix',true);	
	echo '<input type="text" name="langue_prix" value="'.(!empty($data_prefix)? $data_prefix:'').'" placeholder="Pix par mots"/>';
}

add_action('save_post','save_cpt_langues_prix');
function save_cpt_langues_prix($post_ID){
	if(isset($_POST['langue_prix']))
    	update_post_meta($post_ID,'langue_prix', esc_html($_POST['langue_prix']));
}
