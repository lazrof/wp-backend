<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mobile Application HTML5 Template">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php if(is_front_page()): ?>
    <nav class="navbar navbar-expand-lg navbar-light navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png" alt="Logo" width="40" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarToggler">
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container' => '')
            ); ?>
            <div class="ml-auto my-2 my-lg-0">
                <button class="btn btn-dark rounded-pill">Download Now</button>
            </div>
            </div>
        </div>
    </nav>
    <?php else: ?>
    
    <?php endif; ?>