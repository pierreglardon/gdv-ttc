<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="page" role="main">

	<section class="join">
		<img src="<?php echo get_template_directory_uri () ?>/assets/images/logo-big.png" alt="<?php bloginfo( 'name' ); ?>" />
		<h2>GÉREZ VOTRE COLLECTION EN QUELQUES CLICS !</h2>
		<a href="#" class="btn">Rejoignez l'aventure !</a>
	</section>
	<section class="arguments-list row text-center">
		<div class="large-4 columns argument">
			<div class="medium-10 medium-centered columns">
				<img src="" alt="" />
				<h3>Une base de donnée complète</h3>
				<p>Profitez de visuels exclusifs Marvel et de toutes les informationssur vos comics préférés !</p>
			</div>
		</div>
		<div class="large-4 columns argument">
			<div class="medium-10 medium-centered columns">
				<img src="" alt="" />
				<h3>Une interface intuitive</h3>
				<p>Naviguez rapidement et simplement. Nous mettons tout en oeuvre pour vous procurer la meilleure expérience possible !</p>
			</div>
		</div>
		<div class="large-4 columns argument">
			<div class="medium-10 medium-centered columns">
				<img src="" alt="" />
				<h3>Un outil accessible partout</h3>
				<p>Gérez votre collection où vous le désirez. Rejoignez l'aventure TTC depuis votre ordinateur, tablette et smartphone !</p>
			</div>
		</div>
	</section>


		<?php dynamic_sidebar( 'home-widgets' ); ?>

		<?php dynamic_sidebar( 'arguments-widgets' ); ?>


	<article class="main-content">

		<?php if ( have_posts() ) :

		?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
