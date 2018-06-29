<?php
// $conn = new mysqli('163.178.173.144', 'multi-paraiso', 'multimedios.rp.2017', 'DB_EXPLORER_CR');

// if($conn->connect_error) {
//   echo $error->$conn->connect_error;
// }
// $calificacion = $_POST['calificacion']; 
// $distancia = $_POST['distancia']; 
// $provincia = $_POST['provincia']; 
// $duracion = $_POST['duracion']; 

// $sp = "call sp_bayes('$calificacion', '$duracion', '$distancia', '$provincia')";

// $resultado = $conn->query($sp);


//  while($resultados = $resultado->fetch_assoc()) {
//     if($resultados['recinto']=='Paraiso'){
//         $promedio_paraiso = $resultados['promedio'];
//     }else{
        
//         $promedio_turrialba = $resultados['promedio'];
//     }
//  }



//  $resultado=$recinto;
//  echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($resultado) . '</div>';

//  $conn->close();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Explorer CR</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-green">
        <a class="navbar-brand" id="scroll" href="#">Explorer CR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" id="scroll" href="#mejores-rutas">Mejores Rutas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="scroll" href="#formularios">Búsqueda de Rutas Turísticas</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


<!-- START THE FEATURETTES -->
<main role="main" style="padding-bottom: 5%; padding-top: 5%;">
<div class="container">
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>
</div>
</main>

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Ir al inicio</a></p>
        <p>&copy; Explorer CR, 2018. &middot; <a href="#">Derechos</a> &middot; <a href="#">Reservados</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="view/js/jquery-slim.min.js"><\/script>')</script> -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>