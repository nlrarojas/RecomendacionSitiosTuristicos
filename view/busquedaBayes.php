<?php include_once 'view/header.php' ?>
<!-- START THE FEATURETTES -->
<main role="main" style="padding-bottom: 5%; padding-top: 5%;">
<div class="container">
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">
    <?php if((isset($ruta))){
        echo $ruta['nombre'];
    } ?>
    <span class="text-muted"></span></h2>
    <p class="lead">
    <?php if((isset($ruta))){
        echo $ruta['descripcion'];
    } ?>
    </p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>
</div>
</main>

<?php include_once 'view/footer.php' ?>