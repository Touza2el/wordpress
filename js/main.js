// Start Header Section

const headerNavigation = document.querySelector('.header-navigation');
const navLinks = document.querySelectorAll('.header-navigation div ul li a');

navLinks.forEach((link) => {
  if (link.href == window.location.href) {
    link.classList.add('active');
  }
});

// End Header Section
