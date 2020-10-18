// Event pada saat link
$('.page-scroll').on('click', function(e){
    // Ambil isi href
    console.log('ok');
    var tujuan = $(this).attr('href');
    // Tangkap Elemen yang bersangkutan
    var elemenTujuan = $(tujuan);


    // Pindahan Scroll
    $('body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    }, 1000, 'swing');

    e.preventDefault();
});