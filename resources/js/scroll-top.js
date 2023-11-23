import * as $ from "jquery";

var button = $("#scroll-top");

$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll > 500) {
        button
            .removeClass("-bottom-12")
            .addClass("bottom-12 transition-all ease-in-out duration-500");
    } else {
        button
            .removeClass("bottom-12 transition-all ease-in-out duration-500")
            .addClass("-bottom-12 transition-all ease-in-out duration-500");
    }
});

button.click((e) => {
    e.preventDefault();
    $("html, body").animate(
        {
            scrollTop: 0,
        },
        600
    );
    return false;
});
