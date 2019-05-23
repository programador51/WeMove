var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 17
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

           //console.log(Object.values(pos[0]));
           var position = [position.coords.latitude,position.coords.longitude];
           document.getElementById("latitude").value=position[0];
           document.getElementById("longitude").value=position[1];
           console.log('Latitud: '+position[0]+'  --  Longitud: '+position[1]);

            var latlng = new google.maps.LatLng(pos);

		    var objConfigMarker = {
				position:latlng,
				map: map,
				title: "Ubicacion actual"
			};

      var marker = new google.maps.Marker(objConfigMarker);

      map.setCenter(pos);

      google.maps.event.addListener(map, 'click', function(event) {
    	var result = [event.latLng.lat(), event.latLng.lng()];
    	transition(result);
    		});

			var numDeltas = 100;
			var delay = 10; //milliseconds
			var i = 0;
			var deltaLat;
			var deltaLng;

			function transition(result){
			    i = 0;
			    deltaLat = (result[0] - position[0])/numDeltas;
			    deltaLng = (result[1] - position[1])/numDeltas;
			    moveMarker();
			}

			function moveMarker(){
			   position[0] += deltaLat;
			   position[1] += deltaLng;
			   latlng = new google.maps.LatLng(position[0], position[1]);
			   marker.setTitle("Latitude:"+position[0]+" | Longitude:"+position[1]);
			   marker.setPosition(latlng);
			   if(i!=numDeltas){
			   	i++;
			   	document.getElementById("latitude").value=position[0];
          		document.getElementById("longitude").value=position[1];
          		console.log('Latitud: '+position[0]+'\nLongitud: '+position[1]);
			    setTimeout(moveMarker, delay);
			   }
			}

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
}