<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <title>About</title>
</head>

<body class="dark-mode">

    <!-- Navigation Bar -->
    <?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>



<!-- Hero Section -->
<div class="hero-section position-relative">
    <!-- Hero Section -->
    <div class="hero-section position-relative">
        <video class="img-fluid w-100" controls autoplay loop muted>
            <source src="sound and video/video.mp4" type="video/mp4">
           
        </video>
        <div class="overlay-text position-absolute w-100 p-3 text-white text-center d-none d-md-block">
            Welcome to Gupit Hub, your go-to destination for top-notch grooming and style in the heart of Manila. <br> At Gupit Hub, we believe that a great haircut isn't just a service – it's an experience that can transform your look and boost your confidence.
        </div>
    </div>

    <!-- 2 Column Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6">
                <h2 class="font-weight-bold" style="color: #f7971d;">Our Story</h2>
                <p>Founded in 2023, Gupit Hub emerged from a passion for the art of barbering and a desire to create a space where style meets skill. Our journey began with a commitment to delivering exceptional grooming services in an environment that's both comfortable and inviting.</p>

                <h2 class="font-weight-bold" style="color: #f7971d;">Our Services</h2>
                <p>Gupit Hub offers a wide range of grooming services tailored to suit your unique style and preferences. Whether you're looking for a classic <span style="color: #f7971d;">haircut, a modern fade, a precise beard trim, or a relaxing hot towel shave</span>, we've got you covered. Our commitment to quality and attention to detail sets us apart, ensuring that you leave our shop looking and feeling fantastic.</p>
            </div>

            <!-- Column 2 -->
            <div class="col-md-6">
                <!-- 3 Barber Images -->
                <div class="d-flex">
                    <div class="image-container flex-fill p-0">
                        <img src="Images/About/Images/barber1.png" alt="Barber Image 1" class="img-fluid w-100">
                        <button class="barber-button" id="barber-button-rody" data-bs-toggle="modal" data-bs-target="#barberModal">Rody Fernandez</button>


                    </div>
                    <div class="image-container flex-fill p-0">
                        <img src="Images/About/Images/barber2.png" alt="Barber Image 2" class="img-fluid w-100">
                        <button class="barber-button" id="barber-button-lando" data-bs-toggle="modal" data-bs-target="#landoModal">Lando Poe</button>

                    </div>
                    <div class="image-container flex-fill p-0">
                        <img src="Images/About/Images/barber3.png" alt="Barber Image 3" class="img-fluid w-100">
                        <button class="barber-button" id="barber-button-red" data-bs-toggle="modal" data-bs-target="#redModal">Red Garcia</button>

                    </div>
                </div>

                <!-- Another Image below 3 barber images -->
                <div class="row mt-0"> <!-- mt-0 removes top margin -->
                    <div class="col-12 d-flex justify-content-center p-0">
                        <img src="Images/About/Images/meet.png" alt="Meet Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>



<a name="testimonial"> </a>
<!-- Testimonial Carousel -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 text-center ">Realtalks and Shout</h2>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <!-- Left Button -->
            <a class="btn btn-secondary mb-3 me-5" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                     <div class="carousel-item active">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t1.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">WHAMOS CRUZ</h4>
                                                
                                                <p class="card-text">"Gupit Hub is my go-to spot for the perfect haircut! The barbers here are incredibly skilled, and I always leave feeling fabulous."</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t2.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Cong TV</h4>
                                                <p class="card-text">"I've been coming to Gupit Hub for years, and they never disappoint. The barbers pay attention to every detail. Highly recommended!</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t3.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Makagago</h4>
                                                <p class="card-text">"Gupit Hub isn't just a barbershop; it's like hanging out with friends who make you look awesome. Love the whole vibe!"</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t4.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Xander Ford</h4>
                                                <p class="card-text">"Top-notch service, and the crew knows how to keep you looking fresh. It's my grooming spot, no doubt."</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t5.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Raffy Tulfo</h4>
                                                <p class="card-text">"My beard game went from 'meh' to 'wow' thanks to Gupit Hub. These barbers are wizards with the clippers!"</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="Images/About/Images/t6.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Kap</h4>
                                                <p class="card-text">"Gupit Hub is where it's at! They've got the skills, the swag, and the best cuts in town. Always a blast."</p>
                                                <div class="star-icons">
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-3x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-2x" style="color: #f7971d;"></i>
                                                    <i class="fas fa-star fa-1x" style="color: #f7971d;"></i>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                        </div>
                </div>
            </div>
            
            <!-- Right Button -->
            <a class="btn btn-secondary mb-3 ms-5" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>







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









  <!-- Footer -->
  <footer class="custom-footer py-4 mt-4">
    <div class="container">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
                <a href="about.html">
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




<!-- Rody Fernandez Modal -->
<div class="modal fade" id="barberModal" tabindex="-1" aria-labelledby="barberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f7971d;">
          <h4 class="modal-title" id="barberModalLabel" style="font-weight: bold;">Rody Fernandez</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
            <strong>Position:</strong> Senior Barber
            <p class="years"><strong>Years of Experience:</strong> 12 Years</p>
            <strong>Expertise:</strong>

            <!-- Expertise Progress Bars -->
            <div class="mb-2">Cutting Techniques:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-2 mt-2">Shaving and Beard Trimming:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-2 mt-2">Coloring Techniques:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-2 mt-2">Braid Styling:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-2 mt-2">Trend Awareness:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="mb-2 mt-2">Time Efficiency:</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </div>
        <div class="modal-footer" style="font-size: large; font-style: italic;">
          "Snip, snip, boom! Fresh look unlocked."
          <a href="booking.html"><button type="button" class="btn btn-danger" style="margin-left: auto;">Book Me Now!</button></a>
    
        </div>
      </div>
    </div>
  </div>




  <!-- Lando Poe Modal -->
  <div class="modal fade" id="landoModal" tabindex="-1" aria-labelledby="landoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f7971d;">
            <h4 class="modal-title" id="barberModalLabel" style="font-weight: bold;">Lando Poe</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    <div class="modal-body">
        <strong>Position:</strong> Master Stylist
        <p><strong>Years of Experience:</strong> 7 Years</p>
        <strong>Expertise:</strong>

        <!-- Expertise Progress Bars -->
        <div class="mb-2">Cutting Techniques:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Shaving and Beard Trimming:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Coloring Techniques:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Braid Styling:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Trend Awareness:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Time Efficiency:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
    <div class="modal-footer" style="font-size: large; font-style: italic;">
        "Keep calm and get a fresh cut."
        <a href="booking.html"><button type="button" class="btn btn-danger" style="margin-left: auto;">Book Me Now!</button></a>
    </div>
  </div>
</div>
</div>









<!-- Red Garcia Modal -->

<div class="modal fade" id="redModal" tabindex="-1" aria-labelledby="redModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #f7971d;">
            <h4 class="modal-title" id="barberModalLabel" style="font-weight: bold;">Red Garcia</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    <div class="modal-body">
        <strong>Position:</strong> Barber
        <p><strong>Years of Experience:</strong> 2 Years</p>
        <strong>Expertise:</strong>

        <!-- Expertise Progress Bars -->
        <div class="mb-2">Cutting Techniques:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Shaving and Beard Trimming:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Coloring Techniques:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Braid Styling:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Trend Awareness:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="mb-2 mt-2">Time Efficiency:</div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
    <div class="modal-footer" style="font-size: large; font-style: italic;">
        "Keep calm and get a fresh cut."
        <a href="booking.html"><button type="button" class="btn btn-danger" style="margin-left: auto;">Book Me Now!</button></a>
    </div>
  </div>
</div>
</div>




  
  



    
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/about.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha384-eMNCOe7tC1do4A+gf8k5l7l4lMz4i3WDQn1Z7y/JonasIUNsobEUkI/6+6AYA6F5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD5tr5cUpnRdb/fIK6Kb4s6F" crossorigin="anonymous"></script>

</body>

</html>
