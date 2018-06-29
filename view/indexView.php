<?php
//header
include_once 'header.php';
?>

 <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
 <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row" id="mejores-rutas">
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  </div>
</div>


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
  <form>
  <div class="form-group">
  <label>Clasificación</label>
      <select class="form-control">
        <option selected>Selecciona...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
  </div>
  <div class="form-group">
  <label>Distancia</label>
      <select class="form-control">
        <option selected>Selecciona...</option>
        <option>Corta</option>
        <option>Media</option>
        <option>Larga</option>
      </select>
  </div>
  <div class="form-group">
  <label>Provincia</label>
      <select class="form-control">
      <option selected>Selecciona...</option>
        <option>Cartago</option>
        <option>Heredia</option>
        <option>Limón</option>
        <option>Puntarenas</option>
        <option>San José</option>
        <option>Guanacaste</option>
        <option>Alajuela</option>
      </select>
  </div>
  <div class="form-group">
  <label>Duración</label>
      <select class="form-control">
        <option selected>Selecciona...</option>
        <option>Corta</option>
        <option>Media</option>
        <option>Larga</option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Realizar Búsqueda</button>
</form>
</div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<?php
//footer
include_once 'footer.php';
?>