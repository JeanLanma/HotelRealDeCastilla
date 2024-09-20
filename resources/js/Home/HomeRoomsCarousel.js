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