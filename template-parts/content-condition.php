<?php
/**
 * Template part for displaying page content in condition.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container-fluid">
	<div class="row justify-content-end">
		<div class="col-md-8 main-content-area">
			<div class="container" style="margin-left: 0px;">
				<div class="row">
					<div class="col-md-3">
						<div class="quote-block">
							<?php 
							$args = array( 'post_type' => 'quote', 'posts_per_page' => '1', 'orderby' => 'rand' );
							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post();
							?>

							<?php the_content(); ?>
							<span class="quote-by"><?php the_title(); ?></span>

							<?php 
							endwhile;
							wp_reset_query();
							?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="condition-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="back-button">
										<a href="/eye-conditions/" class="back-button">Back to Eye treatments</a>
									</div>

								</div>
								<div class="col-md-12 col-lg-6">
									<div class="condition-text">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<div class="row justify-content-end">
								<div class="col-md-12 condition-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 condition-text">
									<div>
									<?php the_field('condition_col'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				get_template_part( 'template-parts/formblock' );
				?>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->



