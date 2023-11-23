import * as $ from "jquery";

$(window).on("scroll", function () {
    var header = $("#header");
    // console.log(window.scrollY);
    var scroll = $(window).scrollTop();
    if (scroll > 250) {
        header
            .removeClass("h-[100px] shadow-sm")
            .addClass(
                "h-[70px] shadow-lg transition-all ease-in-out duration-500"
            );
    } else {
        header
            .removeClass(
                "h-[70px] shadow-lg transition-all ease-in-out duration-500"
            )
            .addClass(
                "h-[100px] shadow-sm transition-all ease-in-out duration-500"
            );
    }
});
