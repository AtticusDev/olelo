<?php
/**
 * Template part for displaying page content in service.php
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
							<h2>Eye conditions we treat</h2>
							<div class="service-nav">
								<ul>
									<li><a href="/">Dry eyes</a></li>
									<li><a href="/">Watery eyes</a></li>
									<li><a href="/">Red Eye / Conjunctivitis</a></li>
									<li><a href="/">Glaucoma screening & treatment</a></li>
									<li><a href="/">Cataract</a></li>
									<li><a href="/">Refractive lens exchange</a></li>
									<li><a href="/">Diabetes</a></li>
									<li><a href="/">Macular Degeneration</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-lg-6">
						<div class="content-wrapper">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ligula venenatis, tristique leo quis, vulputate orci. Suspendisse commodo, felis eget vestibulum ultricies, lorem erat pretium elit, a eleifend nisi justo accumsan ligula. Nullam egestas in lorem in tincidunt. Suspendisse consequat turpis nec odio fermentum fringilla. Cras ornare tortor ut porta mattis. Praesent dolor lacus, condimentum vitae ipsum eget, mollis pellentesque mi. Integer pharetra turpis vitae luctus lacinia. Cras hendrerit nisi in nisi scelerisque hendrerit. Nullam eleifend congue faucibus.</p>
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
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->



