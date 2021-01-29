@extends('layout.layout')
@section('h1')
<li><a href="/" class="nav-link">Home</a></li>
@endsection
@section('h4')
<li><a href="#aboutcompany" class="nav-link">About Us</a></li>
@endsection
@section('h5')
<li><a href="#contactus" class="nav-link">Contact</a></li>
@endsection
@section('body')
<!-- START PROMO 2 SECTION -->
<section id="promot" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<!-- end section title -->
				<div style="background-image:linear-gradient(rgba(18,18 ,17, 0.3), rgba(18,18 ,17, 0.8)), url('/images/coin.jpg'); height: 468px;width: 100%; background-repeat: no-repeat; background-size: cover;">
				</div>
			</div>
			<!-- end col -->
			<div class="col-lg-6 col-md-6 col-12">

				<!-- end section title -->
				<div class="home-p-form-wrapper">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>login <span>users</span></h3>
							</div>
						</div>
					</div>
					<div class="home-p-form">
						<form action="" method='post'>
							@CSRF
                            @if(!empty(session('warning')))
								<div class="alert alert-warning" role="alert">
									{{session('warning')}}
								</div>
							@endif
							<div class="row">

								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-2 col-form-label">Email</label>
									<div class="col-10">
										<input name="uemail" class="form-control" id="uemail" placeholder="Email id*" required="required" type="email">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-2 col-form-label">Password</label>
									<div class="col-10">
										<input name="upassword" class="form-control" id="upassword" placeholder="Password" required="required" type="password">
									</div>
								</div>
								<div class="form-group col-lg-12 mb-6 mt-4 text-center">
									<button type="submit" class="btn-style btn-filled btn-filled-2"><i class="fa fa-dot-circle-o"></i>Login</button>
								</div>
								<div class="form-group col-lg-12 mb-6 mt-4 text-center"><span>Not registered </span><a href="/register">create an account</a></div>
							</div>
						</form>								
					</div>
				</div>
			</div>
			<!-- end col -->				
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
<!-- END PROMO 2 SECTION -->
@endsection