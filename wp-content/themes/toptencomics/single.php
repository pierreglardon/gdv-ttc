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

		<?php if ( is_single() ) { ?>
			<div class="related-posts wrapper row clearfix">
				<h3>Ces articles pourraient également vous plaire :</h3>
				<?php $categories = get_the_category();
					foreach ($categories as $category) {
						$cat = $category->cat_ID;
						$args=array(
							'cat' => $cat,
							'order' =>DESC,
							'post__not_in' => array($post->ID),
							'posts_per_page'=>2,
						);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
						$i = 0; while ($my_query->have_posts() && $i < 3) : $my_query->the_post(); ?>
							<article class="medium-6 columns post">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php endif; ?>
								<section>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h4><?php the_time('j F, Y'); ?></h4>
									<?php the_excerpt(); ?>
								</section>
								<footer class="clearfix">
									<ul class="float-left">
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
									<div class="readmore float-right">
										<a href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-angle-right"></i></a>
									</div>
								</footer>
							</article>
				 		<?php  $i++; endwhile; }
				 	}
			 		wp_reset_query();
				?>
			</div>
		<?php } else {};?>

	</div>
</div>



<!--
<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="row">
				<div class="column">
					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div> -->
<?php get_footer(); ?>
