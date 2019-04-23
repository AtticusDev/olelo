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
			<div class="service-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="title-wrapper">
							<h2><?php the_title(); ?></h2>
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
					<div class="col-md-8 col-lg-6">
						<div class="content-wrapper">
						<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center footer-trigger">
					<div class="col-md-10 text-center">
						<h2 class="dark-blue">Enquire about <span style="text-transform: lowercase;"><?php the_title(); ?></span></h2>
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

				</div>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->



