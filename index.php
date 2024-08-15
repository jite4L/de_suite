<?php
include "confi.php";

if (isset($_REQUEST["submit"])) {

	$check_in = $_REQUEST["check_in"];
	$nights = $_REQUEST["nights"];
	$check_out = $_REQUEST["check_out"];
	$adults = $_REQUEST["adults"];
	$children = $_REQUEST["children"];



	$inse = "INSERT INTO booking (check_in, nights, check_out, adults, children) VALUES ('$check_in','$nights','$check_out','$adults','$children')";
	$query1 = mysqli_query($connection, $inse);
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="./css/style.css"> -->




	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">




</head>

<body>





	<header>
		<!-- off canvas -->


		<div class="offcanvas  offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="./images/Group 1.png" class="logo" alt=""></h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">


				<ul class="navbar-nav  ">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="./index.hpp">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./rooms&rates.html">Rooms & Rates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact_us.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Facilities</a>
					</li>

				</ul>
				<a class="btn my-3 btn-primary" href="./form.php" role="button">Book Now </a>
			</div>
		</div>


		<nav class="navbar navbar-expand-lg bg-body-tertiary d-none d-lg-flex">
			<div class="container-fluid px-5 my-3 ">
				<a href="#"><img class="logo" src="./images/Group 1.png" alt=""></a>
				<button class="navbar-toggler justify-content-start " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i>
				</button>
				<div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav  pe-5 ">
						<li class="nav-item px-1">
							<a class="nav-link active" aria-current="page" href="./index.php">Home</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="./rooms&rates.html">Rooms & Rates</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="./contact_us.php">Contact Us</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="#">Facilities</a>
						</li>

					</ul>
					<a class="btn ms-2 btn-primary" href="./form.php" role="button">Book Now </a>

				</div>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg bg-body-tertiary  d-lg-none">
			<div class="container ">
				<a href="#"><img class="logo" src="./images/Group 1.png" alt=""></a>
				<button class="navbar-toggler justify-content-start " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i>
				</button>
				<div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav my-5  ">
						<li class="nav-item px-1">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link" href="./rooms&rates.html">Rooms & Rates</a>
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



		<div class="container-fluid">
			<div class="hero-section-text">

				<p class="hero-section-text-p-one">WELCOME TO</p>
				<h4>HOTEL DE SUITES </h4>
				<p class="hero-section-text-p-two">A taste of royalty.</p>
			</div>
		</div>
	</header>
	<main>

		<div class="section-two container-fluid  ">
			<div class="section-two-title">
				<h3>HOTEL DE SUITES ROOMS</h3>
				<p>Explore all rooms</p>
			</div>
		</div>
		<hr class="my-0 ">
		<div class="container-fluid ">
			<div class="row   my-4 ">
				<div class="col-12 col-md-4 col-lg-4 text-center my-4 ">
					<img class="section-two-img object-fit-cover" src="./images/bfbf9d9b31e4c9b2d229dbddf44cbfda.jpeg" alt="">
					<h6 class="mt-3  ">FAMILY SPECIAL - DOUBLE BED</h6>
					<p class="fst-italic  "><a class="link-color" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
					</p>
				</div>
				<div class="col-12 col-md-4 col-lg-4 text-center  my-4 ">
					<img class=" section-two-img" src="./images/bbb36b1285555b2309f2cfbd6cda2e7b (1).jpeg" alt="">
					<h6 class="mt-3  ">MASTER ROOM - ONE KING SIZED BED</h6>
					<p class="fst-italic  "><a class="link-color" href="#">Check details<i class=" ps-1 bi bi-arrow-right"></i></a></p>

				</div>
				<div class="col-12 col-md-4 col-lg-4 text-center  my-4  ">

					<img class=" section-two-img object-fit-cover" src="./images/2e499c949a9f90d63277d0223d2d071e.jpeg" alt="">
					<h6 class="mt-3  ">COMPACT SIZE - SINGLE BED</h6>
					<p class="fst-italic  "><a class="link-color" href="#">Check details<i class=" ps-1 bi bi-arrow-right"></i></a></p>

				</div>
				<hr>
			</div>
		</div>




		<div class="section-three">
			<div class="container-fluid">
				<h3 class="text-center pt-5 pb-3">MAKE YOUR RESERVATION</h3>
				<div class="w-100 text-center">
					<svg class="" width="300 " height="49" viewBox="0 0 489 49" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line opacity="0.2" x1="197.8" y1="21" x2="301.8" y2="21" stroke="#232D57" stroke-opacity="0.8" stroke-width="2" />
						<line opacity="0.2" x1="47.4" y1="21" x2="151.4" y2="20.9999" stroke="#232D57" stroke-opacity="0.8" stroke-width="2" />
						<line opacity="0.2" x1="349.8" y1="21" x2="453.8" y2="21" stroke="#232D57" stroke-opacity="0.8" stroke-width="2" />
						<g clip-path="url(#clip0_114_19)">
							<path d="M198.05 25.0001C198.05 37.8407 187.641 48.2501 174.8 48.2501C161.959 48.2501 151.55 37.8407 151.55 25.0001C151.55 12.1594 161.959 1.75009 174.8 1.75009C187.641 1.75009 198.05 12.1594 198.05 25.0001ZM172.111 37.3108L189.361 20.0608C189.946 19.475 189.946 18.5252 189.361 17.9395L187.239 15.8182C186.654 15.2324 185.704 15.2324 185.118 15.8182L171.05 29.8862L164.482 23.3181C163.896 22.7324 162.946 22.7324 162.361 23.3181L160.239 25.4394C159.654 26.0252 159.654 26.9749 160.239 27.5607L169.989 37.3107C170.575 37.8965 171.525 37.8965 172.111 37.3108Z" fill="#232D57" fill-opacity="0.8" />
						</g>
						<g clip-path="url(#clip1_114_19)">
							<path d="M47.65 25.0001C47.65 37.8407 37.2407 48.2501 24.4 48.2501C11.5594 48.2501 1.15002 37.8407 1.15002 25.0001C1.15002 12.1594 11.5594 1.75009 24.4 1.75009C37.2407 1.75009 47.65 12.1594 47.65 25.0001ZM21.7107 37.3108L38.9607 20.0608C39.5465 19.475 39.5465 18.5252 38.9607 17.9395L36.8394 15.8182C36.2537 15.2324 35.3039 15.2324 34.7181 15.8182L20.65 29.8862L14.082 23.3181C13.4962 22.7324 12.5465 22.7324 11.9606 23.3181L9.83934 25.4394C9.25359 26.0252 9.25359 26.9749 9.83934 27.5607L19.5893 37.3107C20.1752 37.8965 21.1249 37.8965 21.7107 37.3108Z" fill="#232D57" fill-opacity="0.8" />
						</g>
						<g clip-path="url(#clip2_114_19)">
							<path d="M350.05 24.6001C350.05 37.4408 339.641 47.8501 326.8 47.8501C313.959 47.8501 303.55 37.4408 303.55 24.6001C303.55 11.7594 313.959 1.3501 326.8 1.3501C339.641 1.3501 350.05 11.7594 350.05 24.6001ZM324.111 36.9108L341.361 19.6608C341.946 19.075 341.946 18.1253 341.361 17.5395L339.239 15.4182C338.654 14.8324 337.704 14.8324 337.118 15.4182L323.05 29.4862L316.482 22.9181C315.896 22.3324 314.946 22.3324 314.361 22.9181L312.239 25.0394C311.654 25.6252 311.654 26.5749 312.239 27.1607L321.989 36.9107C322.575 37.4965 323.525 37.4965 324.111 36.9108Z" fill="#232D57" fill-opacity="0.8" />
						</g>
						<path d="M487.65 24.6001C487.65 37.4408 477.241 47.8501 464.4 47.8501C451.559 47.8501 441.15 37.4408 441.15 24.6001C441.15 11.7594 451.559 1.3501 464.4 1.3501C477.241 1.3501 487.65 11.7594 487.65 24.6001ZM461.711 36.9108L478.961 19.6608C479.546 19.075 479.546 18.1253 478.961 17.5395L476.839 15.4182C476.254 14.8324 475.304 14.8324 474.718 15.4182L460.65 29.4862L454.082 22.9181C453.496 22.3324 452.546 22.3324 451.961 22.9181L449.839 25.0394C449.254 25.6252 449.254 26.5749 449.839 27.1607L459.589 36.9107C460.175 37.4965 461.125 37.4965 461.711 36.9108Z" fill="#232D57" fill-opacity="0.8" />
						<defs>
							<clipPath id="clip0_114_19">
								<rect width="48" height="48" fill="white" transform="translate(150.8 1.00009)" />
							</clipPath>
							<clipPath id="clip1_114_19">
								<rect width="48" height="48" fill="white" transform="translate(0.400024 1.00009)" />
							</clipPath>
							<clipPath id="clip2_114_19">
								<rect width="48" height="48" fill="white" transform="translate(302.8 0.600098)" />
							</clipPath>
						</defs>
					</svg>
				</div>
				<ul class="mb-5 d-flex section-three-ul  justify-content-center">
					<li class="pe-2">Check</li>
					<li class=" px-3 ">Select Room</li>
					<li class=" px-2">Booking</li>
					<li class=" px-2">confirmation</li>
				</ul>
				<!-- laptop screen -->
				<form class="pb-5">
					<div class="row mt-4  mx-1 ps-4 ms-2  d-none d-lg-flex">
						<div class=" col-2 ps-2 px-1">
							<label class="mb-1  select-font" for="birthday">Check In</label>
							<input class="datepicker" type="date" id="check_in" name="check_in">
						</div>
						<div class="col-2  px-4">
							<p class="mb-1 ps-1 select-font">Night(s)</p>
							<select name="nights" class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
								<option selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>

							</select>

						</div>
						<div class="col-2 ps-2 px-1">
							<label class="mb-1 ps-1 select-font" for="birthday">Check Out</label>
							<input class="datepicker" type="date" id="check_out" name="check_out">


						</div>
						<div class="col-2  px-4">
							<p class="mb-1 ps-1 select-font">Adult(s)</p>
							<select name="adults" class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
								<option selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>

						</div>
						<div class="col-2  px-4">
							<p class="mb-1 ps-1 select-font">children</p>
							<select name="children" class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
								<option selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>

						</div>
						<div class="col-2 ps-2  ">
							<button name="submit" type="submit" class="text-white second-btn  btn mt-4 btn-primary">
								Check
							</button>
						</div>
					</div>
				</form>





				<!-- small screen -->
				<div class="row mt-4  mx-1   d-lg-none">
					<div class="col-6 col-md-6 px-1">
						<p class="mb-1 ps-1 select-font" for="birthday">Check In</p>
						<input class="datepicker" type="date" id="birthday" name="birthday">


					</div>
					<div class="col-6 col-md-6 px-1">
						<p class="mb-1 ps-1 select-font" for="birthday">Check Out</p>
						<input class="datepicker" type="date" id="birthday" name="birthday">



					</div>
					<div class="col-4 my-3 px-4">
						<p class="mb-1 ps-1 select-font">Night(s)</p>
						<select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
							<option selected>1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
							<option value="4">6</option>
							<option value="4">7</option>
							<option value="4">8</option>
							<option value="4">9</option>
							<option value="4">10</option>
						</select>

					</div>

					<div class="col-4 my-3  px-4">
						<p class="mb-1 ps-1 select-font">Adult(s)</p>
						<select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
							<option selected>1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
							<option value="4">6</option>
							<option value="4">7</option>
							<option value="4">8</option>
							<option value="4">9</option>
							<option value="4">10</option>
						</select>

					</div>
					<div class="col-4 my-3  px-4">
						<p class="mb-1 ps-1 select-font">children</p>
						<select class="form-select form-select-md   ps-3 " aria-label=".form-select-lg example">
							<option selected>1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
							<option value="4">6</option>
							<option value="4">7</option>
							<option value="4">8</option>
							<option value="4">9</option>
							<option value="4">10</option>
						</select>

					</div>
					<div class="col-2  Check-sm    ">
						<a class="text-white second-btn  btn mt-4 btn-primary" href="#" role="button">Check </a>
					</div>

				</div>
			</div>
		</div>




		<!-- laptop screen -->
		<div class="section-four d-none d-lg-flex   ">
			<div class="container-fluid">
				<div class="   text-center w-100">
					<h3 class="my-5 top-title">FACILITIES</h3>
					<div class="row  d-none d-lg-flex mx-1">
						<div class="col-6 section-four-col-space d-flex   ">

							<div class=" section-four-col text-center ">
								<div class="float-start  my-3 ">
									<h6 class="ps-2">Reception</h6>
									<p class="mb-0">We offer a wide array of services and amenities to make your time with us as
										comfortable and relaxing as possible.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end ms-5 ">
								<img src="./images/925b075db99650955c9d09023f0ac302.jpeg" class="section-four-img" alt="">

							</div>
						</div>
						<div class="col-6  5 ps-5  d-flex ">
							<div class="section-four-col text-center ">
								<div class="float-start   my-4  ">
									<h6 class="ps-2">Resturant</h6>
									<p class="mb-0">Fruits, bottle of water, wine/champagne, kid-friendly buffet, snack bar and bar.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end ms-5 ">
								<img src="./images/edward-howell-hVtjc8qoQgg-unsplash.jpg" class="border section-four-img" alt="">

							</div>
						</div>


					</div>
					<div class="row d-none d-lg-flex mt-5 mx-1">
						<div class="col-6 section-four-col-space d-flex   ">
							<div class=" section-four-col text-center ">
								<div class="float-start  my-3 ">
									<h6 class="ps-2">Banquet</h6>
									<p class="mb-0">Halls for parties, celebrations and varieties of occassions. Plated-style,
										family-style, pre-set banquet types available.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end ms-5 ">
								<img src="./images/76afcda9ebd07fd8b68af8b364910285 (1).jpeg" class="section-four-img" alt="">

							</div>
						</div>
						<div class="col-6  5 ps-5  d-flex ">
							<div class="section-four-col text-center ">
								<div class="float-start   my-4  ">
									<h6 class="ps-2">Resort</h6>
									<p class="mb-0">In addition to the convenience factor, there are more obvious perks to lodging with us
									</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end ms-5 ">
								<img src="./images/347869d9d2723008438500cfe5398ee2.jpeg" class="border section-four-img" alt="">

							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- medium screen -->
		<div class="section-four d-none d-md-flex d-lg-none">
			<div class="container-fluid">
				<div class="text-center w-100">
					<h3 class="my-5 top-title">FACILITIES</h3>
					<div class="row  d-none d-md-flex d-lg-none">
						<div class=" col-6 section-four-col-space d-flex   ">
							<div class=" col-4 section-four-col px-2 text-center ">
								<div class="float-start   my-3 ">
									<h6>Reception</h6>
									<p class="mb-0">We offer a wide array of services and amenities to make your time with us as
										comfortable and relaxing as possible.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="ps-5 float-end  ">
								<img src="./images/925b075db99650955c9d09023f0ac302.jpeg" class="section-four-img" alt="">

							</div>
						</div>

						<div class="col-6  d-flex ">
							<div class="col-4 section-four-col text-center ">
								<div class="float-start   my-4  ">
									<h6>Resturant</h6>
									<p class="mb-0">Fruits, bottle of water, wine/champagne, kid-friendly buffet, snack bar and bar.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end  second-float ">
								<img src="./images/edward-howell-hVtjc8qoQgg-unsplash.jpg" class="border section-four-img " alt="">

							</div>
						</div>

					</div>
					<br>
					<br>
					<div class="row  d-none d-md-flex d-lg-none">
						<div class=" col-6 section-four-col-space d-flex   ">
							<div class=" col-4 section-four-col px-2 text-center ">
								<div class="float-start   my-3 ">
									<h6>Banquet</h6>
									<p class="mb-0">Halls for parties, celebrations and varieties of occassions. Plated-style,
										family-style, pre-set banquet types available.</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="ps-5 float-end  ">
								<img src="./images/76afcda9ebd07fd8b68af8b364910285 (1).jpeg" class="section-four-img" alt="">

							</div>
						</div>

						<div class="col-6  d-flex ">
							<div class="col-4 section-four-col text-center ">
								<div class="float-start   my-4  ">
									<h6>Resort</h6>
									<p class="mb-0">In addition to the convenience factor, there are more obvious perks to lodging with us
									</p>
									<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>
								</div>

							</div>
							<div class="float-end  second-float ">
								<img src="./images/347869d9d2723008438500cfe5398ee2.jpeg" class="border section-four-img " alt="">

							</div>
						</div>

					</div>


				</div>
			</div>
		</div>

		<!-- small screen -->
		<div class="section-four d-md-none  ">
			<div class="container-fluid">
				<div class="   text-center w-100">
					<h3 class="my-5 top-title">FACILITIES</h3>
					<div class="row">
						<div class="col-12 px-2  ">
							<img src="./images/925b075db99650955c9d09023f0ac302.jpeg" class="section-four-img img-fluid" alt="">
							<div class="  section-four-col px-2 text-center ">
								<h6 class="mt-4">Reception</h6>
								<p class="mb-0 px-3">We offer a wide array of services and amenities to make your time with us as
									comfortable and relaxing as possible.</p>
								<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>


							</div>

						</div>
						<div class="col-12 my-3 px-2  ">
							<img src="./images/edward-howell-hVtjc8qoQgg-unsplash.jpg" class="img-fluid section-four-img" alt="">
							<div class="  section-four-col px-2 text-center ">
								<h6 class="mt-4">Resturant</h6>
								<p class="mb-0 px-3">We offer a wide array of services and amenities to make your time with us as
									comfortable and relaxing as possible.</p>
								<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>


							</div>

						</div>
						<div class="col-12 my-3 px-2 ">
							<img src="./images/76afcda9ebd07fd8b68af8b364910285 (1).jpeg" class="img-fluid section-four-img" alt="">
							<div class="  section-four-col px-2 text-center ">
								<h6 class="mt-4">Banquet</h6>
								<p class="mb-0 px-3">We offer a wide array of services and amenities to make your time with us as
									comfortable and relaxing as possible.</p>
								<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>


							</div>

						</div>
						<div class="col-12 my-3 px-2 ">
							<img src="./images/347869d9d2723008438500cfe5398ee2.jpeg" class="img-fluid section-four-img" alt="">
							<div class="  section-four-col px-2 text-center ">
								<h6 class="mt-4">Resort</h6>
								<p class="mb-0 px-3">We offer a wide array of services and amenities to make your time with us as
									comfortable and relaxing as possible.</p>
								<p class=" mt-1 fst-italic  "><a class=" link-color section-four-link" href="#">Check details<i class="ps-1 bi bi-arrow-right"></i></a>


							</div>

						</div>




					</div>





				</div>
			</div>

		</div>




		<div class="section-five  ">
			<div class="container-fluid">
				<div class="row pt-5 mx-2 sm-pad  ">
					<div class="col-12 col-md-4 col-lg-4  rounded my-2 text-center ">
						<div class="card section-five-col-colour">
							<p class="text-center"><img src="./svgs/badge.svg" alt="" class="mt-3 card-img-top " alt="..."></p>
							<div class="card-body">
								<h5 class="card-title ">Award Winning Service </h5>
								<p class="card-text ">Our hotel is an image of quality and professionalism combined with hard
									work and
									precision. You can expect only the best services from our staff.</p>

							</div>
						</div>







					</div>
					<div class="col-12  col-md-4 col-lg-4   rounded my-2 text-center ">
						<div class="card section-five-col-colour">
							<p class="text-center"><img src="./svgs/badge.svg" alt="" class="mt-3 card-img-top " alt="..."></p>
							<div class="card-body card-body-pad">
								<h5 class="card-title ">Premium Booking</h5>
								<p class="card-text ">Our hotel is an image of quality and professionalism combined with hard
									work and
									precision. You can expect only the best services from our staff.</p>

							</div>
						</div>







					</div>
					<div class="col-12 col-md-4 col-lg-4    rounded my-2 text-center ">
						<div class="card section-five-col-colour">
							<p class="text-center"><img src="./svgs/badge.svg" alt="" class="mt-3 card-img-top " alt="..."></p>
							<div class="card-body card-body-pad ">
								<h5 class="card-title ">Professionalism </h5>
								<p class="card-text  ">Our hotel is an image of quality and professionalism combined with hard
									work and
									precision. You can expect only the best services from our staff.</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




	</main>
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

							<p class="mt-3 text-color">Our hotel is an image of quality and professionalism combined <br> with hard
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

							<p class="mt-3 text-color">Our hotel is an image of quality and professionalism combined <br> with hard
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
	<div class="d-none d-lg-none">
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
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>

	<div class="d-md-none d-lg-none">
		<br>
		<br>
		<br>
		<br>

	</div>






	<script src="./js/myscript.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="gh.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



</body>

</html>