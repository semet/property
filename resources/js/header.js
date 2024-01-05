import * as $ from "jquery";

$(window).on("scroll", function () {
    var header = $("#header");
    // console.log(window.scrollY);
    var scroll = $(window).scrollTop();
    if (scroll > 250) {
        header
            .removeClass("h-[100px] shadow-sm")
            .addClass("h-[70px] shadow-lg");
    } else {
        header
            .removeClass("h-[70px] shadow-lg")
            .addClass("h-[100px] shadow-sm");
    }
});
