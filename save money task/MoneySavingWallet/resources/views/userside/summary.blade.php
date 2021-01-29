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
			<div class="row">
				<div class="col-lg-1 col-md-1 col-1"></div>
				<div class="col-lg-10 col-md-10 col-10">
					<!-- end section title -->
					<div class="home-p-form-wrapper">
						<div class="row">
							<div class="col-12 text-left">
								<div class="section-title-2">
									<h3>YOUR<span> transactions</span></h3>
								</div>
							</div>
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Category Type</th>
										<th scope="col">Subcategory Name</th>
										<th scope="col">wallet balance</th>
										<th scope="col">Date</th>
										<th scope="col">Amount</th>
										<th scope="col">note</th>
									</tr>
								</thead>
								<tbody>
									@foreach($transaction_info as $info)
									<tr>
										<td>{{$info->trans_id}}</td>	
										@if($info->category_id==1)
										<td>Incomes</td>
										@else
										<td>Expenses</td>
										@endif
                                        @foreach($subcat_info as $info1)
                                        @if($info->subcategory_id==$info1->subcategory_id)
                                         <td>{{$info1->subcategory_name}}</td>
                                        @endif
                                        @endforeach
										<td>{{$user_info[0]->current_balance}}<span>  {{$user_info[0]->wallet_currency}}</span></td>
										<td>{{$info->date}}</td>
										<td>{{$info->amount}}</td>
										<td>{{$info->note}}</td>
									</tr>
									@endforeach
									<tr>
										<th colspan="7">Total of Incomes <span>{{$total_income}}</span></th>
									</tr>
									<tr>
										<th colspan="7">Total of Expenses <span>{{$total_expenses}}</span></th>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-1"></div>
			</div>
		</div>
	</div>
</section>

@endsection