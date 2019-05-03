<?php
/**
 * Enqueue scripts and styles.
 */
function olelo_scripts() {
	wp_enqueue_style( 'olelo-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_style( 'olelo-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:300,400,600', false );

	wp_enqueue_style( 'olelo-google-fonts', 'https://fonts.googleapis.com/css?family=Abhaya+Libre', false );

	wp_enqueue_script( 'olelo-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js', array(), false, true );

	wp_enqueue_script( 'ImagesLoaded-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagicIndicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js', array(), false, true );

	wp_enqueue_script( 'ScrollMagicGsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), false, true );

	wp_enqueue_script( 'GsapScrollTo-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js', array(), false, true );

	wp_enqueue_script( 'olelo-fa', '//use.fontawesome.com/releases/v5.0.1/js/all.js', array(), '5.0.1' );

	wp_enqueue_script( 'slide-menu', get_template_directory_uri() . '/js/dist/slide-menu.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'olelo-fa', '//use.fontawesome.com/releases/v5.0.1/js/all.js', array(), '5.0.1' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'olelo_scripts' );


/**
 * Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute.
 *
*/
function olelo_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'olelo-fa'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'olelo_defer_scripts', 10, 3 );