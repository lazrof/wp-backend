<?php 

$show_section = get_field('show_logos');

if( $show_section && have_rows('logos') ): ?>

    <!-- Clients -->
    <div class="page-section mt-5">
        <div class="container">
            <div class="row">
            
            <?php while( have_rows('logos') ): the_row();  
                $img = get_sub_field('image');
                $img_alt = get_acf_image_alt($img);?>
                
                <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
                    <div class="img-place client-img">
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img_alt; ?>">
                    </div>
                </div>
            <?php endwhile; ?>
        
            </div>
        </div>
    </div>
    <!-- End clients -->

<?php endif; ?>