<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAgD1XLil4zY6AyYCAFjvwPrdsoOq3Ew3U&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
    
			    var myOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
			
			}
			

			
			
			
			
			
			
			
      
    </script>
 <script type="text/javascript">

				var drawingManager = new google.maps.drawing.DrawingManager({
  drawingMode: google.maps.drawing.OverlayType.MARKER,
  drawingControl: true,
  drawingControlOptions: {
    position: google.maps.ControlPosition.TOP_CENTER,
    drawingModes: [google.maps.drawing.OverlayType.MARKER, google.maps.drawing.OverlayType.CIRCLE]
  },
  markerOptions: {
    icon: new google.maps.MarkerImage('http://www.example.com/icon.png')
  },
  circleOptions: {
    fillColor: '#ffff00',
    fillOpacity: 1,
    strokeWeight: 5,
    clickable: false,
    zIndex: 1,
    editable: true
  }
});
drawingManager.setMap(map);
			
		drawingManager.setOptions({
  drawingControlOptions: {
    position: google.maps.ControlPosition.BOTTOM_LEFT,
    drawingModes: [google.maps.drawing.OverlayType.MARKER]
  }
});	

			
		// To hide:
drawingManager.setOptions({
  drawingControl: false
});

// To show:
drawingManager.setOptions({
  drawingControl: true
});	
			
			
			drawingManager.setMap(null);
			
			google.maps.event.addListener(drawingManager, 'circlecomplete', function(circle) {
  var radius = circle.getRadius();
});

google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
  if (event.type == google.maps.drawing.OverlayType.CIRCLE) {
    var radius = event.overlay.getRadius();
  }
});
			
	
	
	
	
	
	
	
	
	
	
	
	
	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>