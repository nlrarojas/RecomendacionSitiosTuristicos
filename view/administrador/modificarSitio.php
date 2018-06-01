<?php
//header
include_once 'header.php';
?>
<form action="?gestionarSitios&modificarSitio" method="post">
    <div style="float:left; width: 40%;">
        <div>
            <label for="lblNombre">Nombre</label>
            <input type="text" id="lblNombre" class="form-control"></input>
        </div>
        <div>
            <label for="lblProvincia">Provincia</label>
            <input type="text" id="lblProvincia" class="form-control"></input>
        </div>
        <div>
            <label for="lblDireccion">Dirección</label>
            <input type="textarea" id="lblDireccion" class="form-control"></input>
        </div>
        <div>
            <label for="lblDescripcion">Decripción</label>
            <input type="textarea" id="lblDescripcion" class="form-control"></input>
        </div>
        <div>
            <label for="lblCalificacion">Calificación</label>
            <input type="number" id="lblCalificacion" min="0" max="5" class="form-control"></input>
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-primary" text="Agregar"/>
        <a class="btn btn-danger" href="#">Cancelar</a>
    </div>
</form>
<?php
//footer
include_once '../footer.php';
?>