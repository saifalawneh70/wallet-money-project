@extends('layout.layout')
@section('h1')
<li><a href="/trans_processes" class="nav-link">Your Profile</a></li>
@endsection
@section('h2')
<li><a href="/add-sub-cat" class="nav-link">Create categories</a></li>
@endsection
@section('h3')
<li><a href="/transaction" class="nav-link">transactions</a></li>
@endsection
@section('h4')
<li><a href="/summary" class="nav-link">summary page</a></li>
@endsection
@section('h5')
<li><a href="/chart" class="nav-link">chart page</a></li>
@endsection
@section('loginORlogout')
<a href="/Logout" class="quote-btn">Logout<i class="icofont icofont-caret-right"></i></a>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#CategoryName').change(function() {
			$.ajax({
				url: '/transaction/'+$(this).val(),
				type: 'GET',
				success:function (data) {
					$('#SubCategoryName').html(data);
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	});
</script>

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
								<h3>transaction <span>users</span></h3>
							</div>
						</div>
					</div>
					<div class="home-p-form">
						<form action="" method='post' enctype="multipart/form-data">
							@CSRF
							@if(!empty(session('amount')))
								<div class="alert alert-warning" role="alert">
									{{session('amount')}}
								</div>
							@endif
							@if(!empty(session('completeProcesses1')))
								<div class="alert alert-success" role="alert">
									{{session('completeProcesses1')}}
								</div>
							@endif
							@if(!empty(session('completeProcesses2')))
								<div class="alert alert-success" role="alert">
									{{session('completeProcesses2')}}
								</div>
							@endif
							<div class="row">
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Category Name</label>
									<div class="col-9">
										<select name="CategoryName" class="form-control" id="CategoryName" required="required">
											<option></option>
											<option value="1">Incomes</option>
											<option value="2">Expenses</option>
										</select>
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">subCategory Name</label>
									<div class="col-9">
										<select name="SubCategoryName" class="form-control" id="SubCategoryName" required="required">
										
										</select>
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Amount</label>
									<div class="col-9">
										<input name="Amount" class="form-control" placeholder="Amount" type="text" required="required">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Note</label>
									<div class="col-9">
										<textarea rows="5" name="note" class="form-control"></textarea>
									</div>
								</div>						
								<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0 mt-4">
									<button type="submit" class="btn-style btn-filled btn-filled-2"><i class="fa fa-dot-circle-o"></i>Submit</button>
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