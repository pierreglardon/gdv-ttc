$(document).ready(function() {

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            $('.parallaxFlocon .floconScr1').css('margin-top', scroll/2),
            $('.parallaxFlocon .floconScr2').css('margin-top', scroll/3),
            $('.parallaxFlocon .floconScr3').css('margin-top', scroll/2),
            $('.parallaxFlocon .floconScr4').css('margin-top', scroll/4);
            $('.parallaxFlocon .floconScr5').css('margin-top', scroll/3);
        }
        if (scroll == 0) {
            $('.parallaxFlocon .floconScr1').css('margin-top', '0'),
            $('.parallaxFlocon .floconScr2').css('margin-top', '0'),
            $('.parallaxFlocon .floconScr4').css('margin-top', '0'),
            $('.parallaxFlocon .floconScr5').css('margin-top', '0');
        }
    });

});
