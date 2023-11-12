<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/shop.css">
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
    
</style>


  
</head>
<body class="dark-mode">


<!-- Navigation Bar -->
<?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>
    
<!-- Hero Section -->
    <div class="BestSellerHero">
        <div class="row">
            <div class="col-lg-6 ">
                <!-- Best Seller Carousel -->
                <div class="PromoBanner">
                    <img class="d-block w-100" src="Images/Products/Best Seller Banner2.png" alt="PromoBanner">
                </div>
                <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="dot active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="dot"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="dot"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="Images/Products/Best Seller1.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="Images/Products/Best Seller2.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="Images/Products/Best Seller3.png" alt="Third slide">
                      </div>
                    </div>
               
                  </div>

    
            </div>
            <div class="col-lg-6" id="bestseller">
                <p class="bsttitle1"><a href="#"><b>GUPIT HUB GROOMING KIT</b></a></p>
                <p class="bsttitle2"><i>''Unlock Your Grooming Potential with Gupit Hub: <br> Your Ultimate Grooming Companion''
                </i></p>
                <div class="herostar-icons">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div class="bstBtnReddiv">
                <button class="bstBtnRed"> &nbsp; <span>&#8369;</span>2,199 
                
                <img src="Images/addtocart1.png" width="0px">
                 </button>
                </div>
        </div>   
    </div>
    

    <hr class="hr" style="height: 40px; border: none; color: #40240f;">
    
<!-- Products -->
    <h2 class="display-6"><b>Our Products</b><img src="Images/products icon2.png" width="100px"  alt="product icon"> </h2>
<div class="product-center">
        <div class="container mt-4" >
        <div class="row ">
          
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product sale2.png" alt="salepromobanner" class="img-sale">
                    <img src="Images/Products/product1.png" alt="Image 1" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds">100 sold</p>
                    </div>
                    <h4 class="mt-3 text-center"><a href="product1.php">Anti-Chafing Crop Preserver </a></h4> 
                    <h5 class="mt-3 text-center"><img src="images/discount2.png" width="70px"><span>&#8369;</span>350.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="1"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
           
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product sale2.png" alt="salepromobanner" class="img-sale">
                    <img src="Images/Products/product2.png" alt="Image 2" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds">120 sold</p>
                    </div>
                    <h4 class="mt-3 text-center">Beard Shampoo</h4>
                    <h5 class="mt-3 text-center"><img src="images/discount2.png" width="70px"><span>&#8369;</span>350.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="2"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product sale2.png" alt="salepromobanner" class="img-sale">
                    <img src="Images/Products/product3.png" alt="Image 3" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds"> 120 sold</p>
                    </div>
                    <h4 class="mt-3 text-center">Beard Conditioner</h4>
                    <h5 class="mt-3 text-center"><img src="images/discount1.png" width="70px"><span>&#8369;</span>300.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="3"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product4.png" alt="Image 4" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds">90 sold</p>
                    </div>
                    <h4 class="mt-3 text-center">Beard Oil - Moisturizing Serum</h4>
                    <h5 class="mt-3 text-center">&#8369;400.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="4"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product6.png" alt="Image " class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds">70 sold</p>
                    </div>
                    <h4 class="mt-3 text-center">Beard Balm - Styling Pomade</h4>
                    <h5 class="mt-3 text-center">&#8369;450.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="5"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="image-container">
                    <img src="Images/Products/product5-the lawn mower.png" alt="beardhedgerv1" class="img-fluid">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <p class="solds">160 sold</p>
                    </div>
                    <h4 class="mt-3 text-center">The Beard Hedger v1</h4>
                    <h5 class="mt-3 text-center">&#8369;999.00</h5>
                    <button class="bag-btn btn-danger mt-2 mb-3" data-id="6"><i class="fas fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- End of the Products --> 

<!-- Cart Overlay -->
<div class="cart-overlay">
    <div class="closebutton">
        <button id="cart-close-btn">&times;</button>
    </div>
    
    <div class="yourCartLogo">
        <img src="images/yourcart4.png" alt="yourcart">
    </div>
   
    <div id="cart-list"></div>
    <div id="cart-summary">
        
        <div class="col-12 totalCart"><p>Total: &#8369;<span id="cart-total">0.00</span></p></div>
     
            <div class="col-12 paymentOption">
                <div>Payment Options</div>
                </div>
            <div class="col-12 paymentOptionRadio">
                <form action="">
                    <input type="radio" id="creditCard" name="paymentOption" value="creditCard"> 
                    <label for="creditCard"><i>Credit Card</i></label> 
                    <input type="radio" id="bankTransfer" name="paymentOption" value="creditCard"> 
                    <label for="creditCard"><i>Bank Transfer</i></label>  
                    <input type="radio" id="eCash" name="paymentOption" value="creditCard"> 
                    <label for="creditCard"><i>eCash</i></label> 
                </form>
            </div>    
        </div> 
        <div class="col-12 checkOutButton btn"><button id="checkout-button">Check out</button></div>
    </div>
</div>









<!-- Footer -->
<footer class="custom-footer py-4 mt-4">
    <div class="container">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                <a href="shop.php">
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