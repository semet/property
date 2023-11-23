import Swiper from "swiper";
import { Navigation, Autoplay } from "swiper/modules";

//home agent swiper

const agentSwiper = new Swiper(".agent-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: ".agent-button-next",
        prevEl: ".agent-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        // 1280: {
        //     slidesPerView: 3,
        //     spaceBetween: 10,
        // },
        1280: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    modules: [Navigation, Autoplay],
});
//
const popularPropertiesSwiper = new Swiper(".popular-properties-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: ".popular-button-next",
        prevEl: ".popular-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        // 1280: {
        //     slidesPerView: 3,
        //     spaceBetween: 10,
        // },
        1280: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    modules: [Navigation, Autoplay],
});
//
const partnerSwiper = new Swiper(".partner-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    breakpoints: {
        640: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 10,
        },
        // 1280: {
        //     slidesPerView: 3,
        //     spaceBetween: 10,
        // },
        1280: {
            slidesPerView: 6,
            spaceBetween: 10,
        },
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    modules: [Autoplay],
});
