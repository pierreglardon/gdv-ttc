<?php /* Template Name: user */

get_header(); ?>
 <section id="user">
     <div class="row">
         <article class="small-12 large-3 small-text-center medium-text-center large-text-left  columns" id="block-visu-user">
             <div class="user-picture">
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/robin.png" alt="Mon compte" />

             </div>

         </article>
         <article class="large-9 large-text-left small-12 small-text-center  columns" id="block-text-user">
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
         <div class="row contener-user-pannel">
             <article class="large-4 small-12 columns text-left ">
                 <a href="#"><i class="fa fa-star-o"></i>Ma collection</a>
             </article>
             <article class="large-4 small-12 columns text-left ">
                 <a href="#"><i class="fa fa-heart-o"></i>Ma wishlist</a>

             </article>
             <article class="large-4 small-12 columns text-left ">
                 <a href="#"><i class="fa fa-cog"></i>Gérer mon compte</a>
             </article>

         </div>

     </div>
 </section>


 <div id="page" role="main" class="cover2">
     <div class="row medium-12 columns">
         <div class="medium-9 columns results"><!-- RÉSULTATS -->
             <p>15 COMICS TROUVÉS POUR <a href="#">AVENGERS | 1963-2010</a></p>
         </div>
         <div class="medium-3 columns tri"><!-- TRI -->
             <label for="">Trier par :</label>
             <select name="select">
               <option value="value1">Les - récents</option>
               <option value="value2" selected>Les + récents</option>
               <option value="value3">Titre A-Z</option>
               <option value="value3">Titre Z-A</option>
             </select>
         </div>

     </div>

     <div class="row"><!-- LISTING COMICS DE LA SERIE -->
         <div class="small-6 medium-3 columns">
             <div class="card">
                 <div class="tools">
                     <div class="square bgred like">
                         <a href="#!">
                             <i class="fa fa-star-o"></i>
                         </a>
                     </div>
                     <div class="square bgblue fav">
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
                     <div class="square bgred like">
                         <a href="#!">
                             <i class="fa fa-star-o"></i>
                         </a>
                     </div>
                     <div class="square bgblue fav">
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
                     <div class="square bgred like">
                         <a href="#!">
                             <i class="fa fa-star-o"></i>
                         </a>
                     </div>
                     <div class="square bgblue fav">
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
                     <div class="square bgred like">
                         <a href="#!">
                             <i class="fa fa-star-o"></i>
                         </a>
                     </div>
                     <div class="square bgblue fav">
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

 <div class="row"><!-- LISTING COMICS DE LA SERIE -->
     <div class="small-6 medium-3 columns">
         <div class="card">
             <div class="tools">
                 <div class="square bgred like">
                     <a href="#!">
                         <i class="fa fa-star-o"></i>
                     </a>
                 </div>
                 <div class="square bgblue fav">
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
                 <div class="square bgred like">
                     <a href="#!">
                         <i class="fa fa-star-o"></i>
                     </a>
                 </div>
                 <div class="square bgblue fav">
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
                 <div class="square bgred like">
                     <a href="#!">
                         <i class="fa fa-star-o"></i>
                     </a>
                 </div>
                 <div class="square bgblue fav">
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
                 <div class="square bgred like">
                     <a href="#!">
                         <i class="fa fa-star-o"></i>
                     </a>
                 </div>
                 <div class="square bgblue fav">
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
