<?php /* Template Name: user modif */

get_header(); ?>
<section id="user" class="cover">
    <div class="row">
        <article class="medium-12 large-3 columns" id="block-visu-user">
            <div class="user-picture">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/robin.png" alt="Mon compte" />

            </div>

        </article>
        <article class="medium-12 large-9 columns" id="block-text-user">
            <div class="text-user">
                <h2>Bienvenue <strong>Peter pan !</strong></h2>
                <p>Vous possédez actuellement :</p>
                <ul>
                    <li><a href="#"><i class="fa fa-book"></i> <b>63 Comics</b></a></li>
                    <li><a href="#"><i class="fa fa-star"></i> <b>63</b> dans votre <b>Collection</b></a></li>
                    <li><a href="#"><i class="fa fa-heart"></i> <b>35</b> dans votre <b>Wishlist</b></a></li>
                </ul>
            </div>
        </article>

    </div>
    <div class="user-pannel">

        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="row">
                <?php $my_query = new WP_Query('page_id=10');
                while ($my_query->have_posts()) : $my_query->the_post();
                $do_not_duplicate = $post->ID;?>

                    <div class="entry">

                        <?php the_content('read more &raquo;'); ?>

                    </div>

                 <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
