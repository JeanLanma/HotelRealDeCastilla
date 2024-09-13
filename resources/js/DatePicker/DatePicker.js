import AirDatepicker from 'air-datepicker';
import 'air-datepicker/air-datepicker.css';

import { SetTwoDigits } from '@/Helpers/Helpers.js';
import localeEs from './LocaleEs.js';
import Config from './ConfigDatePicker.js';

const BookingData = {
    CheckIn: '',
    CheckOut: '',
    Guests: 0
}

// Close DP Button
const closeButton = {
    content: 'Confirmar',
    className: '',
    onClick: function (dp) {
        dp.hide();
    }
}

// Guests
const PopupGuests = document.getElementById('PopupGuests');
const GuestsDisplay = document.getElementById('GuestsDisplay');
const Guests = document.getElementById('Guests');
const IncreaseGuests = document.getElementById('IncreaseGuests');
const DecreaseGuests = document.getElementById('DecreaseGuests');
const AcceptGuests = document.getElementById('AcceptGuests');
const ClosePopupGuests = document.getElementById('ClosePopupGuests');
const GuestsTrigger = document.getElementById('GuestsTrigger');

const isGuestsPopupVisible = () => {
    return !PopupGuests.classList.contains('hidden');
}

GuestsTrigger.addEventListener('click', () => {
    PopupGuests.classList.remove('hidden');
});

IncreaseGuests.addEventListener('click', () => {
    Guests.textContent = parseInt(Guests.textContent) + 1;
});

DecreaseGuests.addEventListener('click', () => {
    if (parseInt(Guests.textContent) > 1) {
        Guests.textContent = parseInt(Guests.textContent) - 1;
    }
});

AcceptGuests.addEventListener('click', () => {
    GuestsDisplay.textContent = SetTwoDigits(Guests.textContent);
    PopupGuests.classList.add('hidden');
});

ClosePopupGuests.addEventListener('click', () => {
    PopupGuests.classList.add('hidden');
});

if (isGuestsPopupVisible()) {
    // Detect when the user clicks outside the popup
    document.addEventListener('click', function (event) {
        if (event.target.id !== 'GuestsTrigger' && event.target.id !== 'PopupGuests' && event.target.id !== 'GuestsDisplay') {
            PopupGuests.classList.add('hidden');
        }
    });
} else {
    document.removeEventListener('click', function (event) {
        if (event.target.id !== 'GuestsTrigger' && event.target.id !== 'PopupGuests' && event.target.id !== 'GuestsDisplay') {
            PopupGuests.classList.add('hidden');
        }
    });
}

// Check In
const CheckInButton = document.getElementById('DateCheckInTrigger');
const DateCheckInDisplay = document.getElementById('DateCheckInDisplay');

const CheckInDate = new AirDatepicker('#DateCheckInInput', {
    locale: localeEs,
    isMobile: true,
    autoClose: true,
    buttons: [closeButton],
    minDate: Config.MinDate(),
    maxDate: Config.MaxDate(),
    navTitles: {
        days: function(dp){
            if(dp.selectedDates.length){
                return `<small>
                   Su llegada sera el ${Config.SetFormatDateTitle(dp.selectedDates[0])}
                </small>`;
            }
            return 'Seleccione la fecha de llegada';
        }
    },
    onSelect: function ({date, formattedDate, inst}) {
        DateCheckInDisplay.innerText = Config.SetFormatDateTitle(date);
        BookingData.CheckIn = formattedDate;
        CheckOutDate.update({
            minDate: Config.getNextDay(date),
            selectedDates: [Config.getNextDay(date)]
        });
    }
});

CheckInButton.addEventListener('click', function () {
    CheckInDate.show();
});

// Check Out
const CheckOutButton = document.getElementById('DateCheckOutTrigger');
const DateCheckOutDisplay = document.getElementById('DateCheckOutDisplay');

const CheckOutDate = new AirDatepicker('#DateCheckOutInput', {
    locale: localeEs,
    isMobile: true,
    autoClose: true,
    buttons: [closeButton],
    minDate: Config.getNextDay(),
    maxDate: Config.MaxDate(),
    navTitles: {
        days: function(dp){
            if(dp.selectedDates.length){
                return `<small>
                   Su salida sera el ${Config.SetFormatDateTitle(dp.selectedDates[0])}
                </small>`;
            }
            return 'Seleccione la fecha de salida';
        }
    },
    onSelect: function ({date, formattedDate, inst}) {
        DateCheckOutDisplay.innerText = Config.SetFormatDateTitle(date);
        BookingData.CheckOut = formattedDate;
    }
});

CheckOutButton.addEventListener('click', function () {
    CheckOutDate.show();
});

// Set Default Dates
CheckInDate.selectDate(Config.SetDefault.CheckIn);
CheckOutDate.selectDate(Config.SetDefault.CheckOut);
GuestsDisplay.innerText = Config.SetDefault.guests;

// Testing
console.log(Config.MaxDate());