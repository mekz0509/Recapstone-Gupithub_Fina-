<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/contact.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">



<title>GupitHub</title>


</head>
<body class="dark-mode">

<!-- Navigation Bar -->
<?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>




    

<div class="container mt-5">
    <div class="row">
        
        <!-- Column 1: Inquiry Form -->
        <div class="col-md-6">
            <h3>FOR INQUIRIES AND SUGGESTIONS <br> PLS GET IN TOUCH WITH US</h3>
            <div class="card p-4">
                <form id="contactForm">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" >
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" id="message" rows="4" placeholder="Message" ></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="sendBtn btn btn-primary">SEND</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- Column 2: Details, Google Map -->
<div class="col-md-6 mb-5">
    <div class="row"> <!-- Inner row for two columns -->

        <!-- Column for Contact Details -->
        <div class="col-md-6">
            <h5 style="color: #f7971d;">Contact Details:</h5>
            <!-- Address -->
            <p><i class="bi bi-geo-alt"></i> 143 Downtown Village Quezon City</p>
            <!-- Phone -->
            <p><i class="bi bi-telephone"></i> 0933-6581234 | 0910-1234567</p>
            <!-- Email -->
            <p><i class="bi bi-envelope"></i> gupithub@gmail.com</p>
        </div>

        <!-- Column for Opening Hours -->
        <div class="col-md-6">
            <h5 style="color: #f7971d;">Opening Hours:</h5>
            <p>Monday-Friday: 9am-8pm</p>
            <p>Saturday: 9am-5pm</p>
        </div>

    </div> <!-- End of the inner row -->

    <!-- Embed Google Map -->
    <iframe src="https://www.google.com/maps/d/embed?mid=1g3mMZN2oV1mukWbeshdBn2-rcDA&hl=en_US&ll=14.646558730415537%2C121.05017423629761&z=18" width="100%" height="295" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="d-flex justify-content-center align-items-center h-100">
    <h3>HOW CAN WE HELP YOU?</h3>
</div>


<!-- ACCORDIONS -->
<div class="accordion" id="faqAccordion">
    <!-- FAQ 1 -->
    <div class="accordion-item mt-2">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #ffffff ; text-align: center;">
                What services do you offer at your barbershop?
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                We offer a range of services including haircuts, shaves, beard trims, and scalp treatments. Check out our menu for a full list and prices.
            </div>
        </div>
    </div>

    <!-- FAQ 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #ffffff;">
                Do I need to book an appointment, or do you accept walk-ins?
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                While walk-ins are always welcome, we recommend booking an appointment to ensure a specific time slot and barber of your choice.
            </div>
        </div>
    </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #ffffff;">
                Can I change or cancel my appointment?
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Yes, please notify us at least 24 hours in advance if you need to change or cancel your booking.
            </div>
        </div>
    </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #ffffff;">
                    What products do you sell?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We offer a range of grooming products, including shampoos, conditioners, beard oils, pomades, and hair gels and merchandise unique to our shop.
                </div>
            </div>
        </div>

    <!-- FAQ 5 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: #ffffff;">
                Can I return or exchange a product?
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Products can be returned or exchanged within 14 days of purchase with a valid receipt, provided they are unopened and unused.
            </div>
        </div>
    </div>

    <!-- FAQ 6 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #ffffff;">
                Do you offer services for children?
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Yes, we do offer children's haircuts. Please note that for children under 12, parental supervision is required.
            </div>
        </div>
    </div>

     <!-- FAQ 7 -->
     <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color: #ffffff;">
                Can I bring my own products for the barber to use?
            </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Certainly! If you have a preferred product, feel free to bring it along, and our barbers will be happy to use it.
            </div>
        </div>
    </div>

    <!-- FAQ 8 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: #ffffff;">
                Do you offer gift cards or membership packages?
            </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Yes, we offer both! Gift cards can be purchased in-store or online. We also have membership packages that provide discounts and exclusive offers.
            </div>
        </div>
    </div>


    <!-- FAQ 9 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="color: #ffffff;">
                I'm interested in a specific product, but it's out of stock. Can I pre-order?
            </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Of course! Please let our staff know, and we'll notify you as soon as it's back in stock or even place a special order for you.
            </div>
        </div>
    </div>

      <!-- FAQ 10 -->
      <div class="accordion-item mb-5">
        <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="color: #ffffff;">
                What payment methods do you accept?
            </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                "We accept various payment methods including bank transfers to BDO (Banco de Oro), BPI (Bank of the Philippine Islands), and China Bank. Additionally, for electronic cash transactions, we accept GCASH and PayMaya. Please ensure you provide the correct details when making payments to ensure smooth transactions."
            </div>
        </div>
    </div>
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



<!-- Footer -->
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

    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="scripts/contact.js"></script>
</body>

</html>
