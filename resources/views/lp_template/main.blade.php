<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('photography-cl')}}/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('title') | MUTIARA STUDIO</title>

		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/nice-select.css">
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/owl.carousel.css">
			<link rel='stylesheet' href="{{asset('photography-cl')}}/css/simplelightbox.min.css" >
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('photography-cl')}}/css/main.css">

		</head>
		<body>
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="{{asset('photography-cl')}}/img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="show">
									<a href="#home">Home</a>
									<a href="#about">About Us</a>
									<a href="#gallery">Gallery</a>
									<a href="#services">Services</a>
									<a href="#contact">Contact</a>
									<a href="generic.html">Generic</a>
									<a href="elements.html">Elements</a>							
								</nav>
								<!-- <div class="menu-bar"><span class="lnr lnr-cross"></span></div> -->
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->
			<!-- @include('lp_template.content') -->
			@yield('content')
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>

						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="{{asset('photography-cl')}}/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{asset('photography-cl')}}/js/vendor/bootstrap.min.js"></script>
			<script src="{{asset('photography-cl')}}/js/jquery.ajaxchimp.min.js"></script>
			<script src="{{asset('photography-cl')}}/js/owl.carousel.min.js"></script>			
			<script src="{{asset('photography-cl')}}/js/jquery.nice-select.min.js"></script>
			<script src="{{asset('photography-cl')}}/js/jquery.sticky.js"></script>
			<script src="{{asset('photography-cl')}}/js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="{{asset('photography-cl')}}/js/simple-lightbox.min.js"></script>
			<script src="{{asset('photography-cl')}}/js/main.js"></script>	
		</body>
	</html>