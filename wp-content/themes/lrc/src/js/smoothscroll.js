const smoothScroll = element => {
  window.scrollTo({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
};

const links = document.querySelectorAll('.smooth-scroll');
links.forEach(element => {
  element.addEventListener('click', function(e) {
    e.preventDefault();

    const source = element.getAttribute('src').replace('#', '');
  });
});