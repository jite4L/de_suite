<?php
include "confi.php";

if (isset($_REQUEST["submit"])) {

	$fullname = $_REQUEST['fullname'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
	$message = $_REQUEST['message'];

	$inse = "INSERT INTO contacts (fullname, email, number, message ) VALUES ('$fullname','$email','$number','$message')";
	$query1 = mysqli_query($connection, $inse);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<!-- header -->
	<header class="contact-us-site-header">
		<!-- off canvas -->
		<div class="offcanvas  offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="./images/Group 1.png" class="logo" alt=""></h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">


				<ul class="navbar-nav  ">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="./index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./rooms&rates.html">Rooms & Rates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact_us.html">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Facilities</a>
					</li>

				</ul>
				<a class="btn my-3 btn-primary" href="#" role="button">Book Now </a>
			</div>
		</div>
		<!-- /off canvas -->

		<!-- nav laptop -->
		<nav class=" navbar navbar-expand-lg bg-body-tertiary d-none d-lg-flex">
			<div class="container-fluid px-5 my-3 ">
				<a href="#"><img class="logo" src="./images/Group 1.png" alt=""></a>
				<button class="navbar-toggler justify-content-start " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i>
				</button>
				<div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav  pe-5 ">
						<li class="nav-item px-1">
							<a class="nav-link active" aria-current="page" href="./index.html">Home</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="./rooms&rates.html">Rooms & Rates</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="./contact_us.html">Contact Us</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="#">Facilities</a>
						</li>

					</ul>
					<a class="btn ms-2 btn-primary r-nav-button" href="#" role="button">Book Now </a>

				</div>
			</div>
		</nav>
		<!-- /nav laptop -->

		<!-- nav small & medium -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary  d-lg-none">
			<div class="container ">
				<a href="#"><img class="logo" src="./images/Group 1.png" alt=""></a>
				<button class="navbar-toggler justify-content-start " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i>
				</button>
				<div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav my-5  ">
						<li class="nav-item px-1">
							<a class="nav-link active" aria-current="page" href="./index.html">Home</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="#">Rooms & Rates</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="#">Facilities</a>
						</li>
						<a class="btn ms-2 btn-primary" href="#" role="button">Book Now </a>

					</ul>
				</div>
			</div>
		</nav>
		<!-- /nav small & medium -->

		<!-- hero-section  -->
		<div class="container-fluid">
			<div class="hero-section-text">


				<h4>CONTACT US </h4>
				</p>
			</div>
		</div>
		<!-- /hero-section  -->

	</header>
	<!-- /header -->
	<!-- main -->
	<main>
		<!-- contact-us-section-one -->
		<div class="contact-us-section-one  ">
			<div class="container-fluid">
				<!-- row 1 -->
				<div class="row  mx-1 sm-pad  my-5 py-4 ">
					<!-- col 1-->
					<div class="col-12 col-md-4 col-lg-4  rounded  my-2 text-center ">
						<div class="card about-color" style="background-color:rgba(35, 45, 87, 0.164) ; color: #232D57 ; border: none;">

							<div class="card-body my-4">
								<h5 class="card-title" style="font-weight: 700;">CUSTOMER SUPPORT </h5>
								<p class="card-text ">For questions, queries and inquiries? Contact our helpline below.
								</p>

							</div>
						</div>
					</div>
					<!-- /col-1 -->
					<!-- col 2-->
					<div class="col-12  col-md-4 col-lg-4   rounded  text-center my-2  ">
						<div class="card about-color " style="background-color:rgba(35, 45, 87, 0.164) ; color: #232D57 ; border: none;">

							<div class="card-body card-body-pad my-4">
								<h5 class="card-title" style="font-weight: 700;">TECHNICAL SUPPORT</h5>
								<p class="card-text ">24/7 amenities amazon support. Free wifi, power supply and water.
								</p>

							</div>
						</div>
					</div>
					<!-- /col-2 -->
					<!-- col-3 -->
					<div class="col-12 col-md-4 col-lg-4    rounded  text-center my-2  ">
						<div class="card about-color " style="background-color:rgba(35, 45, 87, 0.164) ; color: #232D57 ; border: none;">

							<div class="card-body card-body-pad my-4 ">
								<h5 class="card-title" style="font-weight: 700;">BOOKING QUERIES </h5>
								<p class="card-text mb-4 ">Contact our helpline below.</p>

							</div>
						</div>
					</div>
					<!-- /col-3 -->
				</div>
				<!-- /row 1 -->
			</div>
		</div>
		<!-- /contact-us-section-one -->

		<!-- contact-us-section-two  -->
		<div class="contact-us-section-two">
			<div class="container-fluid">
				<!-- row 2 -->
				<div class="row">
					<!-- col 1 -->
					<div class="col-12 col-md-6 col-lg-6 mb-5">
						<div class="mapouter">
							<div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=trinity university yaba&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
							</div>
						</div>
					</div>
					<!-- /col 1 -->
					<!-- col 2 -->
					<div class="col-12 col-md-6 col-lg-6 px-5">
						<h3 style="font-size: 24px; font-weight: 700; color: #232D57; margin-bottom:1.5rem;">KEEP IN TOUCH</h3>
						<form>
							<p class="mb-0 text-blue">Full Name</p>
							<input name="fullname" class=" form-control border-bottom mb-3  " type="text" aria-label="Disabled input example" required>
							<p class="mb-0 text-blue">Email</p>
							<input name="email" class=" form-control border-bottom mb-3 border-bottom-primary " type="text" aria-label="Disabled input example" required>
							<p class="mb-0 text-blue">Phone Number</p>
							<input name="number" class=" form-control border-bottom mb-3 border-bottom-primary " type="text" aria-label="Disabled input example" required>
							<p class="mb-0 text-blue">Leave a message</p>
							<input name="message" class=" form-control border-bottom mb-3 border-bottom-primary " type="text" aria-label="Disabled input example" required>

							<button name="submit" type="submit" class=" ms-0 text-white second-btn  btn mt-4 btn-primary">
								Send
							</button>
						</form>


					</div>
					<!-- /col 2 -->
				</div>
				<!--/ row 2 -->
			</div>

		</div>
		<!-- /contact-us-section-two  -->


	</main>
	<!-- /main -->

	<!-- footer -->

	<!-- footer lg & md -->
	<footer>
		<div class="d-none d-md-flex mt-5 section-six bg-blue ">
			<div class="container-fluid">
				<div class="row  mx-3  ">
					<div class="col-12 col-md-5 col-lg-5 my-5 ">
						<div class="me-5 pe-5">
							<div class="d-flex">
								<img class="px-1" src="./svgs/facebook.svg" alt="">
								<img class="px-1" src="./svgs/twitter.svg" alt="">
								<img class="px-1" src="./svgs/google+.svg" alt="">
								<img class="px-1" src="./svgs/linkedin.svg" alt="">

							</div>
							<p class="mt-3 text-color">Stay Connected</p>

							<p class="mt-3 text-color">Our hotel is an image of quality and professionalism combined
								<br> with hard
								work.
							</p>
							<form class="mt-4  d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Subscribe</button>
							</form>
						</div>


					</div>
					<div class=" col-12 col-md-3 col-lg-3 my-5 ">
						<div class="ms-5 ps-5">
							<h6 class="text-color my-2">QUICK LINKS</h6>
							<p class="mt-3 text-color">Home</p>
							<p class="mt-3 text-color">Rooms & Rates</p>
							<p class="mt-3 text-color">Contact Us</p>
							<p class="mt-3 text-color">Facilities</p>
						</div>

					</div>
					<div class=" col-12 col-md-4 col-lg-4 my-5  ">
						<h6 class="text-color my-2">CONTACT INFO</h6>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/mail.svg" alt="">
							Email: hoteldesuites@info.com.ng
						</p>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/pone.svg" alt="">
							08124767897, 08124767897
						</p>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/address.svg" alt="">
							Address: 419, yaba, jite Estate,<br>America, Lagos State, Nigeria.
						</p>

					</div>
				</div>
			</div>
	</footer>
	<!-- /footer lg & md -->

	<!-- footer sm -->
	<footer>
		<div class="d-md-none mt-5 section-six bg-blue ">
			<div class="container-fluid">
				<div class="row  mx-3  ">
					<div class="col-12 col-md-5 col-lg-5 my-5 ">
						<div class="me-5 pe-5">
							<div class="d-flex">
								<img class="px-1" src="./svgs/facebook.svg" alt="">
								<img class="px-1" src="./svgs/twitter.svg" alt="">
								<img class="px-1" src="./svgs/google+.svg" alt="">
								<img class="px-1" src="./svgs/linkedin.svg" alt="">

							</div>
							<p class="mt-3 text-color">Stay Connected</p>

							<p class="mt-3 text-color">Our hotel is an image of quality and professionalism combined
								<br> with hard
								work.
							</p>
							<form class="mt-4  d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Subscribe</button>
							</form>
						</div>


					</div>
					<div class=" col-12 col-md-3 col-lg-3 my-3 ">
						<div class=" ">
							<h6 class="text-color my-2">QUICK LINKS</h6>
							<p class="mt-3 text-color">Home</p>
							<p class="mt-3 text-color">Rooms & Rates</p>
							<p class="mt-3 text-color">Contact Us</p>
							<p class="mt-3 text-color">Facilities</p>
						</div>

					</div>
					<div class=" col-12 col-md-4 col-lg-4 my-3  ">
						<h6 class="text-color my-2">CONTACT INFO</h6>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/mail.svg" alt="">
							Email: hoteldesuites@info.com.ng
						</p>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/pone.svg" alt="">
							08124767897, 08124767897
						</p>
						<p class="mt-3 text-color d-flex">
							<img class="me-1" src="./svgs/address.svg" alt="">
							Address: 419, yaba, jite Estate,<br>America, Lagos State, Nigeria.
						</p>

					</div>
				</div>
			</div>
	</footer>
	<!-- /footer sm -->

	<!-- /footer -->


	<script src="./js/bootstrap.min.js"></script>
</body>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br><br>

<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br><br>

</html>