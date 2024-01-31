<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=advice-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="indexStyle.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css"> -->
	<!-- <link rel="stylesheet" href=home.css> -->
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Golden Crystal Villa - ROOMS</title>
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/common.css">
	<?php require('inc/links.php'); ?>

<style type="text/css">

.product-quantity-label {
    margin-top: 5px;
}

.quantity-container {
    display: flex;
    align-items: center;
}

</style>

</head>
<body class="bg-light">

	<?php require('inc/header.php'); ?>

	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
		<div class="h-line bg-dark"></div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
					<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
					  <div class="container-fluid flex-lg-column align-items-stretch">
					    <h4 class="mt-2">FILTERS</a>
					    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
					      <div class="border bg-light p-3 rounded mb-3">
					      	<h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
					      	<label class="form-label" style="font-size: 15px">Check-in</label>
								<input type="date" class="form-control shadow-none mb-3">
								<label class="form-label" style="font-size: 15px">Check-out</label>
								<input type="date" class="form-control shadow-none">
					      </div>
					      <div class="border bg-light p-3 rounded mb-3">
					      	<h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
					      	<div class="mb-2">
					      		<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
									<label class="form-check-label" for="f1" style="font-size: 15px">Facility one</label>
					      	</div>
					      	<div class="mb-2">
					      		<input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
									<label class="form-check-label" for="f2" style="font-size: 15px">Facility two</label>
					      	</div>
					      	<div class="mb-2">
					      		<input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
									<label class="form-check-label" for="f3" style="font-size: 15px">Facility three</label>
					      	</div>
					      </div>
					      <div class="border bg-light p-3 rounded mb-3">
					      	<h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
					      	<div class="d-flex">
					      		<div class="me-2">
					      			<label class="form-label" style="font-size: 15px">Adults</label>
					      			<input type="number" value="0" class="form-control shadow-none">
					      		</div>
					      		<div>
					      			<label class="form-label" style="font-size: 15px">Children</label>
					      			<input type="number" value="0" class="form-control shadow-none">
					      		</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					</nav>
				</div>

				<div class="col-lg-9 col-md-12 px-4">
					<div class="card mb-4 border-0 shadow">
					  <div class="row g-0 align-items-center">
					    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
					      <img src="images/rooms/1.jpg" class="img-fluid rounded">
					    </div>
					    <div class="col-md-5 px-lg-3 px-md-3 px-0">
					      <h5 class="mb-3">Superior Room</h5>
					      <div class="features mb-3">
						    	<h6 class="mb-1">Features</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Rooms
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 King bed
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Private bathroom
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Balcony
						    	</span>
						   </div>
						   <div class="Facilities mb-3">
						   	<h6 class="mb-1">Facilities</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Free Wifi
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Flat-screen TV
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Air-conditioning
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		City View
						    	</span>
						   </div>
						   <div class="guests mb-3">
						    	<h6 class="mb-1">Guests</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Adults
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Children
						    	</span>
						    </div>
						</div>
					   <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
					      <h6 class="mb-4">RM200 per night</h6>
					      <a href="#" class="btn btn-sm w-100 text-grey custom-bg shadow-none btn-outline-dark mb-2">Book Now</a>
				    		<a href="#" class="btn btn-sm w-100 text-grey shadow-none btn-outline-dark">More details</a>
					    </div>
					  </div>
					</div>
					<div class="card mb-4 border-0 shadow">
					  <div class="row g-0 align-items-center">
					    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
					      <img src="images/rooms/1.jpg" class="img-fluid rounded">
					    </div>
					    <div class="col-md-5 px-lg-3 px-md-3 px-0">
					      <h5 class="mb-3">Superior Room</h5>
					      <div class="features mb-3">
						    	<h6 class="mb-1">Features</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Rooms
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 King bed
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Private bathroom
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Balcony
						    	</span>
						   </div>
						   <div class="Facilities mb-3">
						   	<h6 class="mb-1">Facilities</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Free Wifi
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Flat-screen TV
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Air-conditioning
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		City View
						    	</span>
						   </div>
						   <div class="guests mb-3">
						    	<h6 class="mb-1">Guests</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Adults
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Children
						    	</span>
						    </div>
						</div>
					   <div class="col-md-2 text-center">
					      <h6 class="mb-4">RM200 per night</h6>
					      <a href="#" class="btn btn-sm w-100 text-grey custom-bg shadow-none btn-outline-dark mb-2">Book Now</a>
				    		<a href="#" class="btn btn-sm w-100 text-grey shadow-none btn-outline-dark">More details</a>
					    </div>
					  </div>
					</div>
					<div class="card mb-4 border-0 shadow">
					  <div class="row g-0 align-items-center">
					    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
					      <img src="images/rooms/1.jpg" class="img-fluid rounded">
					    </div>
					    <div class="col-md-5 px-lg-3 px-md-3 px-0">
					      <h5 class="mb-3">Superior Room</h5>
					      <div class="features mb-3">
						    	<h6 class="mb-1">Features</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Rooms
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 King bed
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Private bathroom
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		1 Balcony
						    	</span>
						   </div>
						   <div class="Facilities mb-3">
						   	<h6 class="mb-1">Facilities</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Free Wifi
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Flat-screen TV
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		Air-conditioning
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		City View
						    	</span>
						   </div>
						   <div class="guests mb-3">
						    	<h6 class="mb-1">Guests</h6>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Adults
						    	</span>
						    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						    		2 Children
						    	</span>
						    </div>
						</div>
					   <div class="col-md-2 text-center">
					      <h6 class="mb-4">RM200 per night</h6>
					      <a href="#" class="btn btn-sm w-100 text-grey custom-bg shadow-none btn-outline-dark mb-2">Book Now</a>
				    		<a href="#" class="btn btn-sm w-100 text-grey shadow-none btn-outline-dark">More details</a>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>

	<?php require('inc/footer.php'); ?>

</body>
</html>