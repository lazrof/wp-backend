<?php
$show_content = get_field('show_content_pricing');
$content = get_field('pricing_content');

if( $show_content && $content): 
    
    $background_image = !empty( get_field('background_image_pricing') )
	? get_field('background_image_pricing')
    : get_stylesheet_directory_uri() . '/assets/img/pattern_2.svg';
    
    $cta =  $content['link'];
    if( $cta ){
        $cta_target = $cta['target'] ? $cta['target'] : '_self';
    }

    $cta_icon_class = $content['link_icon'];
    if(empty($cta_icon)){
        $cta_icon_class = 'mai-call-outline';
    }

    $items = $content['prices']; ?>

    <div class="page-section bg-image" style="background-image: url(<?php echo $background_image; ?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
                
                <?php if($content['title']): ?>
                    <h1 class="mb-4">Pricing Plan</h1>
                <?php endif; ?>
                
                <?php if($content['content']): ?>
                    <div class="mb-5">
                        <?php echo $content['content'] ?>
                    </div>
                <?php endif; ?>

                <?php if( $cta ): ?>
                <a 
                    href="<?php echo $cta['url']; ?>" 
                    target="<?php echo $cta_target; ?>" 
                    class="btn btn-gradient btn-split-icon rounded-pill"> 
                    <span class="icon <?php echo $cta_icon_class ?>"></span> <?php echo $cta['title']; ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <div class="pricing-table">
                    <?php if( $items ) : ?>
                    <?php foreach( $items as $item ) :
                        $active_class = empty($item['active_class']) ? '' : 'active';
                        $benefits = $item['benefits'];
                        $cta_item =  $item['link'];
                        if( $cta_item ){
                            $cta_target_item = $cta_item['target'] ? $cta_item['target'] : '_self';
                        }
                        ?>

                        <div class="pricing-item wow zoomIn <?php echo $active_class ?>">
                            <div class="pricing-header">
                                <h5><?php echo $item['name'] ?></h5>
                                <h1 class="fw-normal">$<?php echo $item['price'] ?></h1>
                            </div>

                            <div class="pricing-body">
                                
                                <?php if(!empty($benefits)): ?>
                                    <ul class="theme-list">
                                        <?php foreach( $benefits as $benefit ) :?>
                                        <li class="list-item"><?php echo $benefit['text'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                            </div>
                            <?php if( $cta_item ): ?>
                                <button class="btn btn-dark"><?php echo $cta_item['title']; ?></button>
                            <?php endif ?>

                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </div>
    </div>

<?php endif; ?>