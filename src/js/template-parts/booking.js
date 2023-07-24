import $ from 'jquery';
import flatpickr from "flatpickr";

// function for transferring data from the calendar to inputs
function chooseBookingDate() {
    const checkIn = $('#check-in');
    const checkOut = $('#check-out');
    let currentDate = new Date();

    const calendar = flatpickr("#datepicker", {
        defaultDate: "today",
        minDate: "today",
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

    $(document).ready(function() {
        const niceSelectMonth = $('.nice-select.flatpickr-monthDropdown-months');
        const niceSelectOption = niceSelectMonth.find('.option');

        niceSelectOption.on('click', function() {
            const selectedMonth = $(this).data('value');
            calendar.changeMonth(selectedMonth);

            const currentMonth = new Date().getMonth();
            const currentYear = new Date().getFullYear();

            if (selectedMonth === currentMonth) {
                const today = new Date().getDate();
                calendar.setDate(new Date(currentYear, currentMonth, today));
            } else {
                calendar.setDate(new Date(currentYear, selectedMonth, 1));
            }
        });

        calendar.setDate(currentDate);
    });

    setFlatpickrDayHeight();
}

function showBookingForm () {
    const bookingForm = $('.booking-form');
    const bookingBtn = $('.booking-btn');
    const bookingSelect = bookingForm.find('select, .nice-select, .current');

    bookingBtn.on('click', function (e) {
        e.preventDefault();
        bookingBtn.toggleClass('active');
        bookingForm.toggleClass('form-visible');
        $('body').addClass('no-scroll');
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest(".booking-form").length && !$(event.target).hasClass('booking-btn') && !$(event.target).closest(".booking-btn").length) {
            bookingBtn.removeClass('active');
            bookingForm.removeClass('form-visible');
            $('body').removeClass('no-scroll');
        }
    });
}

function closeBookingForm () {
    const bookingForm = $('.booking-form');
    const bookingBtn = $('.booking-btn');
    const bookingCloseBtn = bookingForm.find('.close-form');

    bookingCloseBtn.on('click', function () {
        bookingBtn.removeClass('active');
        bookingForm.removeClass('form-visible');
    })

    $(document).on('keydown', function (e) {
        if (e.keyCode == 27) {
            bookingBtn.removeClass('active');
            bookingForm.removeClass('form-visible');
        }
    })
}

// custom form with redirect
function bookingFormSubmit () {
    const form = $('#booking-form');

    form.submit(function(event) {
        event.preventDefault();

        var url = 'https://be.synxis.com/?';

        var arrive = $(this).find('[name="arrive"]').val();
        var depart = $(this).find('[name="depart"]').val();
        var adultChild = $(this).find('.form-select-field .list .selected').data('value');

        var values = adultChild.split('-');
        var adult = values[0];
        var child = values[1];

        url += 'adult=' + adult + '&arrive=' + arrive + '&chain=10205&child=' + child + '&config=gemma&currency=EUR&depart=' + depart + '&hotel=40864&level=hotel&locale=it-IT&rooms=1&theme=gemma'

        window.location.href = url;
    });
}

// set the height as the width
function setFlatpickrDayHeight() {
    const flatpickrDay = $('.flatpickr-day');
    flatpickrDay.height(flatpickrDay.width() + 'px');
}

// set classes for flatpikr days
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
$(document).on('click', setFlatpickrDayHeight);


$(document).ready(function(){
    let bookingBtn = $('#sr-res-root');
    
    if (bookingBtn.length > 0) {

        SevenroomsWidget.init({
            venueId: "lucasrestaurant",
            triggerId: "sr-res-root", // id of the dom element that will trigger this widget
            type: "reservations", // either 'reservations' or 'waitlist' or 'events'
            styleButton: false, // true if you are using the SevenRooms button
            clientToken: "" //(Optional) Pass the api generated clientTokenId here
        });
    }
});

// Move this to new file with WMPL
$(document).ready(function(){
    let wpmlSwitcher = $(".wpml-ls");
    
    wpmlSwitcher.on("click", function(){
        $(this).toggleClass('active');
    })
});

$(document).click(function(event) { 
    var $target = $(event.target);
    if(!$target.closest('.wpml-ls').length && 
    $('.wpml-ls').hasClass("active")) {
        $('.wpml-ls').removeClass('active');
    }        
});
  


export {chooseBookingDate, showBookingForm, closeBookingForm, bookingFormSubmit}