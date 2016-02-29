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
		<img src="<?php echo get_template_directory_uri () ?>/assets/images/logo-big.png" alt="<?php bloginfo( 'name' ); ?>" class="biglogo" />
		<h2>GÉREZ VOTRE COLLECTION EN QUELQUES CLICS !</h2>
		<a href="#" class="btn">Rejoignez l'aventure !</a>
		<section class="arguments-list row text-center">
			<div class="large-4 columns argument">
				<div class="medium-8 medium-centered columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/icons/book.png" alt="Une base de donnée complète" />
					<h3>Une base de donnée complète</h3>
					<p>Profitez de <strong>visuels</strong> exclusifs <strong>Marvel</strong> et de toutes les informationssur vos <strong>comics</strong> préférés !</p>
				</div>
			</div>
			<div class="large-4 columns argument">
				<div class="medium-8 medium-centered columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/icons/pointer.png" alt="Une interface intuitive" />
					<h3>Une interface intuitive</h3>
					<p>Naviguez <strong>rapidement</strong> et <strong>simplement</strong>. Nous mettons tout en oeuvre pour vous procurer la meilleure <strong>expérience</strong> possible !</p>
				</div>
			</div>
			<div class="large-4 columns argument">
				<div class="medium-8 medium-centered columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/icons/screens.png" alt="Un outil accessible partout" />
					<h3>Un outil accessible partout</h3>
					<p>Gérez votre <strong>collection</strong> où vous le désirez. Rejoignez l'aventure <strong>TTC</strong> depuis votre <strong>ordinateur, tablette et smartphone</strong> !</p>
				</div>
			</div>
		</section>
	</section>
	<section class="bigSearch">
		<h4>Collectez vos comics dès maintenant !</h4>
		<div><?php get_search_form( $echo = true ) ?></div>
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
