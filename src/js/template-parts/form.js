import $ from 'jquery';

function showFormPhone() {
    const phone = $('.reservation-form .phone');

    phone.on('click', function () {
        if (!$(this).hasClass('phone-show')) {
            $(this).addClass('phone-show');
        }
    })
}

function copyFormImage() {
    const copyElement = $('.form-image__wrap img');

    if (copyElement) {
        copyElement.clone().appendTo('.text-form__img')
    }
}

function hiddenContent() {
    const showHiddenContentBtn = $('.text-form .show-hidden-content');
    const content = $('.text-form .text-form__wrap');

    if (content.hasClass('visible-content')) {
        content.height(content.prop('scrollHeight') + 'px');
    }

    if(!content.height() < 679 && $(window).width() < 993) {
        content.addClass('hidden-content');
        showHiddenContentBtn.addClass('btn-visible');

        showHiddenContentBtn.on('click', function () {
            content.height(content.prop('scrollHeight') + 'px');
            content.removeClass('hidden-content').addClass('visible-content');
            showHiddenContentBtn.addClass('d-none');
        })
    } else if ($(window).width() > 993) {
        showHiddenContentBtn.removeClass('btn-visible');
        content.removeClass('hidden-content');
        content.height('fit-content');
    }
}

$(window).on('resize', hiddenContent)

export {showFormPhone, copyFormImage, hiddenContent}