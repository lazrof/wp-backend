<?php 
$show_content = get_field('show_newsletter_content', 'options');
$content = get_field('newsletter_content', 'options');

if( $show_content && $content): ?>

    <h5 class="mb-3"><?php echo $content['title'] ?></h5>
    <p><?php echo $content['text'] ?></p>

    <form method="POST">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Your email..">
            <div class="input-group-append">
            <button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
            </div>
        </div>
    </form>

<?php endif; ?>