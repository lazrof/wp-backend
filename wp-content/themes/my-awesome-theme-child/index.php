<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Awesome_Theme
 */

get_header();
?>

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
							<h3 class="fw-normal">Get in touch</h3>
							<form method="POST" class="mt-3">
								<div class="form-group">
								<label for="name" class="fw-medium fg-grey">Fullname</label>
								<input type="text" class="form-control" id="name">
								</div>
					
								<div class="form-group">
								<label for="email" class="fw-medium fg-grey">Email</label>
								<input type="text" class="form-control" id="email">
								</div>

								<div class="form-group">
								<label for="phone" class="fw-medium fg-grey">Phone(optional)</label>
								<input type="number" class="form-control" id="phone">
								</div>
					
								<div class="form-group">
								<label for="message" class="fw-medium fg-grey">Message</label>
								<textarea rows="6" class="form-control" id="message"></textarea>
								</div>

								<p>*Your information will never be shared with any third party.</p>
					
								<div class="form-group mt-4">
								<button type="submit" class="btn btn-primary">Send Message</button>
								</div>
							</form>
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
                
                <?php the_posts_navigation(); ?>
                
				<?php else: ?>
					<h4>No posts were found.</h4>
				<?php endif; ?>
			</div>
		</div>
	</div> <!-- .bg-light -->


</main><!-- #main -->

<?php get_footer(); ?>