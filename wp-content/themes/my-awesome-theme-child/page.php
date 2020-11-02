<?php 
get_header(); 

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