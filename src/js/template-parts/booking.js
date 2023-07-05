import $ from 'jquery';
import flatpickr from "flatpickr";

function chooseBookingDate() {
    const checkIn = $('#check-in');
    const checkOut = $('#check-out');

    flatpickr("#datepicker", {
        mode: "range",
        dateFormat: "Y-m-d",
        inline: true,
        onChange: function (selectedDates, dateStr, instance) {
            if (selectedDates.length === 1) {
                checkIn.val(instance.formatDate(selectedDates[0], "d-m-Y"));
                checkOut.val('');

                setFlatpickrDayClass();
                setFlatpickrDayHeight();
            } else if (selectedDates.length === 2) {
                checkIn.val(instance.formatDate(selectedDates[0], "d-m-Y"));
                checkOut.val(instance.formatDate(selectedDates[1], "d-m-Y"));

                setFlatpickrDayClass();
                setFlatpickrDayHeight();
            }
        }
    });

    setFlatpickrDayHeight();
}

function showBookingForm () {
    const bookingBtn = $('.booking-btn');
    const bookingForm = $('.booking-form');
    const flatpickrSelect = $('.flatpickr-monthDropdown-months');

    $(document).on('click', function (e) {
        if(!bookingBtn.is(e.target) && !bookingForm.is(e.target) && !flatpickrSelect.is(e.target)) {
            bookingBtn.removeClass('active');
            bookingForm.removeClass('form-visible');
        }
    });

    bookingBtn.on('click', function (e) {
        e.preventDefault();
        bookingBtn.toggleClass('active');
        bookingForm.toggleClass('form-visible');
    });
}

function setFlatpickrDayHeight() {
    const flatpickrDay = $('.flatpickr-day');
    flatpickrDay.height(flatpickrDay.width() + 'px');
}

function setFlatpickrDayClass() {
    const flatpickrDay = $('.flatpickr-day');
    const inRange = $('.inRange');

    flatpickrDay.first().removeClass('firstR');
    flatpickrDay.last().removeClass('lastR');

    if  (inRange.length) {
        inRange.first().addClass('firstR');
        inRange.last().addClass('lastR');
    }

}

$(window).on('resize', setFlatpickrDayHeight);
$(document).on('click', setFlatpickrDayHeight)

export {chooseBookingDate, showBookingForm}