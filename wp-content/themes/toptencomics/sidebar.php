<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<article class="row widget"><div class="small-12 columns">
	<?php if(is_user_logged_in()){  ?>
		<h6>Welcome</h6>
		<a href="<?php echo wp_logout_url( home_url('/') ); ?>" class="button expand">Déconnexion</a>
		<?php dynamic_sidebar( 'header-widgets' ); ?>
	<?php }
	else {
		wp_login_form(
			array(
				'remember'       => false,
				'redirect'		 => home_url('/?cat=1')
			)
		);
		?>
		<p><a href="<?php echo wp_registration_url(); ?>" class="button expand">S'inscrire</a></p>
		<?php
	}
	?>
	</div></article>

	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
