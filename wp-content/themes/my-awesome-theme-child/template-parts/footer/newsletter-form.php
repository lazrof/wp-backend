<?php 
$show_content = get_field('show_newsletter_content', 'options');
$content = get_field('newsletter_content', 'options');

if( $show_content && $content): ?>

    <h5 class="mb-3"><?php echo $content['title'] ?></h5>
    <p><?php echo $content['text'] ?></p>
    <?php echo do_shortcode($content['form_short_code']); ?>

<?php endif; ?>