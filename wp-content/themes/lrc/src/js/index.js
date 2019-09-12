import functions from './functions';
import '../css/style.scss';

document.addEventListener('DOMContentLoaded', () => {
  functions.ready();
});

window.addEventListener('scroll', () => {
  functions.scroll();
});
