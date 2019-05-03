<?php
/**
 * Template part for displaying page content in information.php
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
					<div class="col-md-4">
						<div class="title-wrapper">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="col-md-8 col-lg-6">
						<div class="pi-copy">
						<?php the_content(); ?>
						</div>
						<div class="body-copy">
							<?php the_field('body_copy'); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="title-wrapper">
							<h1>Downloads</h1>
						</div>
					</div>
					<div class="col-md-8 col-lg-6" style="padding-top: 4rem;">
						<div class="download-wrapper">
								<h4>Eye treatment</h4>
								<div class="download-item">
									<div class="download-link">
									Application form (Form MED 160)
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									For ATCOs: Form Euro3 MED 162
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									CAA: CAA Medical Standards and Guidance
									</div>
								</div>

							<h4>Aesthetics</h4>
								<div class="download-item">
									<div class="download-link">
									Application form (Form MED 160)
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									For ATCOs: Form Euro3 MED 162
									</div>
								</div>
								<div class="download-item">
									<div class="download-link">
									CAA: CAA Medical Standards and Guidance
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



