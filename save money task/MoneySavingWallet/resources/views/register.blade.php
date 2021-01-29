@extends('layout.layout')
@section('h1')
<li><a href="contact.html" class="nav-link">Home</a></li>
@endsection
@section('h4')
<li><a href="#aboutcompany" class="nav-link">About Us</a></li>
@endsection
@section('h5')
<li><a href="#contactus" class="nav-link">Contact</a></li>
@endsection
@section('loginORlogout')
<a href="\login" class="quote-btn">Login<i class="icofont icofont-caret-right"></i></a>
@endsection

@section('body')
<section id="promot" class="section-padding">
	<div class="container">
		<div class="row">	
			<div class="col-lg-2 col-md-2 col-2"></div>
			<div class="col-lg-8 col-md-8 col-8">
				<!-- end section title -->
				<div class="home-p-form-wrapper">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>registration <span>users</span></h3>
							</div>
						</div>
					</div>
					<div class="home-p-form">
						<form action="" method='post' enctype="multipart/form-data">
							@CSRF
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							
							@if(session('success'))
							<div class="alert alert-success" role="alert">
								{{session('success')}}
							</div>
							@endif
							<div class="row">
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Name</label>
									<div class="col-9">
										<input name="uname" class="form-control" id="uname" placeholder="Your Name*" type="text" required="required">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Email</label>
									<div class="col-9">
										<input name="uemail" class="form-control" id="uemail" placeholder="Email id*" type="email" required="required">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Password</label>
									<div class="col-9">
										<input name="upassword" class="form-control" id="upassword" placeholder="Password" type="password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" title="Your password must be contain at least 8 or more characters letters & numbers" required="required">
									</div>
								</div>	
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Phone Number</label>
									<div class="col-2">
										<input name="countrycode" class="form-control" id="countrycode" placeholder="+962"  type="text" required="required">
									</div>
									<div class="col-7">
										<input name="uphone" class="form-control" id="uphone" placeholder="Phone Number*"  type="text" required="required">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Wallet Currency</label>
									<div class="col-9">
										<select name="WalletCurrency" class="form-control" id="exampleFormControlSelect1" required="required">
											<option></option>
											<option>EUR</option>
											<option>JPY</option>
											<option>USD</option>
											<option>DZD</option>
											<option>JD</option>
										</select>
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">BirthDate</label>
									<div class="col-9">
										<input class="form-control" type="date" name="birthdate"  id="example-date-input" >
									</div>
								</div>							
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">image</label>
									<div class="col-9">
										<input type="file" name="upload_file" class="form-control-file" required="required">
									</div>
								</div>
								<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0 mt-4">
									<button type="submit" class="btn-style btn-filled btn-filled-2"><i class="fa fa-dot-circle-o"></i>Register</button>
								</div>
							</div>
						</form>								
					</div>
				</div>
			</div>
			<!-- end col -->
			<div class="col-lg-2 col-md-2 col-2"></div>				
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
@endsection