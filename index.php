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
	<title>Golden Crystal Villa - HOME</title>
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/common.css">
	<?php require('inc/links.php'); ?>

	<style>
		.availability-form{
			margin-top: -50px;
			z-index: 2;
			position: relative;
		}

		@media screen and (max-width: 575px) {
			.availability-form{
				margin-top: 25px;
				padding: 0 35px;
			}
		}
	</style>
</head>
<body class="bg-light">

	<?php require('inc/header.php'); ?>

	<!-- Carousel -->

	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/carousel/1.png" class="w-100 d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/2.png" class="w-100 d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/3.png" class="w-100 d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/4.png" class="w-100 d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/5.png" class="w-100 d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/carousel/6.png" class="w-100 d-block">
				</div>
			</div>
		</div>
	</div>

	<!-- Check availability form -->
	<div class="container Availability-form">
		<div class="row">
			<div class="col-md-12 bg-white shadow p-4 rounded">
				<h5 class="mb-4">Check Booking Availability</h5>
				<form>
					<div class="row align-items-end">
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-in</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-out</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Adult</label>
							<select class="form-select shadow-none">
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Children</label>
							<select class="form-select shadow-none">
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-1 mb-lg-3 mt-2">
							<button type="submit" class="btn btn-dark text-grey custom-bg shadow-none btn-outline-dark">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Our Rooms -->

	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
				  <img src="images/rooms/1.jpg" class="card-img-top">
				  <div class="card-body">
				    <h5>Superior Room</h5>
				    <h6 class="mb-4">RM200 per night</h6>
				    <div class="features mb-4">
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
				    <div class="Facilities mb-4">
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
				    <div class="guests mb-4">
				    	<h6 class="mb-1">Guests</h6>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		2 Adults
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		2 Children
				    	</span>
				    </div>
				    <div class="rating mb-4">
				    	<h6 class="mb-1">Rating</h6>
				    	<span class="badge rounded-pill bg-light">
				    		<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
				    	</span>
				    </div>
				    <div class="d-flex justify-content-evenly mb-2">
				    	<a href="#" class="btn btn-sm text-grey custom-bg shadow-none btn-outline-dark">Book Now</a>
				    	<a href="#" class="btn btn-sm text-grey shadow-none btn-outline-dark">More details</a>
				    </div>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
				  <img src="images/rooms/1.jpg" class="card-img-top">
				  <div class="card-body">
				    <h5>Deluxe Room</h5>
				    <h6 class="mb-4">RM289 per night</h6>
				    <div class="features mb-4">
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
				    <div class="Facilities mb-4">
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
				    		Sea View
				    	</span>
				    </div>
				    <div class="guests mb-4">
				    	<h6 class="mb-1">Guests</h6>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		2 Adults
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		2 Children
				    	</span>
				    </div>
				    <div class="rating mb-4">
				    	<h6 class="mb-1">Rating</h6>
				    	<span class="badge rounded-pill bg-light">
				    		<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
				    	</span>
				    </div>
				    <div class="d-flex justify-content-evenly mb-2">
				    	<a href="#" class="btn btn-sm text-grey custom-bg shadow-none btn-outline-dark">Book Now</a>
				    	<a href="#" class="btn btn-sm text-grey shadow-none btn-outline-dark">More details</a>
				    </div>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
				  <img src="images/rooms/1.jpg" class="card-img-top">
				  <div class="card-body">
				    <h5>Executive Room</h5>
				    <h6 class="mb-4">RM359 per night</h6>
				    <div class="features mb-4">
				    	<h6 class="mb-1">Features</h6>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		1 Rooms
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		2 King bed
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		1 Private bathroom
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		1 Balcony
				    	</span>
				    </div>
				    <div class="Facilities mb-4">
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
				    		Sea View
				    	</span>
				    </div>
				    <div class="guests mb-4">
				    	<h6 class="mb-1">Guests</h6>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		4 Adults
				    	</span>
				    	<span class="badge rounded-pill bg-light text-dark text-wrap">
				    		3 Children
				    	</span>
				    </div>
				    <div class="rating mb-4">
				    	<h6 class="mb-1">Rating</h6>
				    	<span class="badge rounded-pill bg-light">
				    		<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
					    	<i class="bi bi-star-fill text-warning"></i>
				    	</span>
				    </div>
				    <div class="d-flex justify-content-evenly mb-2">
				    	<a href="#" class="btn btn-sm text-grey custom-bg shadow-none btn-outline-dark">Book Now</a>
				    	<a href="#" class="btn btn-sm text-grey shadow-none btn-outline-dark">More details</a>
				    </div>
				  </div>
				</div>
			</div>




			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
				
			</div>
		</div>
	</div>

	<!-- Our Facilities -->

	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

	<div class="container">
		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/features/wifi.svg" width="80px">
				<h5 class="mt-3"> Wifi </h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/features/wifi.svg" width="80px">
				<h5 class="mt-3"> Wifi </h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/features/wifi.svg" width="80px">
				<h5 class="mt-3"> Wifi </h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/features/wifi.svg" width="80px">
				<h5 class="mt-3"> Wifi </h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/features/wifi.svg" width="80px">
				<h5 class="mt-3"> Wifi </h5>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Testimonials</h2>

	<div class="container mt-5">
		  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
      	<div class="profile d-flex align-items-center mb-3">
      		<img src="images/features/star.svg" width="30px">
      		<h6 class="m-0 ms-2">Random user1</h6>
      	</div>
      	<p>
      		"Facilities and service was excellent. Friendly staff and wonderful service and food."
      	</p>
      	<div class="rating">
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      	</div>
      </div>
      <div class="swiper-slide bg-white p-4">
      	<div class="profile d-flex align-items-center mb-3">
      		<img src="images/features/star.svg" width="30px">
      		<h6 class="m-0 ms-2">Random user1</h6>
      	</div>
      	<p>
      		"Facilities and service was excellent. Friendly staff and wonderful service and food."
      	</p>
      	<div class="rating">
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      	</div>
      </div>
      <div class="swiper-slide bg-white p-4">
      	<div class="profile d-flex align-items-center mb-3">
      		<img src="images/features/star.svg" width="30px">
      		<h6 class="m-0 ms-2">Random user1</h6>
      	</div>
      	<p>
      		"Facilities and service was excellent. Friendly staff and wonderful service and food."
      	</p>
      	<div class="rating">
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      		<i class="bi bi-star-fill text-warning"></i>
      	</div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
		<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More >>></a>
	</div>
	</div>

	<!-- Reach us -->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
				<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.606422296739!2d100.2515567!3d5.4765116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ae7fcf7a35e93%3A0x8ad5e8a6809768ed!2sGolden%20Sands%20Resort%2C%20Kampung%20Tanjung%20Huma%2C%2011100%20Batu%20Ferringhi%2C%20Pulau%20Pinang!5e0!3m2!1sen!2smy!4v1692637796755!5m2!1sen!2smy" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="bg-white p-4 rounded mb-4">
					<h5>Call us</h5>
					<a href="tel: +6046621003" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i>+6046621003
					</a>
					<br>
					<a href="tel: +60184072976" class="d-inline-block text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i>+60184072976
					</a>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="bg-white p-4 rounded mb-4">
						<h5>Follow us</h5>
						<a href="#" class="d-inline-block mb-3">
							<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-twitter me-1"></i>Twitter
							</span>
						</a>
						<br>
						<a href="#" class="d-inline-block mb-3">
							<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-facebook me-1"></i>Facebook
							</span>
						</a>
						<br>
						<a href="#" class="d-inline-block mb-3">
							<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-instagram me-1"></i>Instagram
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require('inc/footer.php'); ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	
	<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetweeen: 30,
			effect: "fade",
			loop: true,
			autoplay : {
				delay: 3500,
				disableOnInteraction: false,
			}
			});

	    var swiper = new Swiper(".swiper-testimonials", {
	      effect: "coverflow",
	      grabCursor: true,
	      centeredSlides: true,
	      slidesPerView: "auto",
	      slidesPerView: "3",
	      loop: true,
	      coverflowEffect: {
	        rotate: 50,
	        stretch: 0,
	        depth: 100,
	        modifier: 1,
	        slideShadows: false,
	      },
	      pagination: {
	        el: ".swiper-pagination",
	      },
	      breakpoints: {
	      	320: {
	      		slidesPerView: 1,
	      	},
	      	640: {
	      		slidesPerView: 1,
	      	},
	      	768: {
	      		slidesPerView: 2,
	      	},
	      	1024: {
	      		slidesPerView: 3,
	      	}
	      }
	    });
	</script>
</body>
</html>