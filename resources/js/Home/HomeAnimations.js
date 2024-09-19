import { elementIsVisibleInViewport } from '../Libs/AnimateOnScroll';

const ScrollDownHeroElement = document.querySelector('#ScrollDownHeroElement');

document.addEventListener('scroll', () => {
    if (elementIsVisibleInViewport(ScrollDownHeroElement, true)) {
        ScrollDownHeroElement.classList.add('animate__animated', 'animate__bounce');
    }
});