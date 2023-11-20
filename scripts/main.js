

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
        themeToggleButton.innerHTML = '<i class="fas fa-sun"></i>'; 
      } else {
        themeToggleButton.innerHTML = '<i class="fas fa-moon"></i>'; 
      }
    });




//hero Photo Transition
    document.addEventListener('DOMContentLoaded', function() {    // ensure that the HTML document has fully loaded
            const bookNowButton = document.querySelector('.btn-red');
            const hoverImage = document.querySelector('.hover-img');

            bookNowButton.addEventListener('mouseenter', function() {
                hoverImage.style.opacity = '1';
            });

            bookNowButton.addEventListener('mouseleave', function() {
                hoverImage.style.opacity = '0';
            });
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



 //Sound
// JavaScript for controlling the audio volume
function toggleSound() {
  var audio = document.getElementById("heroSound");
  var soundIcon = document.getElementById("soundIcon");

  if (audio.paused) {
      audio.play();
      soundIcon.className = "fas fa-volume-up";
  } else {
      audio.pause();
      soundIcon.className = "fas fa-volume-mute";
  }
}

function setVolume() {
  var audio = document.getElementById("heroSound");
  var volumeControl = document.getElementById("volumeControl");
  audio.volume = volumeControl.value;
}

