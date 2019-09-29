class ScrollDirection {
  constructor(selector) {
    this.selector = document.querySelector(selector);
    this.lastPosition = 0;
  }

  init() {
    this.detect();
  }

  detect() {
    if (this.lastPosition < window.scrollY) {
      this.selector.classList.add('scrolled-down');
    }
    else {
      this.selector.classList.remove('scrolled-down');
    }
    this.lastPosition = window.scrollY;
    //console.log(`last = ${this.lastPosition}`);
  }
}

export default new ScrollDirection('body');
