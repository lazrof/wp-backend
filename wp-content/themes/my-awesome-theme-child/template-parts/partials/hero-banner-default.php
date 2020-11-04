<?php 
$background_image = !empty( get_field('hero_background') )
? get_field('hero_background')
: get_stylesheet_directory_uri() . '/assets/img/hero_mini.svg';
?>

<div class="page-hero-section bg-image hero-mini" style="background-image: url(<?php echo $background_image ?>);">
    <div class="hero-caption">
        <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-lg-6">
            <h3 class="mb-4 fw-medium"><?php the_title(); ?></h3>
            <nav aria-label="breadcrumb">
                <?php
                if(function_exists('bcn_display')){
                    bcn_display();
                } ?>
            </nav>
            </div>
        </div>
        </div>
    </div>
</div>