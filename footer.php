<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Olelo
 */

?>


	</div><!-- #content -->

<?php
if ( is_page_template( 'templates/home.php' ) ) {
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="site-footer-logo-wrapper">
					<a href="/"><div class="site-footer-logo"></div></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="site-footer-info">
						<p>10 Knaresborough Place<br />
						Kensington<br />
						London<br />
						SW5 0TG</p>
						<p>+44 (0) 20 7034 8284 info@olelo.com</p>
						<p>Privacy notice<br />
						&copy; <?php bloginfo( 'name' );
								echo ' - ';
								echo date("Y"); ?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php
}
?>

<?php wp_footer(); ?>

</body>
</html>
