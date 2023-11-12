

//TOggle Function
const themeToggleButton = document.querySelector('.theme-toggle');
    const navbar = document.querySelector('.navbar');
    
    themeToggleButton.addEventListener('click', () => {
      const body = document.body;
      
      body.classList.toggle('dark-mode');
      body.classList.toggle('light-mode');
      
      navbar.classList.toggle('navbar-dark');
      navbar.classList.toggle('navbar-light');
      
      // Update button text based on the current theme
      if (body.classList.contains('dark-mode')) {
        themeToggleButton.textContent = 'Light Mode';
      } else {
        themeToggleButton.textContent = 'Dark Mode';
      }
    });


     //Sticky script
        document.getElementById("messenger-popover-trigger").addEventListener("click", function() {
          var content = document.getElementById("messenger-popover-content");
          content.style.display = "block";
      });
      
      document.getElementById("close-popover").addEventListener("click", function() {
          var content = document.getElementById("messenger-popover-content");
          content.style.display = "none";
      });

