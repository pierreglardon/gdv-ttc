$('.card .tools .fav, .fiche-serie .fav').click(function(e){
    e.preventDefault();
    $(this).find('i').toggleClass('fa-star-o fa-star');
});
$('.card .tools .like, .fiche-serie .like').click(function(e){
    e.preventDefault();
    $(this).find('i').toggleClass('fa fa-heart-o fa fa-heart');
});


jQuery(document).ready(function($) {  
    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function(){
    	$('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
});
