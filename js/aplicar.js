function initMap() {
        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 4,
          center: {lat: 25.657421, lng: -100.318754}  // Australia.
        });

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({
          draggable: true,
          map: map,
          panel: document.getElementById('right-panel')
        });

        directionsDisplay.addListener('directions_changed', function() {
          computeTotalDistance(directionsDisplay.getDirections());
        });

        var pLat = document.getElementById('latitude1');
        var p1 = parseFloat(pLat.getAttribute("value"));

        var pLng = document.getElementById('longitude1');
        var p2 = parseFloat(pLng.getAttribute("value"));

        var destino = document.getElementById('destino').getAttribute("value");
        console.log(destino);
        switch(destino) {
        case 'Mederos':
        displayRoute({lat: p1, lng: p2}, {lat: 25.614920, lng: -100.275870 }, directionsService,
        directionsDisplay);
        break;
        case 'CU':
        displayRoute({lat: p1, lng: p2}, {lat: 25.723342, lng: -100.309773 }, directionsService,
        directionsDisplay);
        break;
        case 'Ciencias de la Salud':
        displayRoute({lat: p1, lng: p2}, {lat: 25.691042, lng: -100.349153 }, directionsService,
        directionsDisplay);
        break;
        case 'Ciencias Agropecuarias':
        displayRoute({lat: p1, lng: p2}, {lat: 25.781050, lng: -100.287490 }, directionsService,
        directionsDisplay);
        break;
        default:
            // code block
        }
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
  var pos = {
  lat: position.coords.latitude,
  lng: position.coords.longitude
    };

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
}
        
      }

  function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  console.log('More or less ' + crd.accuracy + ' meters.');
};

function error(){

}

function options(){

}


if(document.getElementById('pasajeros').getAttribute("value")==2){
  var lat1 = parseFloat(document.getElementById('lat1').getAttribute("value"));
  var lng1 = parseFloat(document.getElementById('lng1').getAttribute("value"));
  var objWaypoints = 
    [{location:{lat:lat1,lng:lng1}}]
}

if(document.getElementById('pasajeros').getAttribute("value")==3){
  var lat1 = parseFloat(document.getElementById('lat1').getAttribute("value"));
  var lng1 = parseFloat(document.getElementById('lng1').getAttribute("value"));
  var lat2 = parseFloat(document.getElementById('lat2').getAttribute("value"));
  var lng2 = parseFloat(document.getElementById('lng2').getAttribute("value"));
  var objWaypoints = 
    [{location:{lat:lat1,lng:lng1}},
    {location:{lat:lat2,lng:lng2}}]
}

if(document.getElementById('pasajeros').getAttribute("value")==4){
  var lat1 = parseFloat(document.getElementById('lat1').getAttribute("value"));
  var lng1 = parseFloat(document.getElementById('lng1').getAttribute("value"));
  var lat2 = parseFloat(document.getElementById('lat2').getAttribute("value"));
  var lng2 = parseFloat(document.getElementById('lng2').getAttribute("value"));
  var lat3 = parseFloat(document.getElementById('lat3').getAttribute("value"));
  var lng3 = parseFloat(document.getElementById('lng3').getAttribute("value"));

  var objWaypoints = 
    [{location:{lat:lat1,lng:lng1}},
    {location:{lat:lat2,lng:lng2}},
    {location:{lat:lat3,lng:lng3}}]
}

navigator.geolocation.getCurrentPosition(success, error, options);

      function displayRoute(origin, destination, service, display) {
        service.route({
          origin: origin,
          destination: destination,
          waypoints:objWaypoints,
          optimizeWaypoints:true,
          drivingOptions:{
            departureTime: new Date(1337675679473)
          },
          travelMode: 'DRIVING',
          avoidTolls: true
        }, function(response, status) {
          if (status === 'OK') {
            display.setDirections(response);
          } else {
            alert('Could not display directions due to: ' + status);
          }
        });
      }

      function computeTotalDistance(result) {
        var total = 0;
        var myroute = result.routes[0];
        for (var i = 0; i < myroute.legs.length; i++) {
          total += myroute.legs[i].distance.value;
        }
        total = total / 1000;
        document.getElementById('total').innerHTML = total + ' km';
      }
