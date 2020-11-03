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


		<div class="page-section bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pattern_2.svg);">
		<div class="container">
			<div class="row justify-content-center align-items-center">
			<div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
				<h1 class="mb-4">Pricing Plan</h1>
				<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores inventore maxime ipsa eligendi quibusdam velit maiores adipisci odit, exercitationem cumque iusto at debitis reiciendis a, ipsum aliquam reprehenderit. Sed, delectus.</p>
				<a href="#" class="btn btn-gradient btn-split-icon rounded-pill">
				<span class="icon mai-call-outline"></span> Custom Plan
				</a>
			</div>
			<div class="col-lg-7">
				<div class="pricing-table">
				<div class="pricing-item active wow zoomIn">
					<div class="pricing-header">
					<h5>Business Plan</h5>
					<h1 class="fw-normal">$49.00</h1>
					</div>
					<div class="pricing-body">
					<ul class="theme-list">
						<li class="list-item">Push Notification</li>
						<li class="list-item">Unlimited Bandwith</li>
						<li class="list-item">Realtime Database</li>
						<li class="list-item">Monthly Backup</li>
						<li class="list-item">24/7 Support</li>
					</ul>
					</div>
					<button class="btn btn-dark">Choose Plan</button>
				</div>
				<div class="pricing-item wow zoomIn" data-wow-delay="200ms">
					<div class="pricing-header">
					<h5>Starter Plan</h5>
					<h1 class="fw-normal">$24.00</h1>
					</div>
					<div class="pricing-body">
					<ul class="theme-list">
						<li class="list-item">Push Notification</li>
						<li class="list-item">Unlimited Bandwith</li>
						<li class="list-item">Realtime Database</li>
						<li class="list-item">Monthly Backup</li>
						<li class="list-item">24/7 Support</li>
					</ul>
					</div>
					<button class="btn btn-dark">Choose Plan</button>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>

		<div class="page-section bg-image bg-image-overlay-dark" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg_testimonials.jpg);">
		<div class="container fg-white">
			<div class="row">
			<div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
				<h2 class="mb-5 fg-white fw-normal">Customer Stories</h2>
				<p class="fs-large font-italic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia voluptates facere explicabo! Rerum necessitatibus cum qui veritatis reprehenderit, neque sapiente consequatur atque eaque molestias, est, quod totam quo laudantium ratione.</p>
				<p class="fs-large fg-grey fw-medium mb-5">John Doe, UI Designer</p>

				<a href="#" class="btn btn-outline-light rounded-pill">Read Stories <span class="mai-chevron-forward"></span></a>
			</div>
			</div>
		</div>
		</div>

		<div class="page-section">
		<div class="container">
			<div class="row">
			<div class="col-lg-7 py-3 mb-5 mb-lg-0">
				<div class="img-place w-lg-75 wow zoomIn">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/illustration_contact.svg" alt="">
				</div>
			</div>
			<div class="col-lg-5 py-3">
				<h1 class="wow fadeInUp">Need a help? <br>
				Don't worry just contact us</h1>

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



	<?php endwhile; ?>

	<?php else: ?>
    <h4>Sorry, no posts were found</h4>

<?php 
endif;
get_footer();
?>