<?php if( have_rows('contact') ): ?>

    <div class="col-lg-10 my-3 wow fadeInUp">
        <div class="card-page">
            <div class="row row-beam-md">
                <?php while( have_rows('contact') ) : the_row(); ?>
                    <div class="col-md-4 text-center py-3 py-md-2">
                        <i class="<?php the_sub_field('icon'); ?>"></i>
                        <p class="fg-primary fw-medium fs-vlarge"><?php the_sub_field('title'); ?></p>
                        <div class="mb-0"><?php the_sub_field('content'); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

<?php endif; ?>