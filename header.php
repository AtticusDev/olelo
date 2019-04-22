<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Olelo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<?php
if ( is_page_template( 'templates/home.php' ) ) {
	?>

		<div class="container-fluid header-panel">
			<div class="row justify-content-between">
				<div class="header-bg justify-content-center">
					<div class="small-logo">
					</div>
				</div>
				<div class="col-md-2">
					<div class="controls d-flex">
							<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-left" data-action="toggle">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						    <nav class="slide-menu" id="test-menu-left">
								<?php
										        $args = array(
									              'theme_location' => 'primary',
									              'depth'      => 3,
									              'container'  => false,
									              'menu_class'     => 'navbar-nav',
								/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
									              );
									            if (has_nav_menu('primary')) {
									              wp_nav_menu($args);
									            }
								?>

							</nav>
							<div class="site-number">
								+44 (0) 20 7894 1234
							</div>
					</div>
				</div>
				<div class="site-logo-wrapper">
					<a href="/"><div class="site-logo"></div></a>
				</div>
			</div>
		</div>
<?php
} else {
	?>

		<div class="container-fluid side-header-panel">
			<div class="row justify-content-between">
				<div class="col-md-4 side-global-panel d-flex flex-column justify-content-between">
					<div class="controls">
							<button class="hamburger hamburger--collapse slide-menu-control openbtn" type="button" data-target="test-menu-left" data-action="toggle">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						    <nav class="slide-menu" id="test-menu-left">
								<?php
										        $args = array(
									              'theme_location' => 'primary',
									              'depth'      => 3,
									              'container'  => false,
									              'menu_class'     => 'navbar-nav',
								/*	              'walker'     => new Bootstrap_Walker_Nav_Menu()*/
									              );
									            if (has_nav_menu('primary')) {
									              wp_nav_menu($args);
									            }
								?>

							</nav>
					</div>
					<div class="small-logo-global">
					</div>
					<div class="side-symbol">
					</div>
					<div class="side-contact">
						<p>+44 (0) 20 7894 1234</p>

						<div class="sm-block d-flex justify-content-center">
								
									<a href="https://www.linkedin.com/company/aber-instruments-ltd/" class="c-link" aria-label="Linkedin"><svg class="c-icon"><use xlink:href="#icon--linkedin"></use></svg></a>

									<a href="https://twitter.com/AberInstruments" class="c-link" aria-label="Twitter"><svg class="c-icon"><use xlink:href="#icon--twitter"></use></svg></a>

									<a href="https://www.facebook.com/aberinstruments/" class="c-link" aria-label="Facebook"><svg class="c-icon"><use xlink:href="#icon--facebook"></use></svg></a>
						</div>

					</div>
					<div class="side-footer-info">
						<p>10 Knaresborough Place<br />
						Kensington<br />
						London<br />
						SW5 0TG</p>
						<p>+44 (0) 20 7034 8284 | info@olelo.com</p>
						<p>Privacy notice<br />
						&copy; <?php bloginfo( 'name' );
								echo ' - ';
								echo date("Y"); ?>
					</div>

				</div> <!-- END SIDE-GLOBAL-PANEL -->

			</div>
		</div>

<?php
}
?>

<svg style="display: none">
	<symbol id="icon--linkedin" viewBox="0 0 50 50">
	<path d="M15.3,12.2c0-0.8,0-1.3,0-1.8c0-0.6-0.1-0.8-0.7-0.8c-1.4,0-2.7,0-4.1,0c-0.5,0-0.6,0.1-0.6,0.6
	c0,6.1,0,12.1,0,18.2c0,0.5,0.1,0.6,0.6,0.6c1.4,0,2.9,0,4.3,0c0.7,0,0.9-0.2,0.9-0.9c0-3.1,0-6.2,0-9.3c0-1,0.1-1.9,0.5-2.8
	c0.6-1.2,1.8-1.9,3.2-1.7c1.4,0.2,2.1,0.9,2.4,2.4c0.2,0.7,0.2,1.4,0.2,2.1c0,3.1,0,6.2,0,9.3c0,0.7,0.2,0.9,0.9,0.9
	c1.4-0.1,2.8,0,4.2,0c0.6,0,0.7-0.2,0.7-0.7c0-3.7,0-7.4,0-11.1c0-0.8-0.1-1.6-0.2-2.4c-0.4-2.9-1.9-4.8-4.3-5.4
	C20.1,8.7,17.4,9.1,15.3,12.2 M6.2,19.3c0-3,0-6,0-9c0-0.6-0.1-0.8-0.7-0.8c-1.5,0-2.9,0-4.4,0c-0.5,0-0.7,0.1-0.7,0.7
	c0,6,0,12.1,0,18.1c0,0.6,0.2,0.7,0.7,0.7c1.4,0,2.9,0,4.3,0c0.6,0,0.7-0.2,0.7-0.8C6.2,25.3,6.2,22.3,6.2,19.3 M6.6,3.6
	C6.7,1.6,5.2,0,3.4,0C1.6-0.1,0,1.6,0,3.5S1.5,7,3.3,7.1C5,7,6.6,5.5,6.6,3.6"/>
	</symbol>

	<symbol id="icon--facebook" viewBox="0 0 50 50">
	<path d="M0,9.5v5.2h2.7v14.5h5.7V14.6h3.9c0.2-1.7,0.3-3.4,0.5-5.1H8.4c0-0.9,0-1.8,0-2.7c0-1.4,0.3-1.7,1.7-1.7
	c0.3,0,0.6,0,0.9,0h1.7V0C10.8,0.1,9,0,7.2,0.2C5.1,0.4,3.7,1.7,3.1,3.9C2.9,4.7,2.8,5.7,2.7,6.5c-0.1,1,0,2,0,3H0z"/>
	</symbol>
	<symbol id="icon--twitter" viewBox="0 0 50 50">
	<path d="M11,28.2h-1c-0.1,0-0.3,0-0.4,0c-0.5,0-1-0.1-1.5-0.1c-0.5-0.1-1-0.1-1.5-0.2c-0.9-0.2-1.7-0.4-2.5-0.7
	c-1.4-0.5-2.8-1.2-4-2c0,0-0.1,0-0.1-0.1l0,0c0.9,0.1,1.7,0.1,2.6,0c0.9-0.1,1.7-0.2,2.6-0.5c0.8-0.3,1.7-0.6,2.4-1
	c0.8-0.4,2.1-1.3,2.2-1.5c-1.4,0-2.7-0.5-3.8-1.4c-1.1-0.9-1.9-2.1-2.4-3.5c0.5,0.1,1,0.1,1.5,0.1s1-0.1,1.5-0.2
	c-3.6-0.8-5.4-4.2-5.3-7c0.5,0.3,0.9,0.5,1.4,0.6s1,0.2,1.5,0.2C3.3,10.2,2.5,9.3,2,8.3C1.5,7.2,1.2,6.1,1.3,4.9
	c0-1.2,0.3-2.3,0.9-3.4c1.7,2.2,3.8,4,6.1,5.2c2.4,1.3,4.9,2,7.6,2.1c0,0,0,0,0-0.1c-0.2-0.8-0.2-1.5-0.1-2.3
	c0.1-0.6,0.2-1.3,0.4-1.9c0.5-1.2,1.2-2.2,2.1-3c1.2-0.9,2.5-1.4,3.9-1.5c0.1,0,0.3,0,0.4,0l0,0c0.4,0,0.8,0.1,1.2,0.2
	c1,0.2,1.9,0.7,2.7,1.4c0.2,0.2,0.4,0.4,0.6,0.6c0,0.1,0.1,0.1,0.2,0.1c0.4-0.1,0.9-0.2,1.3-0.4c1-0.3,1.9-0.7,2.7-1.3h0.1
	c-0.5,1.7-1.5,3-2.9,3.9c1.3-0.2,2.6-0.5,3.8-1.1l0,0c-0.6,0.9-1.2,1.7-1.9,2.4c-0.4,0.4-0.8,0.8-1.3,1.1L29,7c0,0.1,0,0.2,0,0.4
	c0,0.5,0,1,0,1.5s-0.1,1-0.1,1.5c-0.1,0.8-0.2,1.5-0.4,2.2c-0.3,1.5-0.8,2.9-1.5,4.2c-0.5,1.1-1.1,2.1-1.8,3.1
	c-0.8,1.2-1.8,2.3-2.8,3.2c-0.7,0.6-1.4,1.2-2.2,1.7s-1.7,1-2.5,1.4c-1.1,0.5-2.2,0.9-3.3,1.1c-0.6,0.1-1.1,0.2-1.7,0.3
	c-0.4,0-0.7,0.1-1.1,0.1C11.6,28.2,11.3,28.2,11,28.2L11,28.2"/>
	</symbol>
</svg>

