import $ from 'jquery';

function toggleDropdown() {
    $(document).on('click', '.js-dropdown-title', function (e) {
        const dropdown = $(this).closest('.js-dropdown');
        const dropdownContent = dropdown.find('.js-dropdown-content');

        if (dropdown.hasClass('open-dropdown')) {
            dropdown.removeClass('open-dropdown');
            dropdownContent.css('height', 0);
        } else {
            dropdown.addClass('open-dropdown');
            dropdownContent.css('height', dropdownContent.prop('scrollHeight') + 'px');
        }
    })
}

export {toggleDropdown}