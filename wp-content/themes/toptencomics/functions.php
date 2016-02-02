<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

// --> Comics
function comics_post_types(){
         $labels_comics_post_type_array = array(
             'name'                  =>  __('Comics', 'topten'),
             'singular_name'         =>  __('Comics', 'topten'),
             'add_new'               =>  __('Ajouter un comics', 'topten'),
             'add_new_item'          =>  __('Ajouter un comics', 'topten'),
             'edit_item'             =>  __('Editer le comics', 'topten'),
             'new_item'              =>  __('Nouveau comics', 'topten'),
             'view_item'             =>  __('Visualiser le comics', 'topten'),
             'search_items'          =>  __('Rechercher un comics', 'topten'),
             'not_found'             =>  __('Aucun comics', 'topten'),
             'not_found_in_trash'    =>  __('Aucun comics dans la corbeille', 'topten'),
             'parent_item_colon'     =>  __('--', 'topten'),
             'menu_name'             =>  __('Comics', 'topten')
         );
         $supports_comics_post_type_array = array(
             'title',
             'editor',
             'thumbnail',
             'excerpt'
         );
         $rewrite_comics_post_type_array = array(
             'slug'          =>  _x('comic-book', 'Pour les collections', 'topten'),
             'with_front'    =>  false,
             'feeds'         =>  true,
             'pages'         =>  true
         );
         $args_comics_post_type_array = array(
             'labels'                =>  $labels_comics_post_type_array,
             'description'           =>  __('Contenu complet Projets', 'topten'),
             'public'                =>  true,
             'publicly_queryable'    =>  true,
             'menu_position'         =>  50,
             'menu_icon'             =>  '',
             'capability_type'       =>  'post',
             'supports'              =>  $supports_comics_post_type_array,
             'rewrite'               =>  $rewrite_comics_post_type_array,
             'show_in_nav_menus'     =>  true,
             'hierarchical'          =>  true,
             'has_archive'           =>  true
         );
         register_post_type('comics', $args_comics_post_type_array);
}
add_action('init', 'comics_post_types', 1);
