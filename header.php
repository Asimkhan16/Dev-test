<?php
$base_url = "https://godigitell.co.in/dev/hp/";
$pagename_with = basename($_SERVER['PHP_SELF']);
$pagename_ = explode(".", $pagename_with);
$pagename = $pagename_[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php
		if ($pagename == "index") {
			echo "Hp | Home | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "about-us") {
			echo "Hp | About Us | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "service") {
			echo "Hp | Service | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "products") {
			echo "Hp | Products | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details1") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details2") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details3") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details4") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "product-details5") {
			echo "Hp | Product Details | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		if ($pagename == "contact-us") {
			echo "Hp | Contact Us | Laptop Solutions | Rentals, Spares and Expert Services | Hewlett Packard Laptops";
		}
		?>
	</title>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Bebas+Neue&family=Oswald&family=Poppins:wght@100&family=Quattrocento&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">

	<link rel="icon"       href="images/fav-icon.png" type="image/gif" sizes="16x16"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
	<!-- <div class="bg_load"></div> -->
	<header id="hp-header" class="header-area">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="<?php echo $base_url;?>">
				<img class="logo-image-icon" src="images/2048px-HP_logo_2012 1.png" width="70%">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class=" menu-items navbar-nav align-items-md-center align-item-start mb-lg-0" id="myDIV">
						<li class="nav-item">
							<a class="nav-link btn1 home-menu" aria-current="page" style="font: 15px 'Poppins', sans-serif;" href="<?php echo $base_url;?>">Home</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link btn1 about-us-menu" style="font: 15px 'Poppins', sans-serif;" href="<?php echo $base_url;?>about-us">About Us</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link btn1 products-menu" style="font: 15px 'Poppins', sans-serif;" href="<?php echo $base_url;?>products">Products</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link btn1 services-menu" style="font: 15px 'Poppins', sans-serif;" href="<?php echo $base_url;?>service">Services</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link btn1 contact-us-menu" style="font: 15px 'Poppins', sans-serif;" href="<?php echo $base_url;?>contact-us">Contact Us</a>
						</li>
					</ul>
					<!-- <div class="header-btn"> -->
						<!-- <a class="mt-0 post-btn border-0" href="#">POST PROPERTY FREE</a> -->
						<!-- <a class="user-icon button" href="#popup1"><img src="images/usericon.png"></a> -->
					<!-- </div> -->
					
					
				</div>
			</div>
		</nav>
		
	</header> 