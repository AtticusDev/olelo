<?php
/**
 * Template Name: Condition
 * Template Post Type: condition
 *
 * This is the template that displays all posts.

 */

get_header(); ?>


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'condition' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
get_footer();
