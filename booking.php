<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style-book.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
	<title>GupitHub/BookingPage</title>
</head>
<body class="dark-mode">
	<!-- Navigation Bar -->
	<?php 
	    include 'actions/checkLogin.php';
	   
	    include 'nav.php';

	?><!-- Hero Section -->
	<!-- Hero Section -->
	<div class="bookingmain">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-center" id="wallPaperSection"><img alt="" src="Images/Index/bookingwallpaper2.png" width="100%"></div><!-- form Section of the Page -->
			<div class="col-md-6" id="bookingSection">
				<br>
				<form action="actions/bookingAction.php" id="bookingForm" method="post" name="bookingForm">
					<div class="chooseDate">
						<div class="row">
							<div class="col-md-4">
								<h5 id="bookingH5">CHOOSE DATE</h5>
							</div>
							<div class="col-md-8">
								<label for="date"></label> <input id="date" name="date" type="date">
							</div>
						</div>
					</div><!-- Div for Time -->
					<div class="chooseTime">
						<div class="row">
							<div class="col-md-4">
								<h5 id="bookingH5">CHOOSE TIME</h5>
							</div>
							<div class="col-md-8">
								<label for="chooseAmOrPM"></label> <select id="chooseAmOrPM">
									<option value="">
										&nbsp;
									</option>
									<option value="AM">
										AM
									</option>
									<option value="PM">
										PM
									</option>
								</select>
							</div><br>
							<br>
							<div class="col-md-4 col-"><img height="230px" src="Images/barbershop-icon3.gif" width="50px"></div>
							<div class="col-md-8">
								<br>
								<table id="scheduleTable" style="display: none;">
									<tbody>
										<tr>
											<td>
												<input class="radInput" id="radio1" name="time" type="radio" value="9:00 am">
												<div class="square-radio">
													<label for="radio1">09:00 am</label>
												</div><input class="radInput" id="radio2" name="time" type="radio" value="09:30 am">
												<div class="square-radio">
													<label for="radio2">09:30 am</label>
												</div><input class="radInput" id="radio3" name="time" type="radio" value="10:00 am">
												<div class="square-radio">
													<label for="radio3">10:00 am</label>
												</div><input class="radInput" id="radio4" name="time" type="radio" value="10:30 am">
												<div class="square-radio">
													<label for="radio4">10:30 am</label>
												</div><input class="radInput" id="radio5" name="time" type="radio" value="11:00 am">
												<div class="square-radio">
													<label for="radio5">11:00 am</label>
												</div><input class="radInput" id="radio6" name="time" type="radio" value="11:30 am">
												<div class="square-radio">
													<label for="radio6">11:30 am</label>
												</div>
											</td>
											<td class="tdhide">AM</td>
										</tr>
										<tr>
											<td>
												<input class="radInput" id="radio7" name="time" type="radio" value="1:00 pm">
												<div class="square-radio">
													<label for="radio7">01:00 pm</label>
												</div><input class="radInput" id="radio8" name="time" type="radio" value="1:30 pm">
												<div class="square-radio">
													<label for="radio8">01:30 pm</label>
												</div><input class="radInput" id="radio9" name="time" type="radio" value="2:00 pm">
												<div class="square-radio">
													<label for="radio9">02:00 pm</label>
												</div><input class="radInput" id="radio10" name="time" type="radio" value="2:30 am">
												<div class="square-radio">
													<label for="radio10">02:30 pm</label>
												</div><input class="radInput" id="radio11" name="time" type="radio" value="03:00 pm">
												<div class="square-radio">
													<label for="radio11">03:00 pm</label>
												</div><input class="radInput" id="radio12" name="time" type="radio" value="03:30 pm">
												<div class="square-radio">
													<label for="radio12">03:30 pm</label>
												</div><input class="radInput" id="radio13" name="time" type="radio" value="04:00 pm">
												<div class="square-radio">
													<label for="radio13">04:00 pm</label>
												</div>
											</td>
											<td class="tdhide">PM</td>
										</tr>
									</tbody>
								</table>
							</div><br>
						</div>
						<div class="chooseService container-fluid">
							<br>
							<div class="row">
								<div class="col-md-4">
									<h5 id="bookingH5">TYPE OF SERVICE</h5>
								</div>
								<div class="col-md-8">
									<table cellpadding="3px" width="50px">
										<tr>
											<td>
												<input class="radInput" id="Services ServiceType1" name="Services" type="radio" value="Haircut">
												<div class="square-radio">
													<label for="Services ServiceType1">Hair cut</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Services ServiceType2" name="Services" type="radio" value="Head Shave">
												<div class="square-radio">
													<label for="Services ServiceType2">Head Shave</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Services ServiceType3" name="Services" type="radio" value="Face Shave">
												<div class="square-radio">
													<label for="Services ServiceType3">Face Shave</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<input class="radInput" id="Services ServiceType4" name="Services4" type="radio" value="Beard">
												<div class="square-radio">
													<label for="Services ServiceType4">Beard</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Services ServiceType5" name="Services5" type="radio" value="Mustache Trim">
												<div class="square-radio">
													<label for="Services ServiceType5">Mustache Trim</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Services ServiceType6" name="Services6" type="radio" value="Hair Color">
												<div class="square-radio">
													<label for="Services ServiceType6">Hair Coloring</label>
												</div>
											</td>
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
									<input class="radInput" id="Barber Barber1" name="Barber" type="radio">----
									<table cellpadding="3px" width="50px">
										<tr>
											<td>
												<input class="radInput" id="Barber Barber1" name="Barber" type="radio" value="Rudy F.">
												<div class="square-radio">
													<label for="Barber Barber1">Rudy F.</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Barber Barber2" name="Barber" type="radio"  value="Lando P.">
												<div class="square-radio">
													<label for="Barber Barber2">Lando P.</label>
												</div>
											</td>
											<td>
												<input class="radInput" id="Barber Barber3" name="Barber" type="radio"  value="Red G.">
												<div class="square-radio">
													<label for="Barber Barber3">Red G.</label>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<input class="radInput" id="Barber Barber4" name="Barber" type="radio"  value="Any.">
												<div class="square-radio">
													<label for="Barber Barber4">Any</label>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div><br>
							<div class="col-md-12 d-flex justify-content-center">
								<br>
								<input class="signupbtn" id="bookNowBtn" type="submit" value="Book Now"><br>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!-- Footer -->
	<footer class="custom-footer py-4 mt-4">
		<div class="container">
			<div class="row">
				<!-- Column 1 -->
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
					<a href="main.php"><img alt="Logo" class="img-fluid mb-3" src="Images/logo.png" style="max-width: 150px;"></a>
					<div>
						<a class="mx-2 text-white" href="#"><i class="bi bi-facebook"></i></a> <a class="mx-2 text-white" href="#"><i class="bi bi-instagram"></i></a> <a class="mx-2 text-white" href="#"><i class="bi bi-twitter"></i></a> <a class="mx-2 text-white" href="#"><i class="bi bi-youtube"></i></a>
					</div>
				</div><!-- Column 2 -->
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
					<strong style="color: #f7971d;">Opening Hours:</strong><br>
					Monday-Friday: 9am-8pm<br>
					Saturday: 9am-5pm<br>
					<strong style="color: #f7971d;">Address:</strong><br>
					143 Downtown Village Quezon City
				</div><!-- Column 3 -->
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 text-white">
					<strong style="color: #f7971d;">Questions:</strong><br>
					<a class="text-white" href="#">Shipping and Returns</a><br>
					<a class="text-white" href="#">Refund Policy</a><br>
					<a class="text-white" href="#">Privacy Policy</a><br>
					<a class="text-white" href="#">Payment Options</a><br>
					<a class="text-white" href="#">Order Status</a><br>
					<a href="#" style="color: #f7971d;"><strong>FAQ</strong></a><br>
				</div><!-- Column 4 -->
				<div class="col-lg-3 col-md-6 text-white">
					<strong style="color: #f7971d;">Subscribe:</strong><br>
					Enter your email to receive special offers and Vouchers.<br>
					<form class="mt-2">
						<input class="form-control mb-2" placeholder="Enter your email" type="email"> <button class="btn btn-danger" type="submit">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
	</script> 
	<script src="scripts/script-book.js">
	</script>
</body>
</html>