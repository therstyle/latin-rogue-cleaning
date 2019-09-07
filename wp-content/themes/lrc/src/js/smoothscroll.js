class SmoothScroll {
  constructor() {
    this.links = document.querySelectorAll('header.main .menu > li > a');
  }

  scroll(element) {
    const selector = document.getElementById(element);
    window.scrollTo({
      behavior: 'smooth',
      left: 0,
      top: selector.offsetTop
    });
  }

  init() {
    const links = this.links;
    links.forEach(element => {
      element.addEventListener('click', (e) => {
        e.preventDefault();
        const source = element.getAttribute('href').replace('#', '');
        if (document.getElementById(source)) {
          this.scroll(source);
        }
      });
    });
  }
}

export default new SmoothScroll();