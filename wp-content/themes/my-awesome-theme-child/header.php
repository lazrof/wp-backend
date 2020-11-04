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
            
            <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>

            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <?php if (!empty($image[0])):?>
                    <img src="<?php echo $image[0]; ?>" alt="Logo" width="40" >
                <?php else: ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png" alt="Logo 1" width="40" >
                <?php endif; ?>
                
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

            <?php if(!empty( get_field('home_download_button', 'options') )):
                $link = get_field('home_download_button', 'options');
                if( $link )
                    $link_target = $link['target'] ? $link['target'] : '_self';?>

                <div class="ml-auto my-2 my-lg-0">
                    <a 
                        href="<?php echo $link['url']; ?>"
                        class="btn btn-dark rounded-pill"
                        target="<?php echo $link_target ?>">
                        <?php echo $link['title']; ?>
                    </a>
                </div>

            <?php endif; ?>
            </div>
        </div>
    </nav>

    <?php else: ?>
        
    <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                
                <?php if ( !empty(get_field('header_logo', 'options')) ): ?>
                    <img src="<?php the_field('header_logo', 'options') ?>" alt="Logo" width="40" >
                <?php else: ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon-light.png" alt="" width="40">
                <?php endif; ?>
                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <?php wp_nav_menu(array('theme_location' => 'second-header', 'container' => '') ); ?>
                
                <?php if(!empty( get_field('default_download_button', 'options') )):
                    $link = get_field('default_download_button', 'options');
                    if( $link )
                        $link_target = $link['target'] ? $link['target'] : '_self';?>

                    <div class="ml-auto my-2 my-lg-0">
                        <a 
                            href="<?php echo $link['url']; ?>"
                            class="btn btn-primary rounded-pill"
                            target="<?php echo $link_target ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    
    <?php endif; ?>