<?php 

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Awesome_Theme
 */

get_header(); 
?>

<main id="primary" class="site-main">
		
	<div class="bg-light">

		<?php get_template_part('template-parts/partials/hero-banner-default') ?>
		
		<div class="page-section">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();
						
						the_content(
							sprintf(
								wp_kses(
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'my-awesome-theme' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);
				
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-awesome-theme' ),
								'after'  => '</div>',
							)
						);?>
						
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