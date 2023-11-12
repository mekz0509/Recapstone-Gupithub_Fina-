const themeToggleButton = document.querySelector('.theme-toggle');
const navbar = document.querySelector('.navbar');

themeToggleButton.addEventListener('click', () => {
  const body = document.body;

  body.classList.toggle('dark-mode');
  body.classList.toggle('light-mode');
  
  navbar.classList.toggle('navbar-dark');
  navbar.classList.toggle('navbar-light');
  
  const moonIcon = themeToggleButton.querySelector('.fas.fa-moon');
  const sunIcon = themeToggleButton.querySelector('.fas.fa-sun');
  
  if (body.classList.contains('dark-mode')) {
    moonIcon.style.display = 'none';
    sunIcon.style.display = 'inline';
  } else {
    moonIcon.style.display = 'inline';
    sunIcon.style.display = 'none';
  }
});
