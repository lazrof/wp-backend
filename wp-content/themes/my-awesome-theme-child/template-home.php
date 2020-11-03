<?php 

/*
* Template Name: Home Page
*/

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part('template-parts/home/hero-banner') ?>
		<?php get_template_part('template-parts/logos-gallery') ?>
		<?php get_template_part('template-parts/contents-with-image') ?>
		<?php get_template_part('template-parts/why-section') ?>
		<?php get_template_part('template-parts/pricing-section') ?>
		<?php get_template_part('template-parts/full-width-section') ?>
		<?php get_template_part('template-parts/right-contact-form') ?>

	<?php endwhile; ?>

	<?php else: ?>
    <h4>Sorry, no posts were found</h4>

<?php 
endif;
get_footer();
?>