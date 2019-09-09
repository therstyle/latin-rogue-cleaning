import SmoothScroll from './smoothscroll';
import Slider from './slider';
import Navigation from './navigation';

const functions = {
  ready() {
    console.log('init');
    SmoothScroll.init();
    Slider.init();
    Navigation.init();
  }
}

export default functions;
