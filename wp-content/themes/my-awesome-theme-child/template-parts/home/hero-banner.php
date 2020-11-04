<?php 

$background_image = !empty( get_field('banner_background_image') )
	? get_field('banner_background_image')
	: get_stylesheet_directory_uri() . '/assets/img/bg_hero_1.svg';

$subtitle_icon = !empty( get_field('subtitle_icon_class') )
	? get_field('subtitle_icon_class')
	: 'mai-globe';

$cta =  get_field('cta_hero_banner');
if( $cta ){
    $cta_url = $cta['url'];
    $cta_title = $cta['title'];
	$cta_target = $cta['target'] ? $cta['target'] : '_self';
	
	$cta_bg_color = !empty( get_field('banner_call_to_action_color') )
	? get_field('banner_call_to_action_color')
	: "#3d58f3";
}

$img = !empty( get_the_post_thumbnail_url($post->ID, 'large') )
	? get_the_post_thumbnail_url($post->ID, 'large')
	: get_stylesheet_directory_uri() . '/src/img/hands-on-laptop.png';

?>

<!-- Hero Banner -->
<div class="page-hero-section bg-image hero-home-1" style="background-image: url(<?php echo $background_image ?>);">
	<div class="hero-caption pt-5">
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-lg-6 wow fadeInUp">
					
					<?php if(get_field('subtitle')): ?>
					<div class="badge mb-2">
						<span class="icon mr-1">
							<span class="<?php echo $subtitle_icon ?>"></span>
						</span> <?php the_field('subtitle'); ?>
					</div>
					<?php endif; ?>

					<div><?php the_content(); ?></div>

					<?php if($cta): ?>
						<a 
							href="<?php echo $cta_url; ?>" 
							class="btn btn-primary rounded-pill"
							target="<?php echo $cta_target; ?>"
							style="background-color:<?php echo $cta_bg_color ?>">
							<?php echo $cta_title; ?>
						</a>
					<?php endif; ?>

				</div>
				<div class="col-lg-6 d-none d-lg-block wow zoomIn">
					<div class="img-place mobile-preview shadow floating-animate">
						<img src="<?php echo $img ?>" alt="<?php the_title(); ?> Image">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>