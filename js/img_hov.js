// JavaScript Document $(document).ready(function() {
        $('.viewport').mouseenter(function(e) {
            $(this).children('a').children('img').animate({ height: '174', left: '0', top: '0', width: '260'}, 100);
            $(this).children('a').children('span').fadeIn(200);
        }).mouseleave(function(e) {
            $(this).children('a').children('img').animate({ height: '200', left: '-20', top: '-20', width: '300'}, 100);
            $(this).children('a').children('span').fadeOut(200);
        });
   
   
   $('a[href*=#]:not([href=#]):not([data-toggle="modal"])').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});