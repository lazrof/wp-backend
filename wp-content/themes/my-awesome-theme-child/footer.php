<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the body and html tags
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Awesome_Theme
 */

?>
<footer>
	<div class="page-footer-section bg-dark fg-white">
		<div class="container">
			<div class="row mb-5 py-3">
			<div class="col-sm-6 col-lg-2 py-3">
				<h5 class="mb-3">Pages</h5>
				<ul class="menu-link">
				<?php wp_nav_menu(array('theme_location' => 'pages', 'container' => '')); ?>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-2 py-3">
				<h5 class="mb-3">Company</h5>
				<?php wp_nav_menu(array('theme_location' => 'company', 'container' => '')); ?>
			</div>
			<div class="col-md-6 col-lg-4 py-3">
				<h5 class="mb-3">Contact</h5>
				<?php wp_nav_menu(array('theme_location' => 'contact', 'container' => '')); ?>
			</div>
			<div class="col-md-6 col-lg-4 py-3">
				<h5 class="mb-3">Subscribe</h5>
				<p>Get some offers, news, or update features of application</p>
				<form method="POST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Your email..">
					<div class="input-group-append">
					<button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
					</div>
				</div>
				</form>

				<!-- Social Media Button -->
				<div class="mt-4">
				<a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
				<a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
				<a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
				<a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
				</div>
			</div>
			</div>
		</div>

		<hr>

		<div class="container">
			<div class="row">
			<div class="col-12 col-md-6 py-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon-light.png" alt="" width="40">
				<!-- Please don't remove or modify the credits below -->
				<p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All rights reserved</p>
			</div>
			<div class="col-12 col-md-6 py-2">
				<ul class="nav justify-content-end">
				<li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
				<li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>