// $(window).load(function () {
//     $('.loader-box').fadeOut();
// });

$(document).ready(function () {

    // setTimeout(function () {
    //     $('body').addClass('loaded');
    //     $('h1').css('color', '#222222');
    // }, 3000);

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
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navText: ["<img src='img/left.png'>", "<img src='img/right.png'>"],
        responsive: {
            600: {
                items: 2,
                nav: true,
            },
            1024: {
                items: 2,
                nav: true,
            }
        }
    });

    // Check if element is scrolled into view
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
    // If element is scrolled into view, fade it in
    $(window).scroll(function () {
        $('.scroll-behind .animated').each(function () {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('fadeInLeft');
            }
        });
    });
    // owl bartenders
    $(".owl-bartenders").owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoHeight: true
    });

    // owl-tabs
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        $(".owl-bartenders").trigger('refresh.owl.carousel');
    });

    // $('#age').modal({
    //     backdrop: 'static',
    //     keyboard: false,
    //     show: true
    // });

});

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




    // CLOSE MENU //

    if (!$(e.target).is('.navbar-collapse')) {
        $('.collapse').collapse('hide');
    };
    $('#menu li').click(function () {
        var $this = $(this);
        $('#menu li').removeClass('active');
        $this.addClass('active');
    });

});