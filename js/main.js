const menuBtn = document.querySelector('.nav__burger');
const navLinks = document.querySelector('.nav__links');
var menuOpen = false;
menuBtn.addEventListener('click', function () {
  if (!menuOpen) {
    navLinks.classList.add('show-menu');
    menuOpen = true;
  } else {
    navLinks.classList.remove('show-menu');
    menuOpen = false;
  }
});
