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
		<a href="#!" class="btn">Rejoignez l'aventure !</a>
		<section class="arguments-list row text-center">
			<div class="large-4 columns argument">
				<div class="medium-8 medium-centered columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/icons/book.png" alt="Une base de donnée complète" />
					<h3>Une base de donnée complète</h3>
					<p>Profitez de <strong>visuels</strong><br/> exclusifs <strong>Marvel</strong><br/> et de toutes les informations <br/>sur vos <strong>comics</strong> préférés !</p>
				</div>
			</div>
			<div class="large-4 columns argument">
				<div class="medium-8 medium-centered columns">
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/icons/pointer.png" alt="Une interface intuitive" />
					<h3>Une interface <br/>intuitive</h3>
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

		<h4><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/picto-book.png" alt="picstogramme comics" width="65" height="65"/>Collectez vos comics dès maintenant !</h4>
		<div><?php get_search_form( $echo = true ) ?></div>
	</section>
	<section class="tendancesMarvel">
		<div class="row">
			<h3>Tendances Marvel</h3>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgred">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgblue">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<img src="http://placehold.it/268x411" />
					<div class="comicTitle">
						<h4>Nom du comic</h4>
						<h5>Titre du comic</h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgred">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgblue">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<img src="http://placehold.it/268x411" />
					<div class="comicTitle">
						<h4>Nom du comic</h4>
						<h5>Titre du comic</h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgred">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgblue">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<img src="http://placehold.it/268x411" />
					<div class="comicTitle">
						<h4>Nom du comic</h4>
						<h5>Titre du comic</h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgred">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgblue">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<img src="http://placehold.it/268x411" />
					<div class="comicTitle">
						<h4>Nom du comic</h4>
						<h5>Titre du comic</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
