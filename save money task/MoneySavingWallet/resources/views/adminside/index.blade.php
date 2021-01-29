@extends('adminside.layout.layout')

@section('body')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<i class="fa fa-user"></i>
			<strong class="card-title pl-2">Your Infromation</strong>
		</div>
		<div class="card-body">
			<div class="mx-auto d-block">
				<img class="rounded-circle mx-auto d-block" src="images/adminimage/{{$info[0]->image}}" width="250px" height="250px" alt="Card image cap">
				<h5 class="text-sm-center mt-2 mb-1">{{$info[0]->name}}</h5>
				<div class="location text-sm-center">{{$info[0]->email}}</div>
				<div class="location text-sm-center">{{$info[0]->phone}}</div>
				</div>
				<hr>
				<div class="card-text text-sm-center">
					<a href="#">
						<i class="fa fa-facebook pr-1"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter pr-1"></i>
					</a>
					<a href="#">
						<i class="fa fa-linkedin pr-1"></i>
					</a>
					<a href="#">
						<i class="fa fa-pinterest pr-1"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	@endsection