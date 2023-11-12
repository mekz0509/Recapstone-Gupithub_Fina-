<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style-book.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<title>GupitHub/BookingPage</title>
</head>

<body class="dark-mode">

<!-- Navigation Bar -->
<?php 
    include 'actions/checkLogin.php';
   
    include 'nav.php';

?>
    
<!-- Hero Section -->
<div class="bookingmain">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center" id="wallPaperSection">
            <img src="Images/Index/bookingwallpaper2.png" width="100%" alt="" >

        </div>
       
        <!-- form Section of the Page -->
        <div class="col-md-6" id="bookingSection">
            <br>
            <form action="" id="bookingForm">
            <div class="chooseDate">
                <div class="row">
                    <div class="col-md-4">  <h5 id="bookingH5">CHOOSE DATE</h5> </div>
                    <div class="col-md-8">  
                            <label for="date"></label>
                            <input type="date" id="date" name="date">
                    </div>
                </div>
            </div>
                                <!-- Div for Time -->
            <div class="chooseTime">
                <div class="row">
                    <div class="col-md-4">
                        <h5 id="bookingH5">CHOOSE TIME</h5>
                    </div>
                    <div class="col-md-8">
                            <label for="chooseAmOrPM"></label>
                            <select id="chooseAmOrPM">
                                <option value="">&nbsp;</option>
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>                   
                        <br> <br>
                        <div class="col-md-4 col-">
                           <img src="Images/barbershop-icon3.gif" width="50px" height="230px"> 
                        </div>
                        <div class="col-md-8">
                            <table id="scheduleTable" style="display: none;"><br>
                                <tbody>
                                    <tr><td><input class="radInput"  type="radio" id="radio1" name="time" value="9:00 am">
                                            <div class="square-radio">
                                                <label for="radio1">09:00 am</label></div>
                                            <input class="radInput" type="radio" id="radio2" name="time" value="09:30 am">
                                            <div class="square-radio">
                                                <label for="radio2">09:30 am</label></div>
                                            <input class="radInput" type="radio" id="radio3" name="time" value="10:00 am">
                                            <div class="square-radio">
                                                <label for="radio3">10:00 am</label></div>
                                            <input class="radInput" type="radio" id="radio4" name="time" value="10:30 am">
                                            <div class="square-radio">
                                                <label for="radio4">10:30 am</label></div>
                                            <input class="radInput" type="radio" id="radio5" name="time" value="11:00 am">
                                            <div class="square-radio">
                                                <label for="radio5">11:00 am</label></div>     
                                            <input class="radInput" type="radio" id="radio6" name="time" value="11:00 am">
                                            <div class="square-radio">
                                                <label for="radio6">11:30 am</label></div>     
                                            </td><td class="tdhide">AM</td></tr>
                        
                                    <tr><td><input class="radInput" type="radio" id="radio7" name="time" value="9:00 am">
                                        <div class="square-radio">
                                            <label for="radio7">01:00 pm</label></div>
                                        <input class="radInput" type="radio" id="radio8" name="time" value="09:30 am">
                                        <div class="square-radio">
                                            <label for="radio8">01:30 pm</label></div>
                                        <input class="radInput" type="radio" id="radio9" name="time" value=":00 am">
                                        <div class="square-radio">
                                            <label for="radio9">02:00 pm</label></div>
                                        <input class="radInput" type="radio" id="radio10" name="time" value="2:30 am">
                                        <div class="square-radio">
                                            <label for="radio10">02:30 pm</label></div>
                                        <input class="radInput" type="radio" id="radio11" name="time" value="03:00 pm">
                                        <div class="square-radio">
                                            <label for="radio11">03:00 pm</label></div>
                                        <input class="radInput" type="radio" id="radio12" name="time" value="03:30 am">
                                        <div class="square-radio">
                                            <label for="radio12">03:30 pm</label></div>
                                        <input class="radInput" type="radio" id="radio13" name="time" value="04:00 am">
                                        <div class="square-radio">
                                            <label for="radio13">04:00 pm</label></div>     
                                        </td><td class="tdhide">PM</td></tr>
                
                                </tbody>
                            </table>
                        
                        </div>
                       
                        <br>
                    
          
                        

                        <div class="chooseService container-fluid">
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 id="bookingH5">TYPE OF SERVICE</h5></div>
                                <div class="col-md-8">
                                    <table cellpadding="3px" width="50px">
                                        <tr>
                                            <td><input class="radInput" type="radio" name="Services1" id="Services ServiceType1">
                                                <div class="square-radio"><label for="Services ServiceType1">Hair cut</label></div></td>
                                            <td><input class="radInput" type="radio" name="Services2" id="Services ServiceType2">
                                                <div class="square-radio"><label for="Services ServiceType2">Head Shave</label></div></td>
                                            <td><input class="radInput" type="radio" name="Services3" id="Services ServiceType3">
                                                <div class="square-radio"><label for="Services ServiceType3">Face Shave</label></div></td>
                                        </tr>
                                        <tr>
                                            <td><input class="radInput" type="radio" name="Services4" id="Services ServiceType4">
                                                <div class="square-radio"><label for="Services ServiceType4">Beards</label></div></td>
                                            <td><input class="radInput" type="radio" name="Services5" id="Services ServiceType5">
                                                <div class="square-radio"><label for="Services ServiceType5">Mustache Trim</label></div></td>
                                            <td><input class="radInput" type="radio" name="Services6" id="Services ServiceType6">
                                                <div class="square-radio"><label for="Services ServiceType6">Hair Coloring</label></div></td>
                                        </tr>
                                    </table>    
                                </div>
                            </div>  
                        </div>
                           
                            
                    
                        <div class="chooseBarber">
                            <br>
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <h5 id="bookingH5">WHO'S YOUR BARBER?</h5>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <table cellpadding="3px" width="50px">
                                        <tr>
                                            <td><input  class="radInput" type="radio" name="Barber" id="Barber Barber1">
                                                <div class="square-radio"><label for="Barber Barber1">Rudy F.</label></div></td>
                                            <td><input class="radInput" type="radio" name="Barber" id="Barber Barber2">
                                                <div class="square-radio"><label for="Barber Barber2">Lando P.</label></div></td>
                                            <td><input class="radInput" type="radio" name="Barber" id="Barber Barber3">
                                                <div class="square-radio"><label for="Barber Barber3">Red G.</label></div></td>
                                        </tr>
                                        <tr>
                                            <td><input class="radInput" type="radio" name="Barber" id="Barber Barber4">
                                                <div class="square-radio"><label for="Barber Barber4">Others</label></div></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>
                        <br>
                        <div class="col-md-12 d-flex justify-content-center "><br>
                        <button class="signupbtn" type="submit" id="bookNowBtn">Book Now</button><br>
                        </div>
                </form>     
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
  
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

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts/script-book.js"></script>
</body>

</html>
