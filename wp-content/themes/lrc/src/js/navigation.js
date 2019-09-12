class Navigation {
  constructor() {
    this.selector = document.querySelector('header.main .nav-toggle');
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

export default new Navigation();