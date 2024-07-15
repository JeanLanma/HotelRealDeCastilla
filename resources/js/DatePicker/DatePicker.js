import AirDatepicker from 'air-datepicker';
import 'air-datepicker/air-datepicker.css';

import localeEs from './LocaleEs.js';
import Config from './ConfigDatePicker.js';

const BookingData = {
    CheckIn: '',
    CheckOut: '',
    Guests: 0
}

// Set Default Dates
BookingData.CheckIn = Config.SetDefault.CheckIn;
BookingData.CheckOut = Config.SetDefault.CheckOut;
BookingData.Guests = Config.SetDefault.guests;

// Close DP Button
const closeButton = {
    content: 'Confirmar',
    className: '',
    onClick: function (dp) {
        dp.hide();
    }
}

// Guests
const GuestsDisplay = document.getElementById('GuestsDisplay');

// Check In
const CheckInButton = document.getElementById('DateCheckInTrigger');
const DateCheckInDisplay = document.getElementById('DateCheckInDisplay');

const CheckInDate = new AirDatepicker('#DateCheckInInput', {
    locale: localeEs,
    isMobile: true,
    autoClose: true,
    buttons: [closeButton],
    minDate: Config.MinDate(),
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