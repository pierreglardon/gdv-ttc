<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article class="large-6 columns post">
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
