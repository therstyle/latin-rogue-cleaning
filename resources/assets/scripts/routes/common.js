import SmoothScroll from '../smoothscroll';
import Slider from '../slider';
import Navigation from '../navigation';
import ScrollDirection from '../scrolldirection';

export default {
  init() {
    // JavaScript to be fired on all pages
    SmoothScroll.init();
    Slider.init();
    Navigation.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
  scroll() {
    ScrollDirection.init();
  },
};
