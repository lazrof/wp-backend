<?php 

/*
* Template Name: Contact Form Page
*/

get_header(); ?>
<main id="primary" class="site-main">
		
	<div class="bg-light">

		<div class="page-hero-section bg-image hero-mini" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero_mini.svg);">
			<div class="hero-caption">
				<div class="container fg-white h-100">
				<div class="row justify-content-center align-items-center text-center h-100">
					<div class="col-lg-6">
					<h3 class="mb-4 fw-medium">Contact</h3>
					<nav aria-label="breadcrumb">
						<?php
						if(function_exists('bcn_display')){
							bcn_display();
						} ?>
					</nav>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		<div class="page-section">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();?>
					<div class="row justify-content-center">
						<div class="col-lg-10 my-3 wow fadeInUp">
							<div class="card-page">
							<div class="row row-beam-md">
								<div class="col-md-4 text-center py-3 py-md-2">
								<i class="mai-location-outline h3"></i>
								<p class="fg-primary fw-medium fs-vlarge">Location</p>
								<p class="mb-0">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
								</div>
								<div class="col-md-4 text-center py-3 py-md-2">
								<i class="mai-call-outline h3"></i>
								<p class="fg-primary fw-medium fs-vlarge">Contact</p>
								<p class="mb-1">+213 908 92034</p>
								<p class="mb-0">+415 123 89245</p>
								</div>
								<div class="col-md-4 text-center py-3 py-md-2">
								<i class="mai-mail-open-outline h3"></i>
								<p class="fg-primary fw-medium fs-vlarge">Email</p>
								<p class="mb-1">support@mobster.com</p>
								<p class="mb-0">support@macodeid.com</p>
								</div>
							</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
							<div class="card-page">
							<?php get_template_part('template-parts/forms/contact-form') ?>
							</div>
						</div>
						<div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
							<div class="card-page">
							<div class="maps-container">
								<div id="myMap"></div>
							</div>
							</div>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

<?php get_footer(); ?>