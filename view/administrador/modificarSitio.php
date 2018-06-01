<?php
//header
include_once 'header.php';
?>
<form action="?login&validar&gestionarSitios&modificarSitio" method="post">
    <br/><br/>
    <h1>Modificar un sitio turístico</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <div>
            <label for="lblNombre">Nombre</label>
            <input type="text" id="lblNombre" class="form-control" style="width: 40%; margin: 0 auto;" value="Playa conchal"></input>
        </div>
        <div>
            <label for="lblProvincia">Provincia</label>
            <input type="text" id="lblProvincia" class="form-control" style="width: 40%; margin: 0 auto;" value="Provincia" ></input>
        </div>
        <div>
            <label for="lblDireccion">Dirección</label>
            <input type="textarea" id="lblDireccion" class="form-control" style="width: 40%; margin: 0 auto;" value="Direccion" ></input>
        </div>
        <div>
            <label for="lblDescripcion">Decripción</label>
            <input type="textarea" id="lblDescripcion" class="form-control" style="width: 40%; margin: 0 auto;" value="Descripción"></input>
        </div>
        <div>
            <label for="lblCalificacion">Calificación</label>
            <input type="number" id="lblCalificacion" min="0" max="5" class="form-control" style="width: 40%; margin: 0 auto;" value="4.3" step=".1"></input>
        </div>
        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" value="Modificar" style="float: left;"/>
            <a class="btn btn-danger" href="?login&validar&gestionarSitios" style="float: right;">Cancelar</a>
            <br/><br/>
        </div>        
    </div>
</form>
