//[Dashboard Javascript]

//Project:	Crypto Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
		
	//ticker
 	if ($('#webticker-1').length) {   
		$("#webticker-1").webTicker({
			height:'auto', 
			duplicate:true, 
			startEmpty:false, 
			rssfrequency:5
		});
	}
	
	// scrolling  
	  $('#scroll-1').slimScroll({
		height: '300px'
	  });
	  $('#scroll-2').slimScroll({
		height: '300px'
	  });	
	
	
	
   // Charts setup
       var chartData = generateChartData();

		var chart = AmCharts.makeChart("chartdiv-dash", {
			"type": "serial",
			"marginRight": 20,
			"dataProvider": chartData,
			"valueAxes": [{
				"position": "left",
				"title": "Market Price"
			}],
			"graphs": [{
				"id": "g1",
				"fillAlphas": 0.6,
				"valueField": "visits",
				 "balloonText": "<div style='margin:5px; font-size:19px;'>Market:<b>[[value]]</b></div>"
			}],
			"chartScrollbar": {
				"graph": "g1",
				"scrollbarHeight": 80,
				"backgroundAlpha": 0,
				"selectedBackgroundAlpha": 0.1,
				"selectedBackgroundColor": "#888888",
				"graphFillAlpha": 0,
				"graphLineAlpha": 0.9,
				"selectedGraphFillAlpha": 0,
				"selectedGraphLineAlpha": 1,
				"autoGridCount": true,
				"color": "#AAAAAA"
			},
			"chartCursor": {
				"categoryBalloonDateFormat": "JJ:NN, DD MMMM",
				"cursorPosition": "mouse"
			},
			"categoryField": "date",
			"categoryAxis": {
				"minPeriod": "mm",
				"parseDates": true
			},
			"export": {
				"enabled": true,
				 "dateFormat": "YYYY-MM-DD HH:NN:SS"
			}
		});

		chart.addListener("dataUpdated", zoomChart);
		// when we apply theme, the dataUpdated event is fired even before we add listener, so
		// we need to call zoomChart here
		zoomChart();
		// this method is called when chart is first inited as we listen for "dataUpdated" event
		function zoomChart() {
			// different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
			chart.zoomToIndexes(chartData.length - 250, chartData.length - 100);
		}

		// generate some random data, quite different range
		function generateChartData() {
			var chartData = [];
			// current date
			var firstDate = new Date();
			// now set 500 minutes back
			firstDate.setMinutes(firstDate.getDate() - 1000);

			// and generate 500 data items
			var visits = 500;
			for (var i = 0; i < 500; i++) {
				var newDate = new Date(firstDate);
				// each time we add one minute
				newDate.setMinutes(newDate.getMinutes() + i);
				// some random number
				visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
				// add data item to the array
				chartData.push({
					date: newDate,
					visits: visits
				});
			}
			return chartData;
		}
	
}); // End of use strict




                


