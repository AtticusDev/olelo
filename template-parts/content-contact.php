<?php
/**
 * Template part for displaying page content in emergency.php
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
				<div class="row">
					<div class="col-md-12">
						<div class="contact-title text-center">
							<h1><?php the_title(); ?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center mb-3">
						<h2 class="dark-blue">Locations</h2>
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
			<div class="container mt-5 mb-5">
				<div class="row justify-content-center footer-trigger">
					<div class="col-md-10 text-center">
						<h2 class="dark-blue">Enquiry form</h2>
						<?php
							echo do_shortcode('[gravityform id=1 name=Enquiry title=false description=false]');
						?>
					</div>
				</div>
			</div>
			<div class="bcg-parallax">
				<div class="bcg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				</div>
			</div>
		</div>
	</div>
</div>


</article><!-- #post-## -->



