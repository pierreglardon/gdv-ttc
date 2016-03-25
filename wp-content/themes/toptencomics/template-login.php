<?php
/*
Template Name: Page de connexion
*/
?>
<?php
/**
* The template for displaying pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other "pages" on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage FoundationPress
* @since FoundationPress 1.0.0
*/

get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>
<div id="page" role="main" class="cover loginpageWrapper">
    <div class="loginpage">
        <?php do_action( 'foundationpress_before_content' ); ?>
        <?php if(is_user_logged_in()){  ?>

            Vous êtes déjà connecté
            <?php }
            else {
                ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                    <div class="row">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;?>

                <?php
            }
            ?>
            <?php do_action( 'foundationpress_after_content' ); ?>

        </div>
    </div>

    <?php get_footer(); ?>
