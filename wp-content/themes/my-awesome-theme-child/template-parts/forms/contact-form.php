<?php if (!empty(get_field('form_short_code'))) ?>
    <div class="card-page">
        <?php echo do_shortcode(get_field('form_short_code')); ?>
    </div>