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
@section('body')
<section id="promot" class="section-padding">
	<div class="container">
		<div class="row">	
			
			<div class="col-lg-6 col-md-6 col-6">
				<!-- end section title -->
				<div class="home-p-form-wrapper">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>create own<span> Categories</span></h3>
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
							@if(session('successadded'))
							<div class="alert alert-success" role="alert">
								{{session('successadded')}}
							</div>
							@endif
							<div class="row">
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Subcategory Name</label>
									<div class="col-9">
										<input name="SubCategoryName" class="form-control" id="cname" placeholder="Subcategory Name" type="text" required="required">
									</div>
								</div>
								<div class="form-group row col-lg-12 mb-6 mt-4">
									<label for="example-date-input" class="col-3 col-form-label">Category Name</label>
									<div class="col-9">
										<select name="CategoryName" class="form-control" id="exampleFormControlSelect1" required="required">
											<option></option>
											<option value="1">Incomes</option>
											<option value="2">Expenses</option>
										</select>
									</div>
								</div>							
								<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0 mt-4">
									<button type="submit" class="btn-style btn-filled btn-filled-2"><i class="fa fa-dot-circle-o"></i>Submite</button>
								</div>
							</div>
						</form>								
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-6">
				<div class="home-p-form-wrapper">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>Your<span> Categories</span></h3>
							</div>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Category Type</th>
								<th scope="col">Subcategory Name</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subcat_info as $info)
							<tr>
								<td>{{$info->subcategory_id}}</td>
								@if($info->category_id==1)
								<td>Incomes</td>
								@else
								<td>Expenses</td>
								@endif
								<td>{{$info->subcategory_name}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>			
		</div>
	</div>
	<!--- END CONTAINER -->
</section>

@endsection