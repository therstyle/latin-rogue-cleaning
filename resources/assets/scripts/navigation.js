class Navigation {
  constructor(selector) {
    this.selector = document.querySelector(selector);
  }

  init() {
    this.menuToggle();
  }

  menuToggle() {
    this.selector.addEventListener('click', function() {
      document.querySelector('body').classList.toggle('menu-open');
    });
  }
}

export default new Navigation('header.main .nav-toggle');
