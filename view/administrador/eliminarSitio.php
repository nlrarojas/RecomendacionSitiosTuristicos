<?php
//header
include_once 'header.php';
?>
<form action="?login&validar&gestionarSitios&eliminarSitio" method="post">
    <br/><br/>
    <h1>Eliminar un sitio turístico</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <?php if (isset($sitio)) { ?>
        <div>
            <label for="lblNombre"> </label>
            <input type="text" id="lblNombre" class="form-control" style="width: 40%; margin: 0 auto;" value="<?php echo $sitio[0]['nombre'];?>"></input>
        </div>
        <div>
            <label for="lblProvincia">Provincia</label>
            <input type="text" id="lblProvincia" class="form-control" style="width: 40%; margin: 0 auto;" value="<?php echo $sitio[0]['provincia'];?>" ></input>
        </div>
        <div>
            <label for="lblDireccion">Dirección</label>
            <input type="textarea" id="lblDireccion" class="form-control" style="width: 40%; margin: 0 auto;" value="<?php echo $sitio[0]['direcion'];?>" ></input>
        </div>
        <div>
            <label for="lblDescripcion">Decripción</label>
            <input type="textarea" id="lblDescripcion" class="form-control" style="width: 40%; margin: 0 auto;" value="<?php echo $sitio[0]['descripcion'];?>"></input>
        </div>
        <div>
            <label for="lblCalificacion">Calificación</label>
            <input type="number" id="lblCalificacion" min="0" max="5" class="form-control" style="width: 40%; margin: 0 auto;" value="<?php echo $sitio[0]['calificacion'];?>" step=".1"></input>
        </div>
        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" value="Eliminar" style="float: left;"/>
            <a class="btn btn-danger" href="?login&validar&gestionarSitios" style="float: right;">Cancelar</a>
            <br/><br/>
        </div> 
        <?php } ?>       
    </div>
</form>