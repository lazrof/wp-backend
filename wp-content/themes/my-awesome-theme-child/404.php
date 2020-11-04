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

		<?php get_template_part('template-parts/partials/hero-banner-default') ?>
		
		<div class="page-section">
			<div class="container">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();
						
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
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
                
                <?php get_search_form(); ?>
			</div>
		</div>
	</div> <!-- .bg-light -->


</main><!-- #main -->

<?php get_footer(); ?>