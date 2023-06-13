import $ from "jquery";

import { header } from './template-parts/header/header';
import { getSlider } from './template-parts/slider';
import { setDropdownClass } from './template-parts/dropdown';
import { getFormAccept } from './template-parts/formAccept';
import './animations/appearence';



getSlider();
setDropdownClass();
getFormAccept();
header();