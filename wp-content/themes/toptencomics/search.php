<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section id="search-section"><!-- SECTION RECHERCHE BLEU -->
	<article class="row titre-search-section">
		<div class="small-12 text-center columns">
			<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/books.png" alt="Mon compte" />Collectez vos comics dès maintenant !</h2>
		</div>
	</article>
	<article class="row">
		<div class="small-12 columns">
			<section class="bigSearch">
				<div><?php get_search_form( $echo = true ) ?></div>
			</section>
			<form class="custom-filter" action="#" method="post">
					<div class="small-12 medium-12 large-5   columns">
						<div class="row">
							<div class="small-12 medium-12 large-5 small-text-left  columns">
								<label for="name">Filtrer par créateur</label>
							</div>
							<div class="small-12 medium-12 large-7 columns">
								<input type="text" name="nom" placeholder="saisissez un ou plusieur noms">
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-5   columns">
						<div class="row">
							<div class="small-12 medium-12 large-5 small-text-left medium-text-left large-text-right columns">
								<label for="" class="paru">Paru entre :</label>
							</div>
							<div class="small-12 medium-12 large-3 columns">
								<input type="text" name="date1" placeholder="1963">
							</div>
							<div class="small-12 medium-12 large-1 columns">
								<p>et</p>
							</div>
							<div class="small-12 medium-12 large-3 columns">
								<input type="text" name="date2" placeholder="2010">
							</div>
						</div>
					</div>
					<div class="small-12 medium-12 large-2  columns">
							<input type="submit" name="submit" value="Filtrer">
					</div>
			</form>
		</div>
	</article>
</section>


<section id="block-resultat-recherche">
	<div class="row medium-12 columns text-result">
			<div class="medium-9 columns results"><!-- RÉSULTATS -->
					<p>8 COMICS TROUVÉS POUR <a href="#">AVENGERS | 1963-2010</a></p>
			</div>
			<div class="medium-3 columns tri"><!-- TRI -->
					<label for="">Trier par :</label>
					<select name="select">
						<option value="value1">Les - récents</option>
						<option value="value2" selected>Les + récents</option>
						<option value="value3">Titre A-Z</option>
						<option value="value3">Titre Z-A</option>
					</select>
			</div>
	</div>
	<div class="row result"><!-- LISTING COMICS DE LA SERIE -->
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
							<img src="http://placehold.it/268x268" />
							<div class="comicTitle">
									<h4>guardians of the galaxy<strong>(23)</h4>
									<h6>2013 - present</h6>
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
							<img src="http://placehold.it/268x268" />
							<div class="comicTitle">
								<h4>guardians of the galaxy<strong>(23)</h4>
								<h6>2013 - présent</h6>
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
							<img src="http://placehold.it/268x268" />
							<div class="comicTitle">
								<h4>guardians of the galaxy<strong>(23)</h4>
								<h6>2013 - présent</h6>
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
							<img src="http://placehold.it/268x268" />
							<div class="comicTitle">
								<h4>guardians of the galaxy<strong>(23)</h4>
								<h6>2013 - présent</h6>
							</div>
					</div>
			</div>
	</div>
	<div class="row result"><!-- LISTING COMICS DE LA SERIE -->
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
						<img src="http://placehold.it/268x268" />
						<div class="comicTitle">
							<h4>guardians of the galaxy<strong>(23)</h4>
							<h6>2013 - présent</h6>
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
						<img src="http://placehold.it/268x268" />
						<div class="comicTitle">
							<h4>guardians of the galaxy<strong>(23)</h4>
							<h6>2013 - présent</h6>
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
						<img src="http://placehold.it/268x268" />
						<div class="comicTitle">
							<h4>guardians of the galaxy<strong>(23)</h4>
							<h6>2013 - présent</h6>
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
						<img src="http://placehold.it/268x268" />
						<div class="comicTitle">
							<h4>guardians of the galaxy<strong>(23)</h4>
							<h6>2013 - présent</h6>
						</div>
				</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>
