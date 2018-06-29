<?php
//header
include_once 'header.php';
?>

<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="view/img/1.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Explorer CR</h1>
          <p>Realizá las búsquedas de las mejores rutas para vos.</p>
          <p><a class="btn btn-lg btn-primary" href="#formularios" role="button">Realizar búsqueda</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="view/img/3.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption text-right">
           <h1>Conocé Costa Rica</h1>
          <p>Encontrá las mejores rutas.</p>
          <p><a class="btn btn-lg btn-primary" href="#mejores-rutas" role="button">Mejores Rutas</a></p> 
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="view/img/2.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Las rutas más adecuadas a tus gustos.</h1>
          <p></p>
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <h1 class="text-center">Top 3 de las rutas</h1><br>
 <div class="container marketing">

<!-- Three columns of text below the carousel -->
<?php if((isset($top))){?>

<div class="row" id="mejores-rutas">
  <div class="col-lg-4">
    <img class="rounded-circle" src="view/img/puestoUno.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2><?php echo $top[0]['nombre'] ?></h2>
    <h6>Calificaion</h6>
    <h5> <?php echo $top[0]['Calificacion'] ?></h5>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="view/img/puestoDos.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2><?php echo $top[1]['nombre'] ?></h2>
    <h6>Calificaion</h6>
    <h5> <?php echo $top[1]['Calificacion'] ?></h5>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="view/img/puestoTres.jpg" alt="Generic placeholder image" width="140" height="140">
    <h2><?php echo $top[2]['nombre'] ?></h2>
    <h6>Calificaion</h6>
    <h5> <?php echo $top[2]['Calificacion'] ?></h5>
  </div>
</div>
<?php } ?>

<!-- START THE FEATURETTES -->


<!-- <hr class="featurette-divider">
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div> -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Búsqueda de Rutas de </br><span class="text-muted" style="color: #244d19!important;">Costa Rica.</span></h2>
  <form  action="?busquedaBayes" method="post">
  <div class="form-group">
  <label>Clasificación</label>
      <select class="form-control" name="calificacion" value="calificacion" required>
        <option selected>Selecciona...</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
  </div>
  <div class="form-group">
  <label>Distancia</label>
      <select class="form-control" name="distancia" value="distancia" required>
        <option selected>Selecciona...</option>
        <option value="1">Corta</option>
        <option value="2" >Media</option>
        <option value="3">Larga</option>
      </select>
  </div>
  <div class="form-group">
  <label>Provincia</label>
      <select class="form-control" name="provincia" value="provincia" required>
      <option selected>Selecciona...</option>
      <option value="1">San José</option>
      <option value="2">Alajuela</option>
        <option value="3">Cartago</option>
        <optionvalue="4">Heredia</option>
        <option value="5">Puntarenas</option>
        <option value="6">Guanacaste</option>
        <option value="7">Limón</option>
      </select>
  </div>
  <div class="form-group">
  <label>Duración</label>
      <select class="form-control" name="duracion" value="duracion" required>
        <option selected>Selecciona...</option>
        <option value="1">Corta</option>
        <option value="2">Media</option>
        <option value="3">Larga</option>
      </select>
  </div>
  <input type="submit" value="Realizar Búsqueda" class="btn btn-primary">
</form>
</div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="view/img/imagenMostrar.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<?php
//footer
include_once 'footer.php';
?>