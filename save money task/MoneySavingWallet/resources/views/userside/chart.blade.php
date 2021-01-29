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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			["Element", "Density", { role: "style" } ],
			["Daily", {{$final_total_daily}}, "#6666ff"],
			["Monthly", {{$final_total_monthly}}, "#33ccff"],
			["Annual", {{$final_total_annual}}, "#ff9933"]
			]);

		var view = new google.visualization.DataView(data);
		view.setColumns([0, 1,
			{ calc: "stringify",
			sourceColumn: 1,
			type: "string",
			role: "annotation" },
			2]);

		var options = {
			title: "Chart report for your transactions",
			width: 600,
			height: 400,
			bar: {groupWidth: "95%"},
			legend: { position: "none" },
		};
		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		chart.draw(view, options);
	}
</script>
<section id="promot" class="section-padding">
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div style="margin-left: 280px;" class="col-lg-12 col-md-12 col-12">
					<div id="columnchart_values" style="width: 100%; height: 400px;"></div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection