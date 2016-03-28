<?php
/**
* The template for displaying the footer
*
* Contains the closing of the "off-canvas-wrap" div and all content after.
*
* @package WordPress
* @subpackage FoundationPress
* @since FoundationPress 1.0.0
*/

?>

</section>
<div id="footer-container">
	<section class="tendancesMarvel">
		<div class="row">
			<h3>Tendances Marvel</h3>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgblue fav">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgred like">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<a href="http://localhost/gdv-ttc/comics"><img src="http://x.annihil.us/u/prod/marvel/i/mg/9/c0/56d09bb90bf77.jpg" /></a>
					<div class="comicTitle">
						<h4><a href="http://localhost/gdv-ttc/comics">SPIDER-MAN #2</a></h4>
						<h5><a href="http://localhost/gdv-ttc/comics">Bendis, Pichelli</a></h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns">
				<div class="card">
					<div class="tools">
						<div class="square bgblue fav">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgred like">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<a href="http://localhost/gdv-ttc/comics"><img src="http://x.annihil.us/u/prod/marvel/i/mg/6/a0/5697d7ca0f513.jpg" /></a>
					<div class="comicTitle">
						<h4><a href="http://localhost/gdv-ttc/comics">SPIDER-MAN #3</a></h4>
						<h5><a href="http://localhost/gdv-ttc/comics">Bendis, Pichelli</a></h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns hide-for-small-only">
				<div class="card">
					<div class="tools">
						<div class="square bgblue fav">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgred like">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<a href="http://localhost/gdv-ttc/comics"><img src="http://i.annihil.us/u/prod/marvel/i/mg/3/80/56e3335193a8c.jpg" /></a>
					<div class="comicTitle">
						<h4><a href="http://localhost/gdv-ttc/comics">EXTRAORDINARY X-MEN #8</a></h4>
						<h5><a href="http://localhost/gdv-ttc/comics">Lemire, Rammos</a></h5>
					</div>
				</div>
			</div>
			<div class="small-6 medium-3 columns hide-for-small-only">
				<div class="card">
					<div class="tools">
						<div class="square bgblue fav">
							<a href="#!">
								<i class="fa fa-star-o"></i>
							</a>
						</div>
						<div class="square bgred like">
							<a href="#!">
								<i class="fa fa-heart-o"></i>
							</a>
						</div>
					</div>
					<a href="http://localhost/gdv-ttc/comics"><img src="http://x.annihil.us/u/prod/marvel/i/mg/2/f0/5314d3e4534c2.jpg" /></a>
					<div class="comicTitle">
						<h4><a href="http://localhost/gdv-ttc/comics">CAPTAIN MARVEL #1</a></h4>
						<h5><a href="http://localhost/gdv-ttc/comics">DeConnick, Lopez</a></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="newsletter">
		<div class="row">
			<div class="medium-8 columns">
				<h3 class="text-center">ABONNES-TOI <br/>AUX COMICS DE LA LIGUE !</h3>
				<div class="row form">
					<div class="small-9 columns">
						<input type="email" class="email" placeholder="Mon super email"/>
					</div>
					<div class="small-3 columns">
						<input type="submit" class="submit" value="M'inscrire"/>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri () ?>/assets/images/heroes.png" class="heroes" />
	</section>

	<footer>
		<div class="row logomenu">
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri () ?>/assets/images/logo-big.png" alt="<?php bloginfo( 'name' ); ?>" />
			</div>
			<div class="medium-7 medium-offset-1 columns">
				 <ul class="row">
					<li class="medium-4 columns"><a href="#!">Actualités</a></li>
					<li class="medium-4 columns"><a href="#!">Mentions légales</a></li>
					<li class="medium-4 columns"><a href="#!">Newsletter</a></li>
					<li class="medium-4 columns"><a href="#!">Comics</a></li>
					<li class="medium-4 columns"><a href="#!">Termes d'utilisation</a></li>
					<li class="medium-4 columns"><a href="#!">Nous contacter</a></li>
				</ul>
			</div>
		</div>
		<div class="row follow cleafix">
			<div class="small-12 columns">
				<div class="float-right followWrapper">
					<h3>Suivez l'aventure sur</h3>
					<ul>
						<li>
							<a href="#!"><i class="fa fa-facebook-official"></i></a>
						</li>
						<li>
							<a href="#!"><i class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a href="#!"><i class="fa fa-google-plus"></i></a>
						</li>
						<li>
							<a href="#!"><i class="fa fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<section class="by361 text-center">
		Di Blasi Maxence, Glardon Pierre & Vix Romane
	</section>
</div>


<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div>
</div>
</div>
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.2.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
