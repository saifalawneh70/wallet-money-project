window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title:{
        text: "Chart Transcation"              
      },
      axisY: { 
			title: "Unemployment Rate", 
			suffix: "%", 
			includeZero: false 
		}, 
      data: [//array of dataSeries              
        { //dataSeries object

         /*** Change type "column" to "bar", "area", "line" or "pie"***/
         type: "column",
         toolTipContent: "{label}: {y}%", 
         dataPoints: [
         { label: "daily", y: 2 },                                 
         { label: "monthly", y: 34 },
         { label: "annual", y: 24 }
         ]
       }
       ]

});

chart.render();
}


function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}