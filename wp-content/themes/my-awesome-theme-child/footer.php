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
				<?php get_template_part('template-parts/footer/newsletter-form') ?>

				<!-- Social Media Button -->
				<div class="mt-4">
					<?php get_template_part('template-parts/social-icons') ?>
				</div>
			</div>
			</div>
		</div>

		<hr>

		<div class="container">
			<div class="row">
			<div class="col-12 col-md-6 py-2">
				<?php if(get_field('copy_logo', 'options')): ?>
					<img src="<?php echo the_field('copy_logo', 'options')?>" alt="Logo Footer" width="40">
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon-light.png" alt="Logo Footer" width="40">
				<?php endif; ?>
				<!-- Please don't remove or modify the credits below -->
				<div class="d-inline-block ml-2"><?php the_field('copyright_footer', 'options') ?></div>
			</div>
			<div class="col-12 col-md-6 py-2">
				<?php wp_nav_menu(array('theme_location' => 'terms', 'container' => '')); ?>
			</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>