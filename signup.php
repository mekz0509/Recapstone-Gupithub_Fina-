<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style-signup.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<title>GupitHub/CreateAccount</title>
<style>
        /* Create Account Background */
         body {

            background-image: url("Images/Index/formbg.jpg");

            background-attachment: fixed;

            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;

            margin: 0;
            padding: 0;
            height: 100vh;
        }
    
</style>


  
</head>
<body class="dark-mode">


<!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Images/logo3.png" alt="Logo" id="navbar-logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <button class="theme-toggle btn-sm">Light Mode</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
<!-- Create Account Form -->
<div class="signup-container">
    <div class="contForms">
    <form action="actions/register.php" method="POST" id="caForms">
        <div class="createh2">
            <a href=""><img src="images/signup.png" width="220px"></a>
        </div>
        <div class="row">
            <label for="name">Full Name</label>
            <div class="col-lg-5 col-sm-11" id="formbox" >
                <img src="https://www.nicepng.com/png/full/128-1280406_user-icon-png.png" alt="User Icon" class="icon">
                <input type="text" placeholder="First Name" id="firstname" name="firstname">
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-sm-11" id="formbox">
                <img src="https://www.nicepng.com/png/full/128-1280406_user-icon-png.png" alt="User Icon" class="icon">
                <input type="text" placeholder="Last Name" id="lastname" name="lastname">
            </div>

            <!-- Address & Contacts -->
            <label for="addresscontact">Address & Contacts</label>
            <div class="col-lg-5 col-sm-11" id="formbox">
                <img src="Images/address-icon.png" alt="User Icon" class="icon">
                <input type="text" placeholder="Address" id="address" name="address">
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-sm-11" id="formbox">
                <img src="Images/contacts copy.png" alt="User Icon" class="icon">
                <input type="text" placeholder="Contact Number" id="contactnum" name="contacts">
            </div>
            <div class="col-lg-5 col-sm-11" id="formbox">
                <img src="Images/email-icon.png" alt="User Icon" class="icon">
                <input type="text" placeholder="Email Address" id="emailadd" name="emailaddress">
            </div>
        </div>

        <!-- Password -->
        <div class="row">
            <div class="col-lg-5 col-sm-11">
                <label for="password">Password</label>
                <div class="grid-item1">
                    <img src="Images/password-icon.png" alt="Lock Icon" class="icon">
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>
                <div class="grid-item1">
                    <img src="Images/password2-icon copy.png" alt="Lock Icon" class="icon">
                    <input type="password" placeholder="Confirm Password" id="confirmpass" name="confirmpassword">
                </div>  
            </div>
            
        </div>

        <!-- Radio button for Newsletter -->
        <div class="centerradio">
            <div class="squareradiobtn ">
                <input type="radio" name="radio-group" id="acceptradio" value="newsLetterAccepter"/>
                <label for="acceptradio">&nbsp;&nbsp; &nbsp; &nbsp; Accept to signup for our Newsletter</label> 
            </div>
        </div>

        <div class="col-12">
            <button class="signupbtn" type="submit" id="signupbtn">SIGNUP</button> 
        </div>
        <p style="text-transform: none; color: rgb(27, 27, 27);">Already have an Account? <a href="login.php">Login here</a></p>
    </form>
</div>
</div>   
<!-- Footer -->
    <footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">
    
                <!-- Column 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                    <img src="Images/logo.png" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                    <div>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
    
                <!-- Column 2 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                    <strong style="color: #f7971d;">Opening Hours:</strong><br>
                    Monday-Friday: 9am-8pm<br>
                    Saturday: 9am-5pm<br>
                    <strong style="color: #f7971d;">Address:</strong><br>
                    143 Downtown Village Quezon City
                </div>
    
                <!-- Column 3 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                    <strong style="color: #f7971d;">Questions:</strong><br>
                    <a href="#" class="text-white">Shipping and Returns</a><br>
                    <a href="#" class="text-white">Refund Policy</a><br>
                    <a href="#" class="text-white">Privacy Policy</a><br>
                    <a href="#" style="color: #f7971d;"><strong>FAQ</strong></a><br>
                </div>
    
                <!-- Column 4 -->
                <div class="col-lg-3 col-md-6 text-white">
                    <strong style="color: #f7971d;">Subscribe:</strong><br>
                    Enter your email to receive special offers and Vouchers.<br>
                    <form class="mt-2">
                        <input type="email" placeholder="Enter your email" class="form-control mb-2">
                        <button type="submit" class="btn btn-danger">Subscribe</button>
                    </form>
                </div>
             
            </div>
              
        </div>
    </footer>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="overlayeffect"></div>

<script src="scripts/script-signup.js"></script>
</body>

</html>
