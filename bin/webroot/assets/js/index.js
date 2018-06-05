var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "New",
    "value": 4852
  }, {
    "title": "Returning",
    "value": 9899
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );

AmCharts.ready(function(){
  chart.export.config.fileName = "newFileName";

  // WAIT FOR FABRIC
	var interval = setInterval( function() {
		if ( window.fabric ) {
			clearTimeout( interval );

			// CAPTURE CHART
		chart.export.capture({}, function(){alert("yo")})
    
			
			
		}
	}, 100 );
  
  
  
  
  
});