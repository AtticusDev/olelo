<?php
/**
 * Template part for displaying page content in eyecare.php
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
			<div class="bcg-parallax">
				<div class="bcg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-wrapper">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-nav-wrapper">
							<div class="service-nav">
								<ul>

								<?php
								$args = array(
								 'post_type' => 'condition',
								 'category_name' => 'eye-conditions',
								 'order' => 'ASC' 
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>

									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

								<?php
									endwhile;
									wp_reset_query();
								?>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-8">
						<div class="content-wrapper">
						<p><?php the_content(); ?></p>
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



