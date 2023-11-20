<?php

if($isLoggedIn==true) { ?>

<!-- Navigation Bar User-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">
            <img src="Images/logo3.png" alt="Logo" id="navbar-logo">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #f7971d;">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="actions/logoutAction.php">LOG OUT</a>
                </li>
                
                
            </ul>
        </div>
       
         <div class="cart-btn">
            <span class="nav-icon">
               &nbsp; <i class="fas fa-cart-plus"></i>
            </span>
            <div class="cart-items">0</div> 
            
        </div>
        <li class="nav-item d-flex align-items-center ms-3">
            <button class="theme-toggle btn-sm">
                <i class="fas fa-moon"></i> <!-- Moon icon for Dark Mode -->
                <i class="fas fa-sun" style="display: none;"></i> <!-- Sun icon for Light Mode -->
            </button>
        </li>
    </div>
</nav>

<?php }else{ ?>

<!-- Navigation Bar Guest -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">
            <img src="Images/logo3.png" alt="Logo" id="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="main.php" style="color: #f7971d;">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">SIGN UP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item d-flex align-items-center ms-3">
                <li class="nav-item d-flex align-items-center ms-3">
                    <button class="theme-toggle btn-sm">
                     <i class="fas fa-sun"></i> <!-- Moon icon for Dark Mode -->
                    <i class="fas fa-moon" style="display: none;"></i> <!-- Sun icon for Light Mode -->
                     </button>
                </li>
       
            </ul>
        </div>
    </div>
</nav>
<?php } ?>











