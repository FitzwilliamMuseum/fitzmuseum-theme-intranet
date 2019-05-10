<?php
/**
 * Enqueue scripts and styles.
 */
function fitzmuseum_scripts() {
	wp_enqueue_style( 'bootstrap-four-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'material-site-style', get_stylesheet_directory_uri() . '/css/material.css');
	wp_enqueue_style( 'fitz-site-style', get_stylesheet_directory_uri() . '/css/site.css');

	wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_style( 'google-fonts-style', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700');
	wp_enqueue_style( 'material-style-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-2.1.4.min.js');
	wp_enqueue_script( 'popper-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
	wp_enqueue_script( 'bootstrap-js-cdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
	wp_enqueue_script( 'material-js', get_template_directory_uri() . '/js/material.js' );
	wp_enqueue_script( 'backtotop-js', get_template_directory_uri() . '/js/backtotop.js' );

	wp_enqueue_script( 'zammad_form_script', 'https://helpdesk.fitzmuseum.cam.ac.uk/assets/form/form.js' );
	wp_enqueue_script( 'zammad_chat_script', 'https://helpdesk.fitzmuseum.cam.ac.uk/assets/chat/chat.js' );
	wp_enqueue_script( 'feedback-js', get_template_directory_uri() . '/js/feedback.js' );
	wp_enqueue_script( 'chat-js', get_template_directory_uri() . '/js/chat.js' );

	wp_enqueue_script( 'config-js', get_template_directory_uri() . '/js/config.js' );
	wp_enqueue_script( 'klaro-js', get_template_directory_uri() .'/js/klaro.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
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
