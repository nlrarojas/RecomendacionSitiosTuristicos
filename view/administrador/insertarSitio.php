<?php
//header
include_once 'header.php';
?>
<form action="?administrador&gestionarSitios&insertar&insertarSitio" method="post">
    <br/><br/>
    <h1>Ingresar un nuevo sitio turístico</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <div>
            <label for="nombreSitio">Nombre</label>
            <input type="text" id="nombreSitio" name="nombreSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="provinciaSitio">Provincia</label>
            <input type="text" id="provinciaSitio" name="provinciaSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="latitudSitio">Latitud</label>
            <input type="text" id="latitudSitio" name="latitudSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="longitudSitio">Longitud</label>
            <input type="text" id="longitudSitio" name="longitudSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="calificacionSitio">Calificación</label>
            <input type="number" min="0" max="5" id="calificacionSitio" name="calificacionSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="descripcionSitio">Descripción</label>
            <input type="textarea" id="descripcionSitio" name="descripcionSitio" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>
        <div>
            <label for="duracionSitio">Duración</label>
            <input type="number" id="duracionSitio" name="duracionSitio" min="1" max="3" class="form-control" style="width: 40%; margin: 0 auto;"></input>
        </div>

        <div>
            <br/>
            <div class="custom-file" id="customFile" lang="es" style="width: 60%;">
                <input type="file" class="custom-file-input" id="imagenSitio" name="imagenSitio" aria-describedby="fileHelp">
                <label class="custom-file-label" for="imagenSitio">
                Selecione la imagen...
                </label>
            </div>      
            <br/>  
        </div>

        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" value="Agregar" style="float: left;"/>
            <a class="btn btn-danger" href="?administrador&gestionarSitios" style="float: right;">Cancelar</a>
            <br/><br/>
        </div>        
    </div>
</form>
