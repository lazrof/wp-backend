<?php 
$show_social_icons = get_field('show_social_icons_content', 'options');

if( have_rows('social_icons', 'options') && $show_social_icons ): ?>
    
    <?php while( have_rows('social_icons', 'options') ) : the_row(); 
        $link = get_sub_field('link');
        if( $link )
            $link_target = $link['target'] ? $link['target'] : '_self';
        $link_logo_class = get_sub_field('icon_class');?>
        
        <a 
            href="<?php echo $link['url']; ?>" 
            class="btn btn-fab btn-primary fg-white"
            target="<?php echo $link_target; ?>"
            >
            <span class="<?php echo $link_logo_class ?>"></span>
        </a>

    <?php endwhile; ?>

<?php endif; ?>