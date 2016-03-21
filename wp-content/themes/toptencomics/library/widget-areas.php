<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="large-12 columns">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'header-widgets',
	  'name' => __( 'Header widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this header container', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'home-widgets',
	  'name' => __( 'Home widgets', 'foundationpress' ),
	  'description' => __( 'Texte page d\'accueil', 'foundationpress' ),
	  'before_widget' => '<h2 id="%1$s" class="row widget %2$s home-h2"><div class="small-12 columns">',
	  'after_widget' => '</h2>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'arguments-widgets',
	  'name' => __( 'Arguments block', 'foundationpress' ),
	  'description' => __( 'Les 3 arguments sur la page d\'accueil', 'foundationpress' ),
	  'before_widget' => '<h2 id="%1$s" class="row widget %2$s home-h2"><div class="small-12 columns">',
	  'after_widget' => '</h2>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
