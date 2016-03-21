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

	<section class="newsletter">
		<div class="row">
			<div class="medium-8 columns">
				<h3 class="text-center">Abonnes-toi <br />aux comics de la ligue !</h3>
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
					<li class="medium-4 columns">Menu 1</li>
					<li class="medium-4 columns">Menu 2</li>
					<li class="medium-4 columns">Menu 3</li>
					<li class="medium-4 columns">Menu 4</li>
					<li class="medium-4 columns">Menu 5</li>
					<li class="medium-4 columns">Menu 6</li>
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
</div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
