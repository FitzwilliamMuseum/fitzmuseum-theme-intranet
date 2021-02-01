<?php
/**
 * Enqueue scripts and styles.
 */
function fitzmuseum_scripts() {
	wp_enqueue_style( 'bootstrap-four-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'fitz-site-style', get_stylesheet_directory_uri() . '/css/site.css');

	wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_style( 'google-fonts-style', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700');
	wp_enqueue_style( 'material-style-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.5.1.min.js', $in_footer = true );
	wp_enqueue_script( 'popper-cdn', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', $in_footer = true );
	wp_enqueue_script( 'bootstrap-js-cdn','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', $in_footer = true );
	wp_enqueue_script( 'config-js', get_template_directory_uri() . '/js/config.js' , $in_footer = true );
	wp_enqueue_script( 'klaro-js', get_template_directory_uri() .'/js/klaro.js', $in_footer = true  );

}
add_action( 'wp_enqueue_scripts', 'fitzmuseum_scripts' );


/**
 * Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute.
 *
*/
function fitzmuseum_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array(
		'fitzmuseum-fa'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'fitzmuseum_defer_scripts', 10, 3 );
