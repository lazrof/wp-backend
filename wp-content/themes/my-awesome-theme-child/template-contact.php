<?php 

/*
* Template Name: Contact Form Page
*/

get_header(); ?>
<main id="primary" class="site-main">
		
	<div class="bg-light">

		<?php get_template_part('template-parts/partials/hero-banner-default') ?>
		
		<div class="page-section">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					
					<?php while ( have_posts() ) : the_post();?>
					<div class="row justify-content-center">
						
						<?php get_template_part('template-parts/contact-page/cards') ?>

						<div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
							<?php get_template_part('template-parts/forms/contact-form') ?>
						</div>
						<div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
							<?php get_template_part('template-parts/contact-page/map') ?>
						</div>
					</div>
					<?php endwhile; ?>

				<?php else: ?>
					<h4>No posts were found.</h4>
				<?php endif; ?>
			</div>
		</div>
	</div> <!-- .bg-light -->


</main><!-- #main -->

<?php get_footer(); ?>