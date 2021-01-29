@extends('adminside.layout.layout')

@section('body')

<div class="col-lg-12">
	<div class="table-responsive table--no-card m-b-30">
		<table class="table table-borderless table-striped table-earning ">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Birthdate</th>
					<th>Total expenses</th>
					<th>Total incomes</th>
					<th>Registered date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user_info as $uinfo)
				<tr>
					<td>{{$uinfo->name}}</td>
					<td>{{$uinfo->email}}</td>
					<td>{{$uinfo->countrycode.$uinfo->phone}}</td>
					<td>{{$uinfo->birthdate}}</td>
					@php
					$total_income=0
					@endphp
					@php
					$total_expenses=0
					@endphp
					@foreach($transaction_info as $tinfo)
					@if($tinfo->user_id==$uinfo->user_id)
					@if($tinfo->category_id==1)
					@php
					$total_income+=$tinfo->amount
					@endphp
					@endif
					@if($tinfo->category_id==2)
					@php
					$total_expenses+=$tinfo->amount
					@endphp
					@endif
					@endif
					@endforeach
					<td>{{$total_expenses}}</td>
					<td>{{$total_income}}</td>
					@php
					$date = Carbon\Carbon::parse($uinfo->created_at)->format('Y-m-d');
					@endphp
					<td>{{$date}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>           
@endsection