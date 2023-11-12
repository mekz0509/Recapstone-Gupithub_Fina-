<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/product.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



<title>GupitHub/Shop</title>
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
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.89);
        backdrop-filter: blur(8px); 
    }

</style>

  
</head>
<body class="dark-mode">


<!-- Navigation Bar -->
<?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>
    
<!-- Products -->
    
<div class="product-center">
        <div class="container mt-4" >
        <div class="row ">
          
            <div class="col-md-6 text-center">
                <div class="image-container">
                    <img class="img-sale w-90" src="Images/Products/product sale2.png" alt="PromoBanner">
                </div>
                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="dot active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="dot"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="img-fluid w-90" src="Images/Products/product1.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="img-fluid w-90" src="Images/Products/product1.5.png" alt="Second slide">
                      </div>
                    </div>

                    
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <h4 class="mt-3 text-center">Anti-Chafing Crop Preserver</h4>
                    <div class="produc-descript">
                        <ul>
                            <li>4 FL OZ / 120 ML</li>
                            <li>Features Soothing Aloe Vera</li>
                            <li>Formulated For Below-The-Waist</li>
                            <li>Advanced, Quick-Absorbing, Clear Drying Lotion</li>
                            <li>Aluminum Free, Cruelty Free, Dye Free, Paraben Free, Vegan</li>
                            <li>Product packaging may vary</li>
                        </ul>
                    </div>
                </div>
                <h5 class="mt-3"><s><span>&#8369;</span>500.00 </s>&nbsp;<span>&#8369;</span>350.00</h5>
                <p>Select the quantity of services you'd like:</p>
                <div class="row proddescript">
                    <div class="col-md-6">
                        <select id="quantityDropdown">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <p id="totalPrice">Total Price:  ₱ 0.00</p>
                    </div>
                    <div class="col-md-6">
                        <button class="bag-btn btn-danger mt-2 mb-3" data-id="1"><i class="fas fa-cart-plus"></i>Add to cart</button>
                    </div>
                </div> 
            </div>

        </div>  
</div>

<!-- End of the Products --> 

<!-- Footer -->
<footer class="custom-footer py-4 mt-4">
    <div class="container">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                <a href="main.php">
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
<script src="products.json"></script>
<script src="App.js"></script>
</body>
</html>
