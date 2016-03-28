<?php /* Template Name: user */

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
        <ul class="tabs" data-tabs id="example-tabs">
            <li class="tabs-title is-active">
                <a href="#collection" aria-selected="true">
                    <i class="fa fa-star txtblue"></i>Ma collection
                </a>
            </li>
            <li class="tabs-title">
                <a href="#wishlist"><i class="fa fa-heart txtred"></i>Ma wishlist</a>
            </li>
            <li class="tabs-title">
                <a href="#account"><i class="fa fa-cog"></i>Gérer mon compte</a>
            </li>
        </ul>
        <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="row">
                <div class="tabs-panel is-active" id="collection">
                    <header class="row clearfix">
                        <div class="title float-left">
                            28 comics dans votre <span class="txtblue">collection</span>
                        </div>
                        <div class="tri float-right"><!-- TRI -->
                            <label for="">Trier par :</label>
                            <select name="select">
                                <option value="value1">Les - récents</option>
                                <option value="value2" selected>Les + récents</option>
                                <option value="value3">Titre A-Z</option>
                                <option value="value3">Titre Z-A</option>
                            </select>
                        </div>
                    </header>
                    <div class="row">
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/c/90/4bb7e07b9bc49.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #1</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/3/40/4bb85467110b9.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #2</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/6/f0/4bb846870f7a7.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #3</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/c/b0/4bb852bf1fe78.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #4</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/9/b0/4bb8529da8d72.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #5</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/7/40/4c362be998c94.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #6</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/f/b0/4bb79ae06cf8e.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #7</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/f/60/4bb6dce5d822f.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #8</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-panel" id="wishlist">
                    <header class="row clearfix">
                        <div class="title float-left">
                            28 comics dans votre <span class="txtred">wishlist</span>
                        </div>
                        <div class="tri float-right"><!-- TRI -->
                            <label for="">Trier par :</label>
                            <select name="select">
                                <option value="value1">Les - récents</option>
                                <option value="value2" selected>Les + récents</option>
                                <option value="value3">Titre A-Z</option>
                                <option value="value3">Titre Z-A</option>
                            </select>
                        </div>
                    </header>
                    <div class="row">


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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/9/b0/4bb8529da8d72.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #5</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/7/40/4c362be998c94.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #6</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/f/b0/4bb79ae06cf8e.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #7</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/f/60/4bb6dce5d822f.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #8</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/c/90/4bb7e07b9bc49.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #1</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://x.annihil.us/u/prod/marvel/i/mg/3/40/4bb85467110b9.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #2</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/6/f0/4bb846870f7a7.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #3</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
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
                                <a href="http://localhost/gdv-ttc/single"><img src="http://i.annihil.us/u/prod/marvel/i/mg/c/b0/4bb852bf1fe78.jpg" /></a>
                                <div class="comicTitle">
                                    <h4><a href="http://localhost/gdv-ttc/single">Avengers #4</a></h4>
                                    <h5><a href="http://localhost/gdv-ttc/single">Valentino, Liefeld</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tabs-panel" id="account">
                    <header class="row clearfix">
                        <div class="title float-left">
                            Gérer votre compte
                        </div>
                        <div class="float-right">
                            &nbsp;
                        </div>
                    </header>
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
        </div>
    </div>
</section>

<?php get_footer(); ?>
