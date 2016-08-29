<?php
  
  add_action( 'init', 'kc_cpt_langue' );
  function kc_cpt_langue() {
    $labels = array(
      'name' => __( 'Langues'),
      'singular_name' => __( 'langue' ),
      'all_items' => __( 'Tous nos langues')
    );
    
    $args = array(
      'labels' => $labels,
      'public' => true,
      'taxonomies' => array('category'),
      'has_archive' => true,
      'supports' => array( 'title'),
      'query_var' => true
    );
    register_post_type('langues',$args);
  }