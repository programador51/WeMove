var i;
var total = document.getElementById('viajes');
var Total = parseFloat(total.getAttribute("value"));

function initMap() {
  for (i=1;i<(Total+1);i++){
  // The location of Uluru
  console.log(i);
  var pLat = document.getElementById('latitude'+i.toString());
  var p1 = parseFloat(pLat.getAttribute("value"));

  var pLng = document.getElementById('longitude'+i.toString());
  var p2 = parseFloat(pLng.getAttribute("value"));

  var uluru = {lat: p1, lng: p2};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'+i.toString()), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({
          draggable: true,
          map: map,
          panel: document.getElementById('right-panel')
        });

  directionsDisplay.addListener('directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });

  var destino = document.getElementById('destino').getAttribute("value");
        console.log(destino);
        destino = 'CU';
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
var objWaypoints = 
    [{location:{lat:25.684164,lng:-100.317099}}]
}

   function displayRoute(origin, destination, service, display) {
        service.route({
          origin: origin,
          destination: destination,
          waypoints:objWaypoints,
          optimizeWaypoints:true,
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
