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
                    <form action="?login&validar&gestionarSitios&insertar" method="post">
                        <button type="submit" class="btn btn-sm btn-primary btn-create">Nuevo sitio</button>
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
                        <th>Provincia</th>
                        <th>Direccion</th>
                        <th>Descripción</th>
                        <th>Calificación</th>
                    </tr> 
                    </thead>
                    <tbody>
                          <tr>
                            <td align="center">                                                                   
                              <div style="width: 150%; display: inline-block;">
                                <a href="?login&validar&gestionarSitios&&modificar" class="btn btn-outline-success" style="float: left;"><img src="view/img/edit.png"></img></a>
                                <a href="?login&validar&gestionarSitios&eliminar" class="btn btn-outline-danger" style="float: left;"><img src="view/img/delete.png"></img></a>
                              </div>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td>Playa Conchal</td>
                            <td>Guanacaste</td>
                            <td>En Guanacaste</td>
                            <td>Playa</td>
                            <td>4.3</td>
                          </tr>
                          <tr>
                            <td align="center">
                              <div style="width: 150%; display: inline-block;">
                                <a href="?login&validar&gestionarSitios&&modificar" class="btn btn-outline-success" style="float: left;"><img src="view/img/edit.png"></img></a>
                                <a href="?login&validar&gestionarSitios&eliminar" class="btn btn-outline-danger" style="float: left;"><img src="view/img/delete.png"></img></a>
                              </div>
                            </td>
                            <td class="hidden-xs">2</td>
                            <td>Bagaces</td>
                            <td>Puntarenas</td>
                            <td>En Puntarenas</td>
                            <td>Catarátas</td>
                            <td>3.7</td>
                          </tr>
                        </tbody>
                </table>            
            </div>            
            </div>
        </div>
    </div>
</div>

