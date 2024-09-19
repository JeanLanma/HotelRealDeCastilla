import verge from 'verge';

const ScrollDownHeroElement = document.querySelector('#ScrollDownHeroElement');
const NuovoTextElement = document.querySelector('#NuovoTextElement');

document.addEventListener('scroll', () => {

    if(verge.inY(ScrollDownHeroElement) && !ScrollDownHeroElement.classList.contains('animate__animated')) {
        ScrollDownHeroElement.classList.add('animate__animated', 'animate__bounce');
    } else if(!verge.inY(ScrollDownHeroElement) && ScrollDownHeroElement.classList.contains('animate__animated')) {
        ScrollDownHeroElement.classList.remove('animate__animated', 'animate__bounce');
    }

});