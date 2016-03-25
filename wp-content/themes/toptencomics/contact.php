<?php
/*
Template Name: custom-contact
*/
?>
<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<section class="fond-contact">
<?php if ( have_posts() ) : ?>
	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="row block-titre-contact text-center">
		<h2><?php the_title(); ?></h2>
		<h4>besoin d'information(s) ou envie de discuter du dernier batman ?<br>Contactez-nous ou passez à la boutique !</h4>
	</article>
	<article class="row information-formulaire">
		<div class="small-12 medium-6 block-info-reseaux columns">
			<div class="text-left block-information">
				<h5>téléphone :</h5>
				<p>03 87 45 06 06</p>
				<h5>adresse :</h5>
				<p>361 Place du parc des animaux<br>67000 Strasbourg<br> FRANCE</p>
				<h5>Mail :</h5>
				<p>hello@top10comics.com</p>
			</div>
			<div class="text-left block-reseaux">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="small-12 medium-6 block-formulaire columns">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>
<?php endif; // End have_posts() check. ?>
</section>
<?php get_footer(); ?>
