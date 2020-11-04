<?php
$show_content = get_field('show_right_image_content');
$content = get_field('rigth_image_content');

if( $show_content && $content): 

    $image = $content['image'];
    if(empty($image)){
        $image = array(
            'url' => get_stylesheet_directory_uri() . '/assets/img/app_preview_3.png', 
            'alt' => 'Right Content Image');
    }

    $cta =  $content['link'];
    if( $cta ){
        $cta_url = $cta['url'];
        $cta_title = $cta['title'];
        $cta_target = $cta['target'] ? $cta['target'] : '_self';
    } 
    $cta_bg_color = $content['link_color']; ?>

    <?php if( $cta_bg_color ): ?>
    <style>
        .cta-right {
            color: <?php echo $cta_bg_color ?>;
            border-color: <?php echo $cta_bg_color ?>;
        }

        .cta-right:hover {
            background-color: <?php echo $cta_bg_color ?>;
            border-color: <?php echo $cta_bg_color ?>;
        }
    </style>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
                <?php echo $content['content'] ?>
                <?php if( $cta ): ?>
                <a 
                    href="<?php echo $cta_url; ?>" 
                    target="<?php echo $cta_target; ?>" 
                    class="btn btn-outline-primary rounded-pill cta-right">
                    <?php echo $cta_title; ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-5 py-3">
                <div class="img-place mobile-preview shadow wow zoomIn">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>