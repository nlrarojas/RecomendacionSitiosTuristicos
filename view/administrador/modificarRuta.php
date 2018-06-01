<?php
//header
include_once 'header.php';
?>
<form action="?login&validar&gestionarRutas&modificarRuta" method="post">
    <br/><br/>
    <h1>Modificar una ruta turística</h1>
    <div class="form-control" style="float:left; width: 50%;">
        <br/><br/>
        <div>
            <label for="lblNombre">Nombre</label>
            <input type="text" id="lblNombre" class="form-control" style="width: 40%; margin: 0 auto;" value="Vuelta al mono"></input>
        </div>
        <div>
            <label for="lblDistancia">Distancia</label>
            <input type="text" id="lblDistancia" class="form-control" style="width: 40%; margin: 0 auto;" value="10 Km"></input>
        </div>
        <div>
            <label for="lblDuracion">Duración</label>
            <input type="textarea" id="lblDuracion" class="form-control" style="width: 40%; margin: 0 auto;" value="1 hora y 25 minutos"></input>
        </div>
        <div>
            <label for="lblPartida">Punto de partida</label>
            <input type="textarea" id="lblPartida" class="form-control" style="width: 40%; margin: 0 auto;" value="Orosi"></input>
        </div>
        <div>
            <label for="lblLlegada">Punto de llegada</label>
            <input type="text" id="lblLlegada" class="form-control" style="width: 40%; margin: 0 auto;" value="Cachí"></input>
        </div>
        <br/>
        <div style="float: center; width: 40%; display: inline-block;">
            <input type="submit" class="btn btn-primary" value="Modificar" style="float: left;"/>
            <a class="btn btn-danger" href="?login&validar&gestionarRutas" style="float: right;">Cancelar</a>
            <br/><br/>
        </div>        
    </div>
</form>
