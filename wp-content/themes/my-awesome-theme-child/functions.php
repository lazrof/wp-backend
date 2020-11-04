<?php 

function vd($var){
  var_dump($var);
  die();
}

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

/**
 * Enable Options Page for ACF plugin
 */
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM');
}
add_action('acf/init', 'my_acf_init');

/*
* Enqueue Assets
*/
require_once 'inc/wp-enqueue.php';

/*
* Helper functions
*/
require_once 'inc/helpers-functions.php';