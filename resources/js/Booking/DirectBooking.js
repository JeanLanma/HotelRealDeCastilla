const isEmptyObject = (obj) => {
    return obj && Object.keys(obj).length === 0 && obj.constructor === Object;
};

const DirectBooking = (route, params = {}) => {
    let link = '';
    if(isEmptyObject(params)) {
        link = route;
    } else {
        link = route + '?' + new URLSearchParams(params).toString();
    }

    console.log(link);
    window.location.href = link;
};

const BookingWidgetBtn = document.querySelector('#BookingWidgetBtn');
const AboutButton = document.querySelector('#AboutButton');

BookingWidgetBtn.addEventListener('click', () => {
    DirectBooking(ROOT_URL + '/direct-booking');
});
AboutButton.addEventListener('click', () => {
    DirectBooking(ROOT_URL + '/direct-booking');
});