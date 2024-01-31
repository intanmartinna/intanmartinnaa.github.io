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
		div.ul
		{
			text-align: center;
			padding: 0;
		}
        .btn2 {
            position: relative;
            display: inline-block;
            padding: 3px 5px;
            border: 2px black;
            text-transform: uppercase;
            color: black;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            transition: 0.5s;
            }

            .btn2::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            width: calc(100% + 4px);
            height: calc(100% - -2px);
            background-color: #e8e8e8;
            transition: 0.5s ease-out;
            transform: scaleY(1);
            }

            .btn2::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            width: calc(100% + 4px);
            height: calc(100% - 50px);
            background-color: black;
            transition: 1.0s ease-out;
            transform: scaleY(1);
            }

            .btn2:hover::before {
            transform: translateY(-25px);
            height: 0;
            }

            .btn2:hover::after {
            transform: scaleX(0);
            transition-delay: 0.15s;
            }

            .btn2:hover {
            border: 2px solid red;
            }

            .btn2 span {
            position: relative;
            z-index: 3;
            }

            button {
            text-decoration: none;
            border: none;
            background-color: transparent;
            }

            .heading{
            background-image: url("Resources/Main Banner.jpeg");
            color: #000000;
            margin-bottom: 15px;
            padding: 200px 0;
            grid-column:1/-1;
            text-align: center;
            background-size: cover;
            background-position: center;
            }
            .heading>h1{
            font-weight: 350;
            font-size:32px;
            letter-spacing: 10px;
            margin-bottom:10px;
            text-transform: uppercase;
			text-align: left;
            }
            .header>h3{
            font-weight: 600;
            font-size: 40px  
            letter-spacing: 5px;
            text-transform: uppercase;
            }
		
	</style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
	<img src="Resources/Lego-Logo.jpg" width="50px"></a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">HOME</span></a>
            </button>
        </li>
        <li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">SHOP</span></a>
            </button>
        </li>
        <li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">DISCOVER</span></a>
            </button>
        </li>
        <li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">HELP</span></a>
            </button>
        </li>
        <li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">SALE</span></a>
            </button>
        </li>
		<li class="nav-item">
            <button>
                <a href="#" class="btn2 me-2"><span class="spn2">ABOUT US</span></a>
            </button>
        </li>
	   </ul>
    </div>
  </div>
</nav>



	<!-- Main Banner-->

	<div class="container-fluid px-lg-4 mt-4">
        <div class="heading">
            <h1>What's on sale?</h1>
                <p>
                    Save on gifts for next year with our end-of-year sale now
                </p>
            <h3><a href="#" class="button2" >Shop now > </a></h3>
        </div>
		<!-- <img src="Resources/Main Banner.png" class="w-100 d-block"> -->
	</div>


	<!-- Second Banner -->
	
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Together, we can rebuild the world</h2>
	<pre>	
		<p class="mt-3" style="text-align:center">At the LEGO Group, we're playing our part in building a sustainable future and creating 
	a better world for our children to inherit. Find out how we're joining forces with others
    to have a lasting impact and inspire the children of today to become the builders of tommorow</p>
	</pre>

	<div class="container">
		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center py-4 my-15">
				<img src="Resources/1.png" width="180px">
				<h5 class="mt-3"> Children </h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center  py-4 my-15">
				<img src="Resources/2.png" width="180px">
				<h5 class="mt-3"> Enviroment </h5>
				
			</div>
			<div class="col-lg-2 col-md-2 text-center  py-4 my-15">
				<img src="Resources/3.png" width="180px">
				<h5 class="mt-3"> People </h5>
				
			</div>
		</div>
	</div>


	<!-- About us -->
<div class="container-fluid bg-blue mt-5">
	<div class="row">
		<div class="col-lg-2 p-4">
			<img src="Resources/Lego-Logo.jpg" width="50px">
			<p>
				Find inspiration </p>
			<p>
				LEGO Catalogues
			</p>
		</div>
		<div class="col-lg-2 p-4">
			<h5 class="mb-3">About Us</h5>
			<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About the LEGO Group</a>
			<br>
			<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">LEGO news</a>
			<br>
			<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Sustainability</a>
			<br>
			<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Supply chain transparency statement</a>
			<br>
			<a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">LEGO product certification</a>
		</div>
        <div class="col-lg-2 p-4">
            <h5 class="mb-3">About us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-twitter me-1"></i> Contact Us
                </a><br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1"></i> About the lego
                </a><br>
                <a href="#" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-instagram me-1"></i> LEGO news
                </a>
        </div>
		<div class="col-lg-2 p-4">
			<h5 class="mb-3">Follow us</h5>
			<a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
				<i class="bi bi-twitter me-1"></i> Twitter
			</a><br>
			<a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
				<i class="bi bi-facebook me-1"></i> Facebook
			</a><br>
			<a href="#" class="d-inline-block text-dark text-decoration-none">
				<i class="bi bi-instagram me-1"></i> Instagram
			</a>
		</div>
	</div>
</div>




</body>
</html>