<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/services.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Services</title>
</head>

<body class="dark-mode">
    <!-- Navigation Bar -->
    <?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>


<!-- HERO SECTION --><!-- HERO SECTION --><!-- HERO SECTION --><!-- HERO SECTION --><!-- HERO SECTION -->

    <div class="text-white bg-dark text-center pt-5 pb-0 mb-0">
        <p class="display-2 font-weight-bold">READY TO TAKE A SEAT?</p>
    </div>
    <div class="text-white text-center pt-0 pb-1 mt-0">
        <p class="display-4">"OUR SERVICES"</p>
    </div>

    <div class="container pb-0 mb-0">
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">HAIRCUT</div>
            </div>
            <div class="col-md-4">
                <div class="service-box">HEAD SHAVE</div>
            </div>
            <div class="col-md-4">
                <div class="service-box">FACE SHAVE</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">BEARD TRIM</div>
            </div>
            <div class="col-md-4">
                <div class="service-box">COLORING</div>
            </div>
            <div class="col-md-4">
                <div class="service-box">BRADING</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="booking.php"><button class="appointment-button">MAKE AN APPOINTMENT ONLINE</button></a>
            
        </div>
    </div>


    <!-- GALLERY -->    <!-- GALLERY -->    <!-- GALLERY -->    <!-- GALLERY -->    <!-- GALLERY -->


    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- First Row -->
            <div class="col-md-3 mb-4">
                <img src="Images/Services/Images/1.jpg" alt="Gallery Image 1" class="img-fluid">
            </div>
            <div class="col-md-3 mb-4">
                <img src="Images/Services/Images/2.jpg" alt="Gallery Image 2" class="img-fluid">
            </div>
            <div class="col-md-3 mb-4">
                <img src="Images/Services/Images/3.jpg" alt="Gallery Image 3" class="img-fluid">
            </div>
            <div class="col-md-3 mb-4">
                <img src="Images/Services/Images/4.jpg" alt="Gallery Image 4" class="img-fluid">
            </div>

            <!-- Second Row -->
            <div class="col-md-3">
                <img src="Images/Services/Images/5.jpg" alt="Gallery Image 5" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="Images/Services/Images/6.jpg" alt="Gallery Image 6" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="Images/Services/Images/7.jpg" alt="Gallery Image 7" class="img-fluid">
            </div>
            <div class="col-md-3">
                <img src="Images/Services/Images/8.jpg" alt="Gallery Image 8" class="img-fluid">
            </div>
        </div>
    </div>


<!-- Sticky -->  <!-- Sticky -->  <!-- Sticky -->  <!-- Sticky -->

<button id="messenger-popover-trigger" class="messenger-button">
    <img src="Images/Index/messenger.png" alt="Facebook Messenger" />
</button>

<!-- Popover Content -->
<div id="messenger-popover-content" style="display:none;">
    <button id="close-popover" class="close-button">&times;</button>
    <img src="Images/logo3.png" alt="Your Logo" />
    <p class="mt-3">Chat with us.</p>
    <h4 class="h4text"> Hi! How can we help you?</h4> 
    <a href="https://www.facebook.com/gupithub" class="start-chat-link" target="_blank" rel="noopener noreferrer">
        <button class="start-chat btn-primary mt-5 mb-3">Start Chat</button>
    </a>
    <div class="messenger-column">
        <i class="fab fa-facebook-messenger messenger-icon"></i>
        <h5 class="messenger-text">&nbsp; Powered by Messenger</h5>
    </div>
</div>







    <!-- Footer -->    <!-- Footer -->    <!-- Footer -->    <!-- Footer -->    <!-- Footer -->
    <footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">

                <!-- Column 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                    <a href="services.php">
                        <img src="Images/logo.png" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                    </a>
                    <div class="social-icons">
                        <a href="#" class="mx-2 text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="mx-2 text-white"><i class="bi bi-linkedin"></i></a>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts/services.js"></script>   
</body>
</html>