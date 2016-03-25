$('.card .tools .fav, .fiche-serie .fav').click(function(e){
    e.preventDefault();
    $(this).find('i').toggleClass('fa-star-o fa-star');
});
$('.card .tools .like, .fiche-serie .like').click(function(e){
    e.preventDefault();
    $(this).find('i').toggleClass('fa fa-heart-o fa fa-heart');
});
