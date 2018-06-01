<?php
//header
include_once 'header.php';
?>
<form action="?login&validar&gestionarRutas&eliminarRuta" method="post">
    <br/><br/>
    <h1>Eliminar una ruta turística</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <div>
            <label for="lblNombre">Nombre</label>
            <input type="text" id="lblNombre" class="form-control" style="width: 40%; margin: 0 auto;" value="Vuelta al mono" readonly="true"></input>
        </div>
        <div>
            <label for="lblDistancia">Distancia</label>
            <input type="text" id="lblDistancia" class="form-control" style="width: 40%; margin: 0 auto;" value="10 Km" readonly="true"></input>
        </div>
        <div>
            <label for="lblDuracion">Duración</label>
            <input type="textarea" id="lblDuracion" class="form-control" style="width: 40%; margin: 0 auto;" value="1 hora y 25 minutos" readonly="true"></input>
        </div>
        <div>
            <label for="lblPartida">Punto de partida</label>
            <input type="textarea" id="lblPartida" class="form-control" style="width: 40%; margin: 0 auto;" value="Orosi" readonly="true"></input>
        </div>
        <div>
            <label for="lblLlegada">Punto de llegada</label>
            <input type="text" id="lblLlegada" class="form-control" style="width: 40%; margin: 0 auto;" value="Cachí" readonly="true"></input>
        </div>
        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" value="Eliminar" style="float: left;"/>
            <a class="btn btn-danger" href="?login&validar&gestionarRutas" style="float: right;">Cancelar</a>
            <br/><br/>
        </div>        
    </div>
</form>
