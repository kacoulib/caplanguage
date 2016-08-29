<?php
	add_action('add_meta_boxes','my_lang_metaboxes');
	function my_lang_metaboxes(){
	  //on utilise la fonction add_metabox() pour initialiser une metabox
	  add_meta_box('my_lang', 'langue', 'my_lang_function', 'page', 'side', 'high');
	}

	function my_lang_function($post){
		$val = get_post_meta($post->ID,'my_lang_val',true);
	  	$pages = get_pages(); 
		$html = '<form method="post">';
		$html .= '<select name="lang_champ"><option value="">Select page</option>';
	  	foreach ( $pages as $page ) {
		  	$html .= '<option value="' . $page->ID . '"'.($page->ID == $val ? 'selected' : '').'>';
			$html .= $page->post_title;
			$html .= '</option>';
		  }
		$html .= '</select>';
		echo $html;
	}
	
	add_action('save_post','save_lang_metaboxes');
	function save_lang_metaboxes($post_ID){
		// si la metabox est définie, on sauvegarde sa valeur
	if(isset($_POST['lang_champ'])){
		update_post_meta($post_ID,'my_lang_val', esc_html($_POST['lang_champ']));
	}
}
?>