<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devonshire
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid home-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<div class="row justify-content-end">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 intro-text">
							<div class="trigger-badge">
								<div class="home-logo">
									<img src="<?php bloginfo('stylesheet_directory');?>/images/olelo.svg" style="width: 200px;">
								</div>
							<?php
								the_content();
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="container service-wrapper">
		<div class="row">
				<div class="col-md-4 service-block">
					<div class="box1">
						<a href="">
						<div class="serviceImage" style="background-image:url('<?php bloginfo('stylesheet_directory');?>/images/service-image.jpg');">
						</div>
						</a>
					</div>
					<div class="service-title">
						<h2>Eye conditions</h2>
					</div>
				</div>
				<div class="col-md-4 service-block">
					<div class="box2">
						<a href="">
						<div class="serviceImage" style="background-image:url('<?php bloginfo('stylesheet_directory');?>/images/service-image.jpg');">
						</div>
						</a>
					</div>
					<div class="service-title">
						<h2>Eye conditions</h2>
					</div>
				</div>
				<div class="col-md-4 service-block">
					<div class="box3">
						<a href="">
						<div class="serviceImage" style="background-image:url('<?php bloginfo('stylesheet_directory');?>/images/service-image.jpg');">
						</div>
						</a>
					</div>
					<div class="service-title">
						<h2>Eye conditions</h2>
					</div>
				</div>
		</div>
	</div>
	<div class="container-fluid locations-panel">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<h2>Locations</h2>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center rule-right">
						Kensington Medical<br />
						Chambers<br />
						10 Knaresborough Pl<br />
						Kensington<br />
						London<br />
						SW5 0TG<br />
					</div>
					<div class="col-md-4 text-center rule-right">
						Chelsea Diagnostic<br />
						Centre<br />
						272 King's Rd<br />
						Chelsea<br />
						London<br />
						SW3 5AW<br />
					</div>
					<div class="col-md-4 text-center">
						Lister Hospital<br />
						Chelsea Bridge Road<br />
						London<br />
						SW1W 8RH<br />
					</div>
				</div>
			</div>
		</div>
	</div>



</article><!-- #post-## -->



