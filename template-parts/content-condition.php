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
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-3">
					</div>
					<div class="col-md-8">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="condition-title">
										<h1><?php the_title(); ?></h1>
									</div>
								</div>
								<div class="col-md-6">
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
				<div class="row justify-content-center footer-trigger">
					<div class="col-md-10 text-center">
						<h2 class="dark-blue">Enquiry form</h2>
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->


