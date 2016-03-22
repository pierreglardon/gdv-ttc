<?php /* Template Name: Single - PAGE DU COMICS */ ?>

<?php get_header(); ?>

<div class="cover2">
    <section class="bloc-issue"><!-- BLOC SÉRIE COMICS -->
        <div class=" small-12 columns fil row">
            <ul>
                <li><a href="#">RÉSULTATS</li></a>
                <li><a href="#"><i class="fa fa-angle-left"></i></li></a>
                <li><a href="#">NOM DE LA SÉRIE DE COMICS</li></a>
            </ul>
        </div>

        <article class="row fiche-serie"><!-- DESCRIPTIF DE LA SERIE -->
            <aside class="small-12 medium-5 columns"><!-- IMG -->
                <img src="http://placehold.it/490x690">
            </aside>

            <aside class="small-12 medium-7 columns"><!-- TEXTE -->
                <div class="texte-serie">
                    <div class="square bgred btn">
                        <a href="#!">AJOUTER À MA COLLECTION<i class="fa fa-star-o"></i></a>
                    </div>
                    <div class="square bgblue btn">
                        <a href="#!">AJOUTER À MA WISHLIST<i class="fa fa-heart-o"></i></a>
                    </div>
                    <div class="title-serie">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/picto-book.png" alt="pictogramme comics" width="35" height="35" class="picto-book"/>
                        <h2>AVENGERS</h2>
                        <p>(1996 - 1997)</p>
                        <h3>- Avengers #1</h3>
                    </div>
                    <div class="carac-liste">
                        <ul>
                            <li><strong>PUBLIÉ LE :</strong>  1er décembre 1999</li>
                            <li><strong>ÉCRIVAIN :</strong>  Roger Stern</li>
                            <li><strong>DESSINATEUR : </strong> Bruce Timm</li>
                            <li><strong>EAN :</strong>  12345785857</li>
                            <li><strong>PAGINATION :</strong>  34 pages</li>
                        </ul>
                    </div>
                    <div class="description-scroll">
                        <p>
                            Earth's Mightiest Heroes reunite with their biggest guns at the forefront to take on familiar enemies and new threats alike! Featuring the work of Kurt Busiek, George Perez and other. Earth's Mightiest Heroes reunite with their biggest guns at the forefront to take on familiar enemies and new threats alike! Featuring the enemies and new threats alike! Featuring the work of Kurt
                        </p>
                    </div>
                </div>
            </aside>

        </article><!-- FIN DESCRIPTIF DE LA SERIE -->
    </section><!-- FIN BLOC SÉRIE COMICS -->

    <aside class="clearfix social-networks row"><!-- RÉSEAUX SOCIAUX -->
        <div class="variantes float-left">
            <a href="#">VOIR LES VARIANTES <i class="fa fa-angle-right"></i></a>
        </div>
        <ul class="float-right">
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
    </aside><!-- FIN RÉSEAUX SOCIAUX -->

    <div class="row medium-12 columns">
        <div class="medium-12 columns results"><!-- RÉSULTATS -->
            <p>AUTRES COMICS DE LA SÉRIE <a href="#">AVENGERS | 1963-2010</a></p>
        </div>
    </div>

    <div class="row"><!-- LISTING COMICS DE LA SERIE -->
        <div class="small-6 medium-3 columns">
            <div class="card">
                <div class="tools">
                    <div class="square bgred">
                        <a href="#!">
                            <i class="fa fa-star-o"></i>
                        </a>
                    </div>
                    <div class="square bgblue">
                        <a href="#!">
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </div>
                </div>
                <img src="http://placehold.it/268x411" />
                <div class="comicTitle">
                    <h4>Nom du comic</h4>
                    <h5>Titre du comic</h5>
                </div>
            </div>
        </div>
        <div class="small-6 medium-3 columns">
            <div class="card">
                <div class="tools">
                    <div class="square bgred">
                        <a href="#!">
                            <i class="fa fa-star-o"></i>
                        </a>
                    </div>
                    <div class="square bgblue">
                        <a href="#!">
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </div>
                </div>
                <img src="http://placehold.it/268x411" />
                <div class="comicTitle">
                    <h4>Nom du comic</h4>
                    <h5>Titre du comic</h5>
                </div>
            </div>
        </div>
        <div class="small-6 medium-3 columns">
            <div class="card">
                <div class="tools">
                    <div class="square bgred">
                        <a href="#!">
                            <i class="fa fa-star-o"></i>
                        </a>
                    </div>
                    <div class="square bgblue">
                        <a href="#!">
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </div>
                </div>
                <img src="http://placehold.it/268x411" />
                <div class="comicTitle">
                    <h4>Nom du comic</h4>
                    <h5>Titre du comic</h5>
                </div>
            </div>
        </div>
        <div class="small-6 medium-3 columns">
            <div class="card">
                <div class="tools">
                    <div class="square bgred">
                        <a href="#!">
                            <i class="fa fa-star-o"></i>
                        </a>
                    </div>
                    <div class="square bgblue">
                        <a href="#!">
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </div>
                </div>
                <img src="http://placehold.it/268x411" />
                <div class="comicTitle">
                    <h4>Nom du comic</h4>
                    <h5>Titre du comic</h5>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
