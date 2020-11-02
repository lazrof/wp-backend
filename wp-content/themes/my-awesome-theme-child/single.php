<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package My_Awesome_Theme
 */

get_header(); 
?>

<main id="primary" class="site-main">

	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				the_title();

			endwhile;
		endif;
	?>

	</main><!-- #main -->


<?php get_footer(); ?>