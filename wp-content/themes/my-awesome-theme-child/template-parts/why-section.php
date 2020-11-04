<?php
$show_content = get_field('show_why_content');
$content = get_field('why_section_content');

if( $show_content && $content): 
    
    $background_color = !empty( get_field('background_color_why_section') )
	? "background-color:" . get_field('background_color_why_section') . "!important;"
    : "";

    $items = $content['items']; ?>

    <div class="page-section bg-dark fg-white" style="<?php echo $background_color; ?>">
        <div class="container">
            <?php if($content['title']): ?>
                <h1 class="text-center"><?php echo $content['title'] ?></h1>
            <?php endif; ?>

            <?php if( $items ) : ?>
                <div class="row justify-content-center mt-5">

                    <?php foreach( $items as $item ) :
                        $img = $item['image'];?>

                        <div class="col-md-6 col-lg-3 py-3">
                            <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
                            <div class="mb-3">
                                <img src="<?php echo $img; ?>" alt="<?php echo $im['alt']; ?>">
                            </div>
                            <p class="fs-large"><?php echo $item['title']; ?></p>
                            <p class="fs-small fg-grey">
                                <?php echo $item['content']; ?>
                            </p>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>