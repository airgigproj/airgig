(function ReverseGeocode() {

    //This is declaring the Global variables

    var geocoder, map, marker;

    //This is declaring the 'Geocoder' variable
    geocoder = new google.maps.Geocoder();

    window.onload = function() {

    //This is creating the map with the desired options 
        var myOptions = {
            zoom: 6,
            center: new google.maps.LatLng(54.312195845815246,-4.45948481875007),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.ZOOM_PAN,
                position: google.maps.ControlPosition.TOP_LEFT
            },
            scaleControl: true,
            scaleControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_LEFT
            }
            };

        map = new google.maps.Map(document.getElementById('map'), myOptions);
        var form = document.getElementById('SearchForLocationForm');

        //This is getting the 'Latitude' and 'Longtiude' co-ordinates from the associated text boxes on the HTML form
        var lat = document.getElementById('Latitude').value;
        var lng = document.getElementById('Longitude').value;

        //This is putting the 'Latitude' and 'Longitude' variables together to make the 'latlng' variable
        var latlng = new google.maps.LatLng(lat, lng);

        // This is making the Geocode request
        geocoder.geocode({'latLng': latlng}, function(results, status) {

        // This is checking to see if the Geoeode Status is OK before proceeding    
            if (status == google.maps.GeocoderStatus.OK) {

        //This is placing the marker at the returned address    
            if (results[1]) {
          // Creating a new marker and adding it to the map
            map.setZoom(16); 
          marker = new google.maps.Marker({
            map: map, draggable:true
          });
        }

        var address= (results[1].formatted_address);

        //This is placing the returned address in the 'Address' field on the HTML form  
        document.getElementById('Address').value= results[1].formatted_address;
                }
            }
);
    };
})();