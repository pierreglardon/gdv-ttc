<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<style>
	html {margin-top:0 !important;}
</style>
<div class="desktop">
	<a href="<?php echo get_site_url(); ?>" class="lien"></a>
	<div class="img-wrapper">
		<img class="img-404" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/404.jpg" alt="erreur 404"/>
	</div>
	<div class="videoWrapper">
	  <iframe frameborder="0" height="100%" width="100%"
	    src="https://www.youtube.com/embed/heDQC2xugrU?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
	  </iframe>
	</div>
</div>
<div class="mobile">
	<a href="<?php echo get_site_url(); ?>" class="lien"></a>
	<img class="img-404" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/404.jpg" alt="erreur 404"/>
</div>
<script>
window.setTimeout(function() {
    window.location.href = '<?php echo get_site_url(); ?>';
}, 7000);
</script>
<?php get_footer(); ?>
