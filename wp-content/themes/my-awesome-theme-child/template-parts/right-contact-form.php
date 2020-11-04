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
                <h1 class="wow fadeInUp"><?php echo $content['title'] ?></h1>

                <form method="POST" class="mt-5">
                <div class="form-group wow fadeInUp">
                    <label for="name" class="fw-medium fg-grey">Fullname</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <div class="form-group wow fadeInUp">
                    <label for="email" class="fw-medium fg-grey">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>

                <div class="form-group wow fadeInUp">
                    <label for="message" class="fw-medium fg-grey">Message</label>
                    <textarea rows="6" class="form-control" id="message"></textarea>
                </div>

                <div class="form-group mt-4 wow fadeInUp">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

<?php endif; ?>