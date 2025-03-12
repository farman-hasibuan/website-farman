// event pada saat link di klik
$('.page-scroll').on('click', function(e){
    
    // ambil isi href(tanda pagar di html farman)
    var tujuan = $(this).attr('href');
    // tangkap elemen yang bersangkutan
    var elementTujuan = $(tujuan);

    // pindahkan scrol
    $('body').animate({
            scrollTop: elemenTujuan.offset().top - 50
    }, 1250, 'swing');


    e.preventDefault();

});



// paralax

$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    $('.jumbotron img').css(}
        'transform' : 'translate(0px, '+ wScroll/4 +'%')'
    ){;
)};