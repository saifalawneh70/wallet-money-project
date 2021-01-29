<!DOCTYPE html>
<html lang="zxx">


<!--  
-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('mythem/assets/img/favicon.ico')}}" />
	<title>Money-Saving Wallet</title>
	<!-- Bootstrap core CSS -->
	<link href="/mythem/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Google Font  -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
	<!-- icofont icon -->
	<link rel="stylesheet" href="{{ asset('mythem/assets/css/icofont.css')}}">	
	<!-- font awesome icon -->
	<link rel="stylesheet" href="{{ asset('mythem/assets/css/fontawesome-all.min.css')}}">	
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('mythem/assets/css/animate.css')}}{{ asset('">
	<!--- meanmenu Css-->
	<link rel="stylesheet" href="/mythem/assets/css/meanmenu.min.css" media="all" />	
	<!--- owl carousel Css-->
	<link rel="stylesheet" href="/mythem/assets/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/mythem/assets/owlcarousel/css/owl.theme.default.min.css">
	<!-- venobox -->
	<link rel="stylesheet" href="/mythem/assets/venobox/css/venobox.css" />	
	<!-- Style CSS --> 
	<link rel="stylesheet" href="/mythem/assets/css/style.css">
	<!-- Responsive  CSS -->
	<link rel="stylesheet" href="/mythem/assets/css/responsive.css">

	<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<style type="text/css">
.card>hr {
  margin-right: 0;
  margin-left: 0;
}

.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}
.card-header {
  margin-bottom: 0;
  padding: 1.25rem 1.5rem;
  border-bottom: 1px solid rgba(0, 0, 0, .05);
  background-color: #fff;
}
.card-header:first-child {
  border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}
.rounded-circle {
  border-radius: 50% !important;
}
.shadow,
.card-profile-image img {
  box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.mr-2 {
  margin-right: .5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}
.mr-4 {
  margin-right: 1.5rem !important;
}

.my-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mt-7 {
  margin-top: 6rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pt-8 {
  padding-top: 8rem !important;
}

.m-auto {
  margin: auto !important;
}
.card-profile-image {
  position: relative;
}
.card-profile-image img {
  position: absolute;
  left: 50%;
  max-width: 180px;
  transition: all .15s ease;
  transform: translate(-50%, -30%);
  border-radius: .375rem;
}
.card-profile-image img:hover {
  transform: translate(-50%, -33%);
}
</style>
<body>

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">Money Wallet</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-1">
		<!-- START LOGO AREA -->
		<div class="logo-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-4 col-md-3 col-sm-6 col-7 mx-auto pl-0 mb-lg-0 mb-5">
						<div class="logo">
							<a href="/">
								<img class="img-fluid" src="/mythem/assets/img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="header-info-box">
							<div class="header-info-icon">
								<i class="fa fa-envelope-open"></i>
							</div>
							<p>Email Us</p>
							<h6>saifalawneh70@gmail.com</h6>
						</div>
						<div class="header-info-box">
							<div class="header-info-icon">
								<i class="icofont icofont-phone"></i>
							</div>
							<p>Call Us</p>
							<h6>(962)795-163-090</h6>
						</div>
						<div class="header-info-box">
							@yield('loginORlogout')
						</div>
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END LOGO AREA -->

		<!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-9 d-none d-lg-block d-md-none">
							<nav class="navbar navbar-expand-lg justify-content-left">
								<ul class="navbar-nav">
	   	                        @yield('h1')
	   	                        @yield('h2')
	   	                        @yield('h3')
	   	                        @yield('h4')
	   	                        @yield('h5')							
  								</ul>
							</nav>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGATION AREA -->	
	</header>
	<!-- END HEADER SECTION -->
	
	

     @yield('body')





	<!-- START FOOTER -->
	<footer>
		<!--Footer top -->
		<div class="footer-top overlay section-back-image-2" data-background="/mythem/assets/img/bg/slide1.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-5 footer-widget">
						<div class="footer-logo col-12 p-0">
							<a href="index-2.html">
								<div class="footer-logo-icon">
									<i class="fab fa-gg-circle"></i>
								</div>
								<div class="footer-logo-text">
									<h3>Bitfonix</h3>
									<p>Bitcoin Trading Template</p>
								</div>
							</a>
						</div>
						<div id="aboutcompany" class="about mb-2">
							<p>Lorem ipsum dolor sit ametconsect etur adipiscing elit, sed do eiusmod tempor incididunt ut labo reetdolor emagna aliqua. Ut enim ad minimv eniam, quis nostrud exerc itationul amco laboris nisi ut aliquip exeallg commodo consequat.</p>
						</div>
					</div>
					<!-- End Widget -->
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-5 footer-widget ">
						<div class="footer-section-title col-12 no-padding">
							<h3>Quick Links</h3>
						</div>
						<!-- END SECTION TITLE -->
						<div class="col-12 footer-widget-inner">
							<ul class="quick-link-list">
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Home Page</a></li>
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Our Members</a></li>
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Client feedback</a></li>
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Buy & Sell</a></li>
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Bitcoin Trade</a></li>
								<li><a href="#"><i class="fa fa-chevron-circle-right"></i> Market Price </a></li>
							</ul>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-0 footer-widget">
						<div class="footer-section-title col-12 no-padding">
							<h3>Stay With Us</h3>
						</div>
						<!-- END SECTION TITLE -->
						<div id="contactus"class="col-12 footer-widget-inner">
							<div class="single-fcontact mb-2">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-pin"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Compnay Name:</h6>
									<p>10004, Battery Park, New York, USA </p>
								</div>
							</div>
							<div class="single-fcontact mb-2">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-mobile-phone"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Phone Number:</h6>
									<p>123-456-0975</p>
								</div>
							</div>
							<div class="single-fcontact">
								<div class="single-fcontact-icon">
									<i class="icofont icofont-eye-alt"></i>
								</div>
								<div class="single-fcontact-des">
									<h6>Door Open:</h6>
									<p>Mon - Sun : 09:00 - 18:00</p>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4 footer-social-war">
							<div class="footer-social">
								<ul>
									<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
									<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
									<li><a href="#"><i class="icofont icofont-social-youtube"></i></a></li>
									<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Widget -->
				</div>
			</div>
		</div>

		<!--Footer Bottom -->
		<div class="copyright">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-4 footer-menu text-center text-lg-left text-md-left">
						<ul>
							<li><a href="#">Company Profile</a> </li>
							<li><a href="#">Terms & Condition</a> </li>
							<li><a href="#">Refund Policy</a> </li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 copyright-text text-center text-lg-right text-md-right">
						<p><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- END FOOTER -->

	<!-- Latest jQuery -->
	<script src="/mythem/assets/js/jquery-2.2.4.min.js"></script>
	<!-- popper js -->
	<script src="/mythem/assets/bootstrap/js/popper.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
	<script src="/mythem/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- meanmenu min js  -->
	<script src="/mythem/assets/js/jquery.meanmenu.min.js"></script>
	<!-- Sticky JS -->
	<script src="/mythem/assets/js/jquery.sticky.js"></script>
	<!-- owl-carousel min js  -->
	<script src="/mythem/assets/owlcarousel/js/owl.carousel.min.js"></script>	
	<!-- jquery appear js  -->
	<script src="/mythem/assets/js/jquery.appear.js"></script>
	<!-- countTo js -->
	<script src="/mythem/assets/js/jquery.inview.min.js"></script>
	<!-- venobox js -->
	<script src="/mythem/assets/venobox/js/venobox.min.js"></script>
	<script src="/mythem/assets/js/masonry.pkgd.min.js"></script>
	<!-- scroll to top js -->
	<script src="/mythem/assets/js/scrolltopcontrol.js"></script>
	<!-- WOW - Reveal Animations When You Scroll -->
	<script src="/mythem/assets/js/wow.min.js"></script>
	<!-- scripts js -->
	<script src="/mythem/assets/js/scripts.js"></script>
	<!-- chart js -->
	<script src="/mythem/assets/js/canvasjs.min.js"></script>
	<script src="/mythem/assets/js/canvasjs.activeone.js"></script>
</body>



</html>