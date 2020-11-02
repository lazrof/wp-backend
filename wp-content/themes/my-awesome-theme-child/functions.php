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
        'terms' => __( 'Footer Terms' ),
        'second-header' => __( 'Second Header Menu' ),
      )
    );
  }
add_action( 'init', 'register_my_menus' );


/**
 * Enable Options Page for ACF plugin
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

/*
* Enqueue Assets
*/
require_once 'inc/wp-enqueue.php';