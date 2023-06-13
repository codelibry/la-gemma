import $  from 'jquery';

function setDropdownClass() {
    console.log($('.js-dropdown').width())
    $('.js-dropdown').click(function () {
        $('.js-dropdown').toggleClass('open-dropdown');
    })
}

export {setDropdownClass}