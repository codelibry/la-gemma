import $ from "jquery";

// Parts
import {headerMenu, setHeaderPositionFixed} from './template-parts/header/header';
import {getSlider} from './template-parts/slider';
import {toggleDropdown} from './template-parts/dropdown';
import {getFormAccept} from './template-parts/formAccept';
import {postFilter} from './template-parts/post-filter';
import {
    chooseBookingDate,
    showBookingForm,
    closeBookingForm,
    bookingFormSubmit,
    addAndSubtractNumber,
    showGuestDropdown
} from './template-parts/booking';
import {showFormPhone, copyFormImage, hiddenContent} from './template-parts/form';
import {parrallax_images, headerAnimation} from './template-parts/animations';


// Animations
import './animations/appearence';
import {scrollToHash, scrollToAnchor} from './animations/scroll-to-anchor';

// Template parts
import './template-parts/nice-select';


scrollToHash();
scrollToAnchor();
headerMenu();
setHeaderPositionFixed();
getSlider();
toggleDropdown();
getFormAccept();
postFilter();
chooseBookingDate();
showBookingForm();
closeBookingForm();
bookingFormSubmit();
addAndSubtractNumber();
showGuestDropdown();
showFormPhone();
copyFormImage();
hiddenContent();
parrallax_images();
headerAnimation();