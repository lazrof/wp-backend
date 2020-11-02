<?php 

/**
 * Registering Custom Menus
 */
function register_my_menus() {
    register_nav_menus(
      array(
        'pages' => __( 'Footer Pages' ),
        'company' => __( 'Footer Company' ),
        'contact' => __( 'Footer Contact' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

/*
* Enqueue Assets
*/
require_once 'inc/wp-enqueue.php';