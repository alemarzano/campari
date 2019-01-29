// var stickyOffset = $("#sticky-bar").offset();
// var $contentDivs = $("#py");
// $(document).ready(function () {
//     $contentDivs.each(function (k) {
//         var _thisOffset = $(this).offset();
//         var _actPosition = _thisOffset.top - $(window).scrollTop();
//         if (_actPosition < stickyOffset.top && _actPosition + $(this).height() > 0) {
//             $("#sticky-bar").removeClass("rojo blanco").addClass($(this).hasClass("top") ? "rojo" : "blanco");
//             return false;
//         }
//     });
// });

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