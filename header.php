<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FitzMuseum
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
     <div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <?php
          $args = array(
            'theme_location' => 'primary',
            'depth'      => 2,
            'container'  => false,
            'menu_class'     => 'navbar-nav',
            'walker'     => new Bootstrap_Walker_Nav_Menu()
            );
          if (has_nav_menu('primary')) {
            wp_nav_menu($args);
          }
          ?>
        </div>

      </div>
</nav>
	<header id="masthead" class="site-header" role="banner">
    <div class="jumbotron jumbotron-fluid mb-5 doc-jumbotron head">
      <div class="container">
          <div class="row ">
            <div class="col-lg-12 col-xl-12 ">
                <a href="https://wwww.fitzmuseum.cam.ac.uk"><img src="https://lookup.fitzmuseum.cam.ac.uk/static/img/logos/rainbow.png" class="align-self-center mr-3 float-left thumb-post bg-white p-3 shadow-lg"></a>
            </div>
          </div>
      </div>
    </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
