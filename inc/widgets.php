<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fitzmuseum_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fitzmuseum' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fitzmuseum' ),
		'before_widget' => '<section id="%1$s" class="widget mb-3 mr-3 card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fitzmuseum_widgets_init' );
