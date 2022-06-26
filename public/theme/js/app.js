const hamburgerNav = document.querySelector('.navbar-toggler');
const rightHeader = document.querySelector('.header-right');
const navItem = document.querySelector('.nav-item');
const searchIcon = document.querySelector('.search');

/* const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('.nav-link').forEach(link => {
  if (link.href === activePage);
  link.classList.add('active');
}); */

/* const btn = document.querySelector('.myBtn'); */
const searchBox = document.querySelector('.fullScreen');
const closeBtn = document.querySelector('.closeBtn');

hamburgerNav.addEventListener('click', function () {
  rightHeader.classList.toggle('show');
});

searchIcon.addEventListener('click', function () {
  console.log('click');
  searchBox.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  searchBox.style.display = 'none';
});
