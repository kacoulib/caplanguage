<?php
  
  add_action( 'init', 'kc_cpt_livreDor' );
  function kc_cpt_livreDor() {
    $labels = array(
      'name' => __( 'livre D\'or'),
      'singular_name' => __( 'livreDor' ),
      'all_items' => __( 'Tous les livre D\'ors')
    );
    
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author'),
      'query_var' => true
    );
    register_post_type('livreDors',$args);
}