<?php
$show_content = get_field('show_content_pricing');
$content = get_field('pricing_content');

if( $show_content && $content): 
    
    $background_image = !empty( get_field('background_image_pricing') )
	? get_field('background_image_pricing')
    : get_stylesheet_directory_uri() . '/assets/img/pattern_2.svg';
    
    $cta =  $content['link'];
    if( $cta ){
        $cta_url = $cta['url'];
        $cta_title = $cta['title'];
        $cta_target = $cta['target'] ? $cta['target'] : '_self';
    }

    $cta_icon_class = $content['link_icon'];
    if(empty($cta_icon)){
        $cta_icon_class = 'mai-call-outline';
    }

    $items = $content['items']; ?>

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
                    href="<?php echo $cta_url; ?>" 
                    target="<?php echo $cta_target; ?>" 
                    class="btn btn-gradient btn-split-icon rounded-pill"> 
                    <span class="icon <?php echo $cta_icon_class ?>"></span> <?php echo $cta_title; ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <div class="pricing-table">
                <div class="pricing-item active wow zoomIn">
                    <div class="pricing-header">
                    <h5>Business Plan</h5>
                    <h1 class="fw-normal">$49.00</h1>
                    </div>
                    <div class="pricing-body">
                    <ul class="theme-list">
                        <li class="list-item">Push Notification</li>
                        <li class="list-item">Unlimited Bandwith</li>
                        <li class="list-item">Realtime Database</li>
                        <li class="list-item">Monthly Backup</li>
                        <li class="list-item">24/7 Support</li>
                    </ul>
                    </div>
                    <button class="btn btn-dark">Choose Plan</button>
                </div>
                <!-- <div class="pricing-item wow zoomIn" data-wow-delay="200ms">
                    <div class="pricing-header">
                    <h5>Starter Plan</h5>
                    <h1 class="fw-normal">$24.00</h1>
                    </div>
                    <div class="pricing-body">
                    <ul class="theme-list">
                        <li class="list-item">Push Notification</li>
                        <li class="list-item">Unlimited Bandwith</li>
                        <li class="list-item">Realtime Database</li>
                        <li class="list-item">Monthly Backup</li>
                        <li class="list-item">24/7 Support</li>
                    </ul>
                    </div>
                    <button class="btn btn-dark">Choose Plan</button>
                </div> -->
                </div>
            </div>
            </div>
        </div>
    </div>

<?php endif; ?>