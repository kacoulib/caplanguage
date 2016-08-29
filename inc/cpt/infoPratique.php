<?php
  
  add_action( 'init', 'kc_cpt_infoPratique' );
  function kc_cpt_infoPratique() {
    $labels = array(
      'name' => __( 'info pratique'),
      'singular_name' => __( 'infoPratique' ),
      'all_items' => __( 'info pratique')
    );
    
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author'),
      'query_var' => true
    );
    register_post_type('infoPratique',$args);
  }