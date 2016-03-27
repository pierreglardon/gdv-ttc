<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="news" class="single">
	<div id="page" role="main">
		<div class="row">
			<div class="small-12 columns text-center">
				<h2>Actualités</h2>
			</div>
		</div>
		<div class="row article">

			<?php while ( have_posts() ) : the_post(); ?>

			<article class="large-12 columns post">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<section>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<h4><?php the_time('j F, Y'); ?></h4>
					<?php the_content(); ?>
				</section>
				<footer>
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
					<div class="clearfix navigationArticle">
						<div class="float-left text-left">
							<?php previous_post_link('%link', '<i class="fa fa-angle-left"></i> Article précédent'); ?>
						</div>
						<div class="float-right text-right">
							<?php next_post_link('%link', 'Article suivant <i class="fa fa-angle-right"></i>'); ?>
						</div>
					</div>
				</footer>
			</article>
		<?php endwhile;?>
		</div>

	</div>
</div>


<?php get_footer(); ?>
