import Swiper from "swiper";
import { Navigation } from "swiper/modules";

//home agent swiper

const agentSwiper = new Swiper(".agent-swiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },

    modules: [Navigation],
});
