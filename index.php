<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">





<title>Landing/GupitHub</title>
<style>
    
</style>


  
</head>
<body class="dark-mode">
    

<!-- Navigation Bar -->
<?php 
    include 'actions/checkLogin.php';
    include 'nav.php';

?>
    
<!-- Hero Section -->
    <div class="HeroPhoto">
        <!-- sound toggle -->
        <audio id="heroSound" preload="auto" autoplay>
            <source src=" " type="audio/mpeg">
            
        </audio>
        <button id="soundToggle" class="sound-toggle-btn" onclick="toggleSound()">
            <i id="soundIcon" class="fas fa-volume-up"></i>
        </button>
        

        <img src="Images/Index/uncut.jpg" alt="Photo" class="base-img" style="width: 100%; height: 100%;">
        <img src="Images/Index/cut.jpg" alt="Photo" class="hover-img" style="width: 100%; height: 100%; opacity: 0; position: absolute; top: 0; left: 0;">
        <div class="hero-text">
            <h1 class="display-1">UNLEASH YOUR STYLE</h1>
            <h1 class="display-2">UNLEASH CONFIDENCE</h1>
            <a href="booking.html"> <button class="btn btn-red">BOOK NOW!</button></a>
           
        </div>
    </div>
    

    <hr class="hr" style="height: 40px; border: none; color: #f7971d;">

<!-- Service List -->
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/1.png" alt="Description 1" class="img-fluid"></a>
                <h1 class="gupit-text">Hair Cut</h1>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/2.png" alt="Description 2" class="img-fluid"></a>
                <h1 class="gupit-text">Head Shave</h1>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/3.png" alt="Description 3" class="img-fluid"></a>
                <h1 class="gupit-text">Face Shave</h1>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/4.png" alt="Description 4" class="img-fluid"></a>
                <h1 class="gupit-text">Beard Trim</h1>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/5.png" alt="Description 5" class="img-fluid"></a>
                <h1 class="gupit-text">Hair Color</h1>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 p-0">
            <div class="skew-container">
                <a href="services.html"><img src="Images/Index/6.png" alt="Description 6" class="img-fluid"></a>
                <h1 class="gupit-text">Hair Braid</h1>
            </div>
        </div>
    </div>
</div>

    
<!-- Testimonials -->
    <h2 class="display-6">Realtalks and Shout outs!</h2>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Index/whamos.png" alt="Image 1" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mt-3 text-center">Whamos Cruz</h4>
                    <a href="about.html" role="button" class="btn btn-danger mt-2 mb-3">Read More <i class="bi bi-arrow-right-circle-fill"></i></a>
                    </a>

                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Index/cong.png" alt="Image 2" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mt-3 text-center">Cong TV</h4>
                    <a href="about.html" role="button" class="btn btn-danger mt-2 mb-3">Read More <i class="bi bi-arrow-right-circle-fill"></i></a>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Index/makagago.png" alt="Image 3" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mt-3 text-center">Makagago</h4>
                    <a href="about.html" role="button" class="btn btn-danger mt-2 mb-3">Read More <i class="bi bi-arrow-right-circle-fill"></i></a>
                    </a>
                </div>
            </div>
        </div>
    </div>





    <footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">
    
                <!-- Column 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                    <a href="index.html">
                        <img src="Images/logo.png" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                    </a>
                    
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
                    <a href="#" class="text-white">Payment Options</a><br>
                    <a href="#" class="text-white">Order Status</a><br>
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
    
    <div class="overlay"></div>
    <!-- ------------- Start of Landing -------------- -->
<landing>
    <div class="header_text-box">
    <div class="heading-primary">
      <img src="images/logo.png" width="300px" alt="brandlogo"></div><br>
      <div class="text-animation">
        <span class="heading-primary--main">"Where Trends Meet Tradition.</span><br>
      <span class="heading-primary--sub">  Discover Barbering Brilliance at Gupithub."</span>
      </div>
    </h1>
    <br>
    <a href="login.php" class="landingLogin"><button>LOGIN</button></a>
    <a href="signup.php" class="landingSignup"><button>SIGNUP</button></a>
    <a href="main.php" class="guest"><button>CONTINUE AS GUEST</button></a>
    </div> 
       
    
</landing>

<!-- ------------- End of Landing -------------- -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="scripts/script.js"></script>
</body>

</html>
