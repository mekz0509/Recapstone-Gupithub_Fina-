document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('caForms');
  

    form.addEventListener('submit', function (event) {
    
      
  

      const emailInput = document.getElementById('email');
      const passwordInput = document.getElementById('password');
  

      const emailValue = emailInput.value.trim(); 
      const passwordValue = passwordInput.value.trim(); 
  
 
      if (emailValue === '' || passwordValue === '') {
        event.preventDefault();
        alert('Please fill in both email and password fields.');
      } else {
      

      }
    });
  });