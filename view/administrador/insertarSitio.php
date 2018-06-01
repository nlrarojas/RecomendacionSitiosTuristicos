<?php
//header
include_once 'header.php';
?>
<form action="?gestionarSitios&insertar" method="post">
    <br/><br/>
    <h1>Ingrear un nuevo sitio turístico</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <div>
            <label for="lblNombre">Nombre</label>
            <input type="text" id="lblNombre" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="lblProvincia">Provincia</label>
            <input type="text" id="lblProvincia" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="lblDireccion">Dirección</label>
            <input type="textarea" id="lblDireccion" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="lblDescripcion">Decripción</label>
            <input type="textarea" id="lblDescripcion" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="lblCalificacion">Calificación</label>
            <input type="number" id="lblCalificacion" min="0" max="5" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" text="Agregar" style="float: left;"/>
            <a class="btn btn-danger" href="?login&validar&gestionarSitios" style="float: right;">Cancelar</a>
            <br/><br/>
        </div>        
    </div>
<<<<<<< HEAD
    <div>
        <input type="submit" class="btn btn-primary" text="Agregar"/>
        <a class="btn btn-danger" href="#">Cancelar</a>
    </div>
</form>
<?php
//footer
//include_once '../footer.php';
?>
=======
</form>
>>>>>>> 51dc053b68dd6ac7d3a1c48e37aadd83cb2e5257
