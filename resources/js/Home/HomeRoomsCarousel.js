// import Swiper JS
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';;
Swiper.use([Navigation]);

// import Swiper styles
import 'swiper/css';

const swiper = new Swiper('.RoomsSwiper', {
    loop: true,
    navigation: {
        nextEl: '.nextRoomEl',
        prevEl: '.prevRoomEl',
    },
});

const ServicesSwiper = new Swiper('.ServicesSwiper', {
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    }
});