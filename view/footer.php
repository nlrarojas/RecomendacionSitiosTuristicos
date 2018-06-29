      <!-- FOOTER -->
      <footer class="container" style="clear:both;">
        <p class="float-right"><a href="#">Ir al inicio</a></p>
        <p>&copy; Explorer CR, 2018. &middot; <a href="#">Derechos</a> &middot; <a href="#">Reservados</a></p>
      </footer>
    </main>



    <script>
    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

          calculateAndDisplayRoute(directionsService, directionsDisplay);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var sitios = <?php echo json_encode($sitios) ?>;
        for (var i = 0; i < sitios.length; i++) {
          console.log(sitios[i].longitud);
           waypts.push({
              location: new google.maps.LatLng(sitios[i].longitud,sitios[i].latitud),
              stopover: true
            }); 
        }

        directionsService.route({
          origin: new google.maps.LatLng(<?php $resultado = str_replace(",", ".", $ruta['punto_partida_log']); echo $resultado;?>,<?php  $resultado = str_replace(",", ".", $ruta['punto_partida_lat']); echo $resultado; ?>),
          destination: new google.maps.LatLng(<?php  $resultado = str_replace(",", ".", $ruta['punto_llegada_log']); echo $resultado;?>,<?php  $resultado = str_replace(",", ".", $ruta['punto_llegada_lat']); echo $resultado;?>),
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmprM9daEOTyPl-J1FEdGJK5VudcBhG-o&callback=initMap"
    async defer></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="view/js/jquery-slim.min.js"><\/script>')</script> -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="view/js/main.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="view/js/holder.min.js"></script>
  </body>
</html>