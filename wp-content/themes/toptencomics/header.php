<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js js" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<link href='https://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div id="preloader"></div>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="tool-bar">
			<div class="row">
				<div class="small-6 columns searchHeader">
					<i class="fa fa-search"></i> <?php get_search_form( $echo = true ) ?>
				</div>
				<div class="small-6 columns">
					<?php if(is_user_logged_in()){  ?>
						<a href="<?php echo get_site_url(); ?>/user"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mini-batman.png" alt="Mon compte" /> <span>Mon compte</span></a>
					<?php }
					else { ?>
						<a href="<?php echo get_site_url(); ?>/log"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mini-batman.png" alt="Inscription" /> <span>S'inscrire ou se connecter</span></a>
						<?php
					}
					?>
					<!-- <a href="<?php echo get_site_url(); ?>/user"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mini-batman.png" alt="Mon compte" /> <span>Mon compte</span></a> -->
				</div>
			</div>
		</div>
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="offCanvas"></button>
			<div class="title-bar-title">
				<a href="<?php echo get_site_url(); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="row">
				<div class="small-4 columns show-for-medium">
					<div class="top-bar-left">
						<ul class="logo">
							<li class="home">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="hiddenBeforeScroll">
									<img src="<?php echo get_template_directory_uri () ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="small-8 columns">
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>
						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
							<?php get_template_part( 'parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
