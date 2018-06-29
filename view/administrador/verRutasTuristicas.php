<?php
//header
include_once 'header.php';
?>
<style>
    .panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}
</style>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Gestionar sitios</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <form action="?administrador&gestionarRutas&insertar" method="post">
                        <button type="submit" class="btn btn-sm btn-primary btn-create">Nueva ruta</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Acciones</th>
                        <th class="hidden-xs">ID</th>                        
                        <th>Nombre</th>
                        <th>Distancia</th>
                        <th>Duración</th>
                        <th>Punto de partida</th>
                        <th>Punto de llegada</th>
                    </tr> 
                    </thead>
                    <tbody>
                          <tr>
                            <td align="center">
                                <div style="display: inline-block;">                                                                        
                                    <div style="width: 150%; display: inline-block;">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver ruta" href="?login&validar&gestionarRutas&&ver" class="btn btn-outline-primary" style="float: left;"><img src="view/img/check.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Asignar ruta" href="?login&validar&gestionarRutas&&asignar" class="btn btn-outline-info" style="float: left;"><img src="view/img/add.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Modificar ruta" href="?login&validar&gestionarRutas&&modificar" class="btn btn-outline-success" style="float: left;"><img src="view/img/edit.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Eliminar ruta" href="?login&validar&gestionarRutas&eliminar" class="btn btn-outline-danger" style="float: left;"><img src="view/img/delete.png"></img></a>
                                    </div>                                    
                                </div>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td>Vuelta al mono</td>
                            <td>10 Km</td>
                            <td>1 hora y 25 minutos</td>
                            <td>Orosi</td>
                            <td>Cachí</td>
                          </tr>
                          <tr>
                            <td align="center">
                                <div style="display: inline-block;">                                                                        
                                    <div style="width: 150%; display: inline-block;">
                                    <a data-toggle="tooltip" data-placement="top" title="Ver ruta" href="?administrador&gestionarRutas&&ver" class="btn btn-outline-primary" style="float: left;"><img src="view/img/check.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Asignar ruta" href="?administrador&gestionarRutas&&asignar" class="btn btn-outline-info" style="float: left;"><img src="view/img/add.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Modificar ruta" href="?administrador&gestionarRutas&&modificar" class="btn btn-outline-success" style="float: left;"><img src="view/img/edit.png"></img></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Eliminar ruta" href="?administrador&gestionarRutas&eliminar" class="btn btn-outline-danger" style="float: left;"><img src="view/img/delete.png"></img></a>
                                    </div>
                                </div>
                            </td>
                            <td> <hidden>2</hidden></td>
                            <td>Conquistadores</td>
                            <td>25 KM</td>
                            <td>5 horas</td>
                            <td>Cartago</td>
                            <td>Turrialba</td>
                          </tr>
                        </tbody>
                </table>            
            </div>            
            </div>
        </div>
    </div>
</div>

