<?php 

/*
* Template Name: Image Whit Accordeon
*/

get_header(); ?>

<main id="primary" class="site-main">

	<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_title();

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>

	</main><!-- #main -->


<?php get_footer(); ?>