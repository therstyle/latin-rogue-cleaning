import SmoothScroll from './smoothscroll';
import Slider from './slider';

const functions = {
  ready() {
    console.log('init');
    SmoothScroll.init();
    Slider.init();
  }
}

export default functions;
