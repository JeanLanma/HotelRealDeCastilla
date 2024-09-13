import { SetTwoDigits } from '@/Helpers/Helpers.js';

// Dates
const GetStartDate = () => {
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    
    return new Date(year, month, day);
}

const getNextDay = (date = null) => {
    if (!date) {
        date = new Date();
    }
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    return new Date(year, month, day + 1);
}

const GetMaxDate = (AddDays = 365) => {
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();
    
    return new Date(year, month, (day + AddDays));
}

// Sets Date Format to "05 ene 2024" in spanish
const SetFormatDateTitle = (date) => {
    let month = date.getMonth();
    let day = date.getDate();

    // Set day with 2 digits
    day = SetTwoDigits(day);

    let year = date.getFullYear();
    let months = [
        'ene', 'feb', 'mar', 'abr', 'may', 'jun',
        'jul', 'ago', 'sep', 'oct', 'nov', 'dic'
    ];
    return `${day} ${months[month]} ${year}`;

}

export default {
    MinDate: GetStartDate,
    MaxDate: GetMaxDate,
    getNextDay: getNextDay,
    SetFormatDateTitle: SetFormatDateTitle,
    SetDefault: {
        guests: SetTwoDigits(2),
        CheckIn: GetStartDate(),
        CheckOut: getNextDay(),
    }
}