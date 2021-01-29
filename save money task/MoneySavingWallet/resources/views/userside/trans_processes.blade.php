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
	<div class="main-content">
		<div class="container">
			<!-- Table -->
			<h2 class="mb-5"></h2>
			<div class="row">
				<div class="col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0">
					<div class="card card-profile shadow">
						<div class="row justify-content-center">
							<div class="col-lg-3 order-lg-2">
								<div class="card-profile-image">
									<img src="images/users/{{$info[0]->image}}" class="rounded-circle">
								</div>
							</div>
						</div>
						<div class="card-header text-center pt-8 pt-md-4  pb-md-4"></div>
						<div class="card-body pt-8">
							<h2 class="text-center">Your information</h2>
							<div class="row">
								<table class="table text-center">
									<tbody>
										<tr>
											<td>Your Id</td>
											<td>{{$info[0]->user_id}}</td>
										</tr>
										<tr>
											<td>Your Name</td>
											<td>{{$info[0]->name}}</td>
										</tr>
										<tr>
											<td>Your Email</td>
											<td>{{$info[0]->email}}</td>
										</tr>
										<tr>
											<td>Your Phone</td>
											<td>{{$info[0]->countrycode.$info[0]->phone}}</td>
										</tr>
										<tr>
											<td>Your Birthdate</td>
											<td>{{$info[0]->birthdate}}</td>
										</tr>
									    <tr>
											<td>Your wallet currency</td>
											<td>{{$info[0]->wallet_currency	}}</td>
										</tr>
										<tr>
											<td>Your current balance</td>
											<td>{{$info[0]->current_balance	}}</td>
										</tr>
										<tr>
											<td>Your Date Registration and time</td>
											<td>{{$info[0]->created_at}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection