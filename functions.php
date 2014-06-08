<?php
function remove_open_sans_from_wp_core() {
  wp_deregister_style( 'open-sans' );
  wp_register_style( 'open-sans', false );
  wp_enqueue_style('open-sans','');
  }
add_action( 'init', 'remove_open_sans_from_wp_core' );
?>