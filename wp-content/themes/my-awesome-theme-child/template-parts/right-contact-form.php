<?php
$show_content = get_field('show_content_r_contact_form');
$content = get_field('rigth_contact_form_content');

if( $show_content && $content): ?>

    <div class="page-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-7 py-3 mb-5 mb-lg-0">
                <div class="img-place w-lg-75 wow zoomIn">
                    <?php if ($content['image']): 
                        $img_alt = get_acf_image_alt($content['image']);?>
                        <img src="<?php echo $content['image']['url']; ?>" alt="<?php echo $img_alt; ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 py-3">
                <?php if ( !empty($content['contact_form_short_code']) ) ?>
                    <h1 class="wow fadeInUp"><?php echo $content['title'] ?></h1>
                    <?php echo do_shortcode($content['contact_form_short_code']); ?>
            </div>
            </div>
        </div>
    </div>

<?php endif; ?>