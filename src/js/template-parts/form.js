import $ from 'jquery';

function showFormPhone() {
    const phone = $('.reservation-form .phone');

    phone.on('click', function () {
        if (!$(this).hasClass('phone-show')) {
            $(this).addClass('phone-show');
        }
    })
}

function changeDateImputType() {
    const input = $('.reservation-form .form-date-field input');

    input.on('focus', function () {
        console.log('focus')
    })

    input.on('blur', function () {
        console.log('blur')
    })
}

export {showFormPhone, changeDateImputType}