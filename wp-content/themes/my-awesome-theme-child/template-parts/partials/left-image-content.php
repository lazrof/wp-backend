<?php
$show_content = get_field('show_left_image_content');
$content = get_field('left_image_content');

if( $show_content && $content): 
    
    $image = $content['image'];
    if(empty($image)){
        $image = array(
            'url' => get_stylesheet_directory_uri() . '/assets/img/app_preview_2.png', 
            'alt' => 'Left Content Image');
    }

    $icons = $content['icons_with_content']; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 py-3">
                <div class="img-place mobile-preview shadow wow zoomIn">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo  $image['alt']; ?>">
                </div>
            </div>
            <div class="col-lg-6 py-3 mt-lg-5">
                <?php if( $icons ) : ?>
                <div class="iconic-list">

                    <?php foreach( $icons as $icon ) : ?>
                    <div class="iconic-item wow fadeInUp">
                        <div class="<?php echo $icon['icon_background'] ?> iconic-md iconic-text fg-white rounded-circle">
                            <span class="<?php echo $icon['icon_class']; ?>"></span>
                        </div>
                        <div class="iconic-content">
                            <?php echo $icon['content'] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif; ?>