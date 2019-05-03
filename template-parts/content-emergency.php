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
			<div class="bcg-parallax">
				<div class="bcg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="title-wrapper">
							<h2><?php the_title(); ?></h2>
						</div>
					</div>
					<div class="col-md-8 col-lg-6">
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



