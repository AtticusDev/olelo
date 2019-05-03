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

	<div id="banner">
		<div class="overlay"></div>
			<video preload="auto" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			    <source src="<?php bloginfo('stylesheet_directory');?>/images/25371152-preview-flipped.mp4" type="video/mp4">
			</video>
		<div class="container">
<!--				<div class="row d-flex h-100 text-center justify-content-center"> -->
				<div class="row justify-content-center">
					<div class="intro-text">
						<div class="trigger-badge justify-content-center">
							<div class="home-logo">
							</div>
							<div class="home-intro">
							<?php
								the_content();
							?>
							</div>
						</div>
				    </div>
				</div>
		</div>
	</div>

	<div class="container-fluid service-wrapper">
		<div class="row">
			<div class="container">
				<div class="row">
				<?php if( have_rows('service_blocks') ): 
				 while( have_rows('service_blocks') ): the_row(); 
				// vars
				$title = get_sub_field('title');
				$link = get_sub_field('link');
				$image = get_sub_field('image');
				$i = $i+1;
				?>
				<div class="col-md-4 service-block<?php echo $i; ?>">
					<div class="box<?php echo $i; ?>">
						<a href="<?php echo $link; ?>">
						<div class="serviceImage<?php echo $i; ?>" style="background-image:url('<?php echo $image; ?>'); ">
						</div>
						</a>
					</div>
					<div class="service-title">
						<h2><?php echo $title ?></h2>
					</div>
				</div>
				<?php endwhile;
				endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid form-wrapper">
		<div class="row">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h2 class="dark-blue">Enquiry form</h2>
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid locations-panel">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center mb-3">
				<h2 class="text-white">Locations</h2>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
											<?php
					// check if the repeater field has rows of data
					if( have_rows('address_block', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('address_block', 'option') ) : the_row();
				    	?>
						<div class="col-md-4 text-center rule-right">
				    	<?php the_sub_field('address_box'); ?>
						<p><a href="<?php the_sub_field('google_map_link'); ?>" target="_blank">
				        view in google maps
				    	</a></p>
				    	</div>

				        <?php
					    endwhile;
						else :
						    echo "nothing found here";
						endif;
						?>
				</div>
			</div>
		</div>
	</div>



</article><!-- #post-## -->



