class Navigation {
  constructor() {
    this.selector = document.querySelector('header.main .nav-toggle');
  }

  init() {
    this.menuToggle();
  }

  menuToggle() {
    console.log('init menu');

    this.selector.addEventListener('click', function() {
      console.log('clicked');
      this.classList.toggle('menu-open');
    });
  }
}

export default new Navigation();