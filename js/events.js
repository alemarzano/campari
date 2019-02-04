$(document).click(function (e) {

$(function () {
    var sticky = $("#sticky-bar");
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            sticky.removeClass('rojo').addClass("blanco");
        } else {
            sticky.removeClass("blanco").addClass('rojo');
        }
    });
});


// $('#age').modal({
//     backdrop: 'static',
//     keyboard: false,
//     show:true
// });

// CLOSE MENU //

if (!$(e.target).is('.navbar-collapse')) {
    $('.collapse').collapse('hide');
};

});

$(document).ready(function(){
    // Videos

    var $videoSrc;
    $('.video-btn').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);



    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function (e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc);
    })


    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    // Carousel //

    $('.loop').owlCarousel({
        center: true,
        items:1,
        loop: true,
        margin: 10,
        nav:true,
        dots:false,
        navText: ["<img src='img/left.png'>", "<img src='img/right.png'>"],
        responsive: {
            600: {
                items: 4,  
                nav:true,              
            }
        }
    });

    var _owl = $('.loop .active').first();    
    var _owlactive = _owl.find('.overlay');
    _owlactive.addClass('overlay-active');

    // $('.owl-nav button').click(function(){
    //     _owlactive.removeClass('overlay-active');
    //     _owlactive.addClass('overlay-active');
    //     return false;
    // });
     

})