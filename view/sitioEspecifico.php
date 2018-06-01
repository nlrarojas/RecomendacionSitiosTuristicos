<?php
//header
include_once 'header.php';
?>
<br/><br/>
<h1>Buscar ruta por sitio en específico</h1>
<br/>
<b>Inicio: </b>
<select id="start">
    <option value="Provincia de Cartago, Cartago">Cartago</option>
    <option value="Provincia de San José, San José">San José</option>
    <option value="Provincia de Heredia, Heredia">Heredia</option>
    <option value="Provincia de Alajuela, Alajuela">Alajuela</option>
    <option value="Provincia de Guanacaste, Guanacaste">Guanacaste</option>
    <option value="Provincia de Limón, Limón">Limón</option>
    <option value="Provincia de Puntarenas, Puntarenas">San José</option>
</select>
<b>Final: </b>
<select id="end">
    <option value="Provincia de Cartago, Cartago">Cartago</option>
    <option value="Provincia de San José, San José">San José</option>
    <option value="Provincia de Heredia, Heredia">Heredia</option>
    <option value="Provincia de Alajuela, Alajuela">Alajuela</option>
    <option value="Provincia de Guanacaste, Guanacaste">Guanacaste</option>
    <option value="Provincia de Limón, Limón">Limón</option>
    <option value="Provincia de Puntarenas, Puntarenas">San José</option>
</select>
<br/><br/><br/>
<div>
<div id="googleMap" class="col" style="height: 500px;width: 100%;"></div>
<div><strong id="TiempoyDistancia" style="display:none;">Tiempo y Distancia</strong>
      <div id="output"></div></div>
        
      </div>
<script>
    function myMap() {
        google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
  });
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
    var mapProp= {
        center:new google.maps.LatLng(9.905087,-84.098126),
        zoom:15,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    directionsDisplay.setMap(map);

    var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
          calculateTimeAndDistance();
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
        
 
      }

      function calculateTimeAndDistance(){
        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var geocoder = new google.maps.Geocoder;

var service = new google.maps.DistanceMatrixService;
service.getDistanceMatrix({
  origins: [document.getElementById('start').value],
  destinations: [document.getElementById('end').value],
  travelMode: 'DRIVING',
  unitSystem: google.maps.UnitSystem.METRIC,
  avoidHighways: false,
  avoidTolls: false
}, function(response, status) {
  if (status !== 'OK') {
    alert('Error was: ' + status);
  } else {
    var originList = response.originAddresses;
    var destinationList = response.destinationAddresses;
    var outputDiv = document.getElementById('output');
    outputDiv.innerHTML = '';
    document.getElementById('TiempoyDistancia').style.display = 'block';
    deleteMarkers(markersArray);

    var showGeocodedAddressOnMap = function(asDestination) {
     // var icon = asDestination ? destinationIcon : originIcon;
      return function(results, status) {
        if (status === 'OK') {
          map.fitBounds(bounds.extend(results[0].geometry.location));
          markersArray.push(new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        //    icon: icon
          }));
        } else {
          alert('Geocode was not successful due to: ' + status);
        }
      };
    };

    for (var i = 0; i < originList.length; i++) {
      var results = response.rows[i].elements;
      geocoder.geocode({'address': originList[i]},
          showGeocodedAddressOnMap(false));
      for (var j = 0; j < results.length; j++) {
        geocoder.geocode({'address': destinationList[j]},
            showGeocodedAddressOnMap(true));
        outputDiv.innerHTML += originList[i] + ' to ' + destinationList[j] +
            ': ' + results[j].distance.text + ' in ' +
            results[j].duration.text + '<br>';
      }
    }
  }
});
      }
      function deleteMarkers(markersArray) {
        for (var i = 0; i < markersArray.length; i++) {
          markersArray[i].setMap(null);
        }
        markersArray = [];
      }
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }


    
    


</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjqEeMsyssgt2NQ57PcegmXy95t4Wx8ww&callback=myMap"></script>
<?php
//footer
include_once 'footer.php';
?>