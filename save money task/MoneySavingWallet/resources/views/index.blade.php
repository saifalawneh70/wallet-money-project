@extends('layout.layout')
@section('h1')
<li><a href="/" class="nav-link">Home</a></li>
@endsection
@section('h2')
<li><a href="#promo" class="nav-link">Frequently Questions</a></li>
@endsection
@section('h3')
<li><a href="#chhoseus" class="nav-link">Why Choose Money Wallet</a></li>
@endsection
@section('h4')
<li><a href="#promo" class="nav-link">About Us</a></li>
@endsection
@section('h5')
<li><a href="#contactus" class="nav-link">Contact</a></li>
@endsection

@section('loginORlogout')
<a href="/login" class="quote-btn">Login<i class="icofont icofont-caret-right"></i></a>
@endsection
@section('body')

<!-- START SLIDER SECTION -->
<section class="slider-section">
	<div class="home-slides owl-carousel owl-theme ">
		<div class="home-single-slide" data-background="/mythem/assets/img/bg/slide1.jpg">
			<div class="home-slide-overlay"></div>
			<div class="home-single-slide-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-10 col-12 mr-auto text-left">
							<div class="home-single-slide-dec">
								<h2>Secure & easy way to <br> buy & sell bitcoin</h2>
								<p class="text-capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<div class="home-single-slide-button">
									<a href="#" class="btn-style btn-filled">Learn More</a>
									<a href="#" class="btn-style btn-border">Bitcoin Price</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end single slider -->
		<div class="home-single-slide" data-background="/mythem/assets/img/bg/slide5.jpg">
			<div class="home-slide-overlay"></div>
			<div class="home-single-slide-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-10 col-12 mr-auto text-left">
							<div class="home-single-slide-dec">
								<h2>bitcoin & ethereum transper you can trust </h2>
								<p class="text-capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<div class="home-single-slide-button">
									<a href="#" class="btn-style btn-border">Get quote</a>
									<a href="#" class="btn-style btn-filled">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end single slider -->
		<div class="home-single-slide" data-background="/mythem/assets/img/bg/slide6.jpg">
			<div class="home-slide-overlay"></div>
			<div class="home-single-slide-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-10 col-12 mr-auto text-left">
							<div class="home-single-slide-dec">
								<h2>Invest & double your desire bitcoin</h2>
								<p class="text-capitalize">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<div class="home-single-slide-button">
									<a href="#" class="btn-style btn-filled">Contact Us</a>
									<a href="#" class="btn-style btn-border">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end single slider -->
	</div>
</section>
<!-- END SLIDER SECTION  -->

<!-- START PROMO SECTION -->
<section id="promo" class="section-padding bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
				<div class="row">
					<div class="col-12 text-left">
						<div class="section-title-2">
							<h3>Frequently <span>questions</span></h3>
						</div>
					</div>
				</div>
				<!-- end section title -->

				<!--Accordion Box-->
				<ul class="accordion-box">
					<li class="accordion block">
						<div class="acc-btn">
							<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>How to buy & sell bitcoin?</div>
							<div class="acc-content">
								<div class="content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn active">
								<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>How can i transfer bitcoin?</div>
								<div class="acc-content current">
									<div class="content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>What about the trading with Bitfonix?</div>
									<div class="acc-content">
										<div class="content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>what about the investment planing?</div>
										<div class="acc-content">
											<div class="content">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
											</div>
										</div>
									</li>

									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">
											<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>How can i get the price idea?</div>
											<div class="acc-content">
												<div class="content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
												</div>
											</div>
										</li>

										<!--Block-->
										<li class="accordion block">
											<div class="acc-btn">
												<div class="icon-outer"><span class="icon icofont icofont-ui-press"></span></div>How can i contact with you?</div>
												<div class="acc-content">
													<div class="content">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>
													</div>
												</div>
											</li>
										</ul>
										<!--End Accordion Box-->	
									</div>
									<!-- end col -->
									<div class="col-lg-6 col-md-6 col-12">
										<div class="row">
											<div class="col-12 text-left">
												<div class="section-title-2">
													<h3>About <span>Us</span></h3>
												</div>
											</div>
										</div>
										<!-- end section title -->
										<div class="image-style-1 mb-4">
											<div class="image-style-wrapper">
												<div class="image-one"></div>
												<div class="image-two">
													<img src="/mythem/assets/img/bg/promobg1.jpg" class="img-fluid" alt="">
												</div>
											</div>
										</div>
										<div class="promo-content">
											<h4>Who we are?</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illodrut inventore veritatis et quasi architecto beatae vitae dicta sunt. </p>
											<a href="#" class="btn-style btn-filled mt-3">Read More <i class="icofont icofont-caret-right"></i></a>
											<div class="signature-img float-lg-right float-md-right float-none mt-3"><img src="assets/img/bg/signature.png" class="img-fluid" alt=""></div>
										</div>	
									</div>
									<!-- end col -->				
								</div>
							</div>
							<!--- END CONTAINER -->
						</section>
						<!-- END PROMO SECTION -->
						<!-- START CHOOSE US SECTION -->
						<section id="chhoseus" class="section-padding">
							<div class="container">
								<div class="row">
									<div class="col-12 text-center">
										<div class="section-title">
											<h5>Bitcoin Legality</h5>
											<h3>Why Choose <span>Bitfonix</span></h3>
										</div>
									</div>
								</div>
								<!-- end section title -->
								<div class="row">
									<div class="col-lg-8 col-md-8 col-12 mb-lg-0 mb-md-0 mb-5">
										<div class="row">	 
											<div class="col-lg-6 col-md-6 col-12 mb-5">
												<div class="single-wcus">
													<div class="single-wcus-icon">
														<i class="icofont icofont-bill"></i>
													</div>
													<div class="single-wcus-text">
														<h5>Easy Trading</h5>
														<p>Lorem ipsum dolor sit ametelid consectetur adipiscing elit sedd eiusmod tempor.</p>
													</div>
												</div>
											</div>
											<!-- end single chooseus -->	 
											<div class="col-lg-6 col-md-6 col-12 mb-5">
												<div class="single-wcus">
													<div class="single-wcus-icon">
														<i class="icofont icofont-coins"></i>
													</div>
													<div class="single-wcus-text">
														<h5>Trading Strategy</h5>
														<p>Lorem ipsum dolor sit ametelid consectetur adipiscing elit sedd eiusmod tempor.</p>
													</div>
												</div>
											</div>
											<!-- end single chooseus -->	 
											<div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-5">
												<div class="single-wcus">
													<div class="single-wcus-icon">
														<i class="icofont icofont-money"></i>
													</div>
													<div class="single-wcus-text">
														<h5>Money Exchange</h5>
														<p>Lorem ipsum dolor sit ametelid consectetur adipiscing elit sedd eiusmod tempor.</p>
													</div>
												</div>
											</div>
											<!-- end single chooseus -->	 
											<div class="col-lg-6 col-md-6 col-12">
												<div class="single-wcus">
													<div class="single-wcus-icon">
														<i class="icofont icofont-ui-travel"></i>
													</div>
													<div class="single-wcus-text">
														<h5>Security Ensure</h5>
														<p>Lorem ipsum dolor sit ametelid consectetur adipiscing elit sedd eiusmod tempor.</p>
													</div>
												</div>
											</div>
											<!-- end single chooseus -->
										</div>
									</div>
									<!-- end col -->	 
									<div class="col-lg-4 col-md-4 col-12">
										<div class="single-wcus-promo">
											<div class="single-wcus-promo-inner">
												<h3>We are ready to fly with you.</h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
												<a href="#" class="btn-style btn-border btn-border-2">Read More</a>
											</div>
										</div>
									</div>
									<!-- end col -->	
								</div>		
							</div>
							<!--- END CONTAINER -->
						</section>
						<!-- END CHOOSE US SECTION -->	
						@endsection