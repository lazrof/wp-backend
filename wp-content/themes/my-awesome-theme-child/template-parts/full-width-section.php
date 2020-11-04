<?php
$show_content = get_field('show_full_width_content');
$content = get_field('full_width_content');

if( $show_content && $content): 
    
    $background_image = !empty( $content['background_image'] )
	? $content['background_image']
    : '';

    $cta =  $content['link'];
    if( $cta ){
        $cta_target = $cta['target'] ? $cta['target'] : '_self';
    }
?>
    <div class="page-section bg-image bg-image-overlay-dark" style="background-image: url(<?php echo $background_image ?>);">
        <div class="container fg-white">
            <div class="row">
                <div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
                    <h2 class="mb-5 fg-white fw-normal"><?php echo $content['title'] ?></h2>
                    <div>
                        <?php echo $content['content'] ?>
                    </div>

                    <?php if( $cta ): ?>
                        <a 
                            href="<?php echo $cta['url'] ?>" 
                            class="btn btn-outline-light rounded-pill"
                            target="<?php echo $cta_target; ?>" 
                            >
                            <?php echo $cta['title'] ?> <span class="mai-chevron-forward"></span>
                        </a>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>