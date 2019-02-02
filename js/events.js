
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


$('#age').modal({
    backdrop: 'static',
    keyboard: false,
    show:true
})

