import $ from "jquery";

// Parts
import { header } from './template-parts/header/header';
import { getSlider } from './template-parts/slider';
import { toggleDropdown } from './template-parts/dropdown';
import { getFormAccept } from './template-parts/formAccept';
import { postFilter } from './template-parts/post-filter';
import { chooseBookingDate, showBookingForm } from './template-parts/booking';

// Animations
import './animations/appearence';


header();
getSlider();
toggleDropdown();
getFormAccept();
postFilter();
chooseBookingDate();
showBookingForm();