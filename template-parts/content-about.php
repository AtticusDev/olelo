<?php
/**
 * Template part for displaying page content in about.php
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
						<div class="about-intro">
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
							<h1>The team</h1>
						</div>
					</div>
					<div class="col-md-8 col-lg-6">
						<div class="team-block">
							<h4>Clinicians</h4>
							<p>Dr Nabeel Malik</p>

							<h4>Support staff</h4>
							<p>Amber Willis - practice manager<br />
							Anne Smith - Reception<br />
							Jonathan Brown - Reception</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center footer-trigger">
					<div class="col-md-10 text-center form-block">
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



