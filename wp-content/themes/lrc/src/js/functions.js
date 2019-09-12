import SmoothScroll from './smoothscroll';
import Slider from './slider';
import Navigation from './navigation';
import ScrollDirection from './scrolldirection';

const functions = {
  ready() {
    SmoothScroll.init();
    Slider.init();
    Navigation.init();
  },
  scroll() {
    ScrollDirection.init();
  }
}

export default functions;
