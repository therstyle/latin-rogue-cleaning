import Flickity from 'flickity';

class Slider {
  constructor(selector) {
    this.selector = document.querySelector(selector);
    this.options = {
      autoPlay: 5000,
      prevNextButtons: false,
    }
  }

  init() {
    new Flickity(this.selector, this.options);
  }
}

export default new Slider('.quotes');
