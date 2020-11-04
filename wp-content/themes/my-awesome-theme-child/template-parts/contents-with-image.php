<?php 

$background_image = get_background_or_default(
    get_field('content_img_background_image'),
    get_stylesheet_directory_uri() . '/assets/img/pattern_1.svg'
);
?>

<div class="position-realive bg-image" style="background-image: url(<?php echo $background_image ?>);">
    <div class="page-section">
        <?php get_template_part('template-parts/partials/left-image-content'); ?>
    </div>

    <div class="page-section">
        <?php get_template_part('template-parts/partials/right-image-content'); ?>
    </div>
</div>

