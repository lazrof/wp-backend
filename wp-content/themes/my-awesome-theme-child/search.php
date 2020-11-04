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

            <?php get_search_form(); ?>

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'my-awesome-theme' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header><!-- .page-header -->

                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                                <?php if ( 'post' === get_post_type() ) : ?>
                                <div class="entry-meta">
                                    <?php
                                    my_awesome_theme_posted_on();
                                    my_awesome_theme_posted_by();
                                    ?>
                                </div><!-- .entry-meta -->
                                <?php endif; ?>
                            </header><!-- .entry-header -->

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->

                            <footer class="entry-footer">
                                <?php my_awesome_theme_entry_footer(); ?>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-<?php the_ID(); ?> -->

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

            <?php else: ?>

                <h4>No posts were found.</h4>"

            <?php endif; ?>
                
			</div>
		</div>
	</div> <!-- .bg-light -->


</main><!-- #main -->

<?php get_footer(); ?>