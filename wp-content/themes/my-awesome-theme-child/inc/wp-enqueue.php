<?php 

/**
 * Enqueue scripts and styles.
 */
function my_awesome_theme_statics() {
    
    // Styles
    wp_enqueue_style( 'my-awesome-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style('maicons', get_stylesheet_directory_uri() . '/assets/css/maicons.css');
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/vendor/animate/animate.css');
    wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/vendor/owl-carousel/css/owl.carousel.min.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('mobster', get_stylesheet_directory_uri() . '/assets/css/mobster.css');

    // Scripts
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/vendor/owl-carousel/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/vendor/wow/wow.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script('mobster-js', get_stylesheet_directory_uri() . '/assets/js/mobster.js', array('jquery'), _S_VERSION, true );

    if (is_page_template('template-contact.php')){
        wp_enqueue_script('google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM', array('jquery'), _S_VERSION, true );
        wp_enqueue_script('google-map', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array('jquery', 'google-api'), _S_VERSION, true );
    }

}
add_action( 'wp_enqueue_scripts', 'my_awesome_theme_statics' );

?>