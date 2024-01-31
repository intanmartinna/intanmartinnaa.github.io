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
	<title>Golden Crystal Villa - ABOUT US</title>
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
	<link rel="stylesheet" href="css/common.css">
	<?php require('inc/links.php'); ?>

	<style>
		.box{
			border-top-color: var(--teal) !important;
		}
	</style>

</head>
<body class="bg-light">

	<?php require('inc/header.php'); ?>

	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">ABOUT US</h2>
		<hr>
		<div class="h-line bg-dark"></div>
			<p class="text-center mt-3">
				Our gym is among the best in the area and available exclusively to our guests. Alternatively, <br>you can enjoy our swimming pool or take advantage of the executive business centre, and other facilities.
			</p>
		</div>

		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
					<h3 class="mb-3">Plan Your Visit</h3>
					<p>
						Whether you're here for business or leisure, a visit to Concorde Hotel Kuala Lumpur is always a satisfactory one. With 523 exceptional rooms, business facilities, wellness offerings, and diverse culinary options, you're in for a pleasant time.
					</p>
				</div>	
				<div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2  order-1">
					<img src="images/about/about1.jpg" class="w-50">
				</div>			
			</div>
		</div>

		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4 px-4">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
						<img src="images/about/hotel.svg" width="70px">
						<h4 class="mt-3">100+ ROOMS</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 px-4">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
						<img src="images/about/customers.svg" width="70px">
						<h4 class="mt-3">200+ CUSTOMERS</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 px-4">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
						<img src="images/about/rating.svg" width="70px">
						<h4 class="mt-3">150+ REVIEWS</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 px-4">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
						<img src="images/about/staff.svg" width="70px">
						<h4 class="mt-3">200+ STAFFS</h4>
					</div>
				</div>
			</div>
		</div>

		<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

		<div class="container px-4">
		  <div class="swiper mySwiper">
		    <div class="swiper-wrapper mb-5">
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
		      	<img src="images/about/team.jpg" class="w-100">
		      	<h5 class="mt-2">CEO</h5>
		      </div>
		    </div>
		    <div class="swiper-pagination"></div>
		  </div>
		</div>

	<?php require('inc/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script>
	var swiper = new Swiper(".mySwiper", {
		spaceBetweeen: 40,
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
      		slidesPerView: 3,
      	},
      	1024: {
      		slidesPerView: 3,
      	}
      }
	});
	</script>

</body>
</html>