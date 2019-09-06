class SmoothScroll {
  constructor() {
    this.links = document.querySelectorAll('header.main .menu > li > a');
  }

  init() {
    const links = this.links;
    links.forEach(element => {
      element.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('you clicked smooth scroll link');

        const source = element.getAttribute('src').replace('#', '');
        if (document.getElementById(source)) {
          smoothScroll(element);
        }
      });
    });
  }

  scroll(element) {
    const selector = document.getElementById(element);
    window.scrollTo({
      behavior: 'smooth',
      left: 0,
      top: selector.offsetTop
    });
  }
}

// const smoothScroll = element => {
//   const selector = document.getElementById(element);
//   window.scrollTo({
//     behavior: 'smooth',
//     left: 0,
//     top: selector.offsetTop
//   });
// };

// const links = document.querySelectorAll('.smooth-scroll');
// links.forEach(element => {
//   element.addEventListener('click', function(e) {
//     console.log('clicked');
//     e.preventDefault();
    
//     const source = element.getAttribute('src').replace('#', '');
//     if (document.getElementById(source)) {
//       smoothScroll(element);
//     }
//   });
// });

export default new SmoothScroll();