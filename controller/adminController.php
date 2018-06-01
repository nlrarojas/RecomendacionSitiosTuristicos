<?php

include_once 'model/AdminModel.php';

class AdminController {

    private $model;

    public function __construct() {
        //Está clase controla la comunicación con la base de datos.
        $this->model = new AdminModel();        
    }

    public function invoke() {  
        if(isset($_GET['gestionarRutas'])) {
            if (isset($_GET['insertar'])){
                include 'view/administrador/insertarRuta.php';
            } elseif (isset($_GET['modificar'])){
                include 'view/administrador/modificarRuta.php';
            } elseif (isset($_GET['eliminar'])){
                include 'view/administrador/eliminarRuta.php';
            } else {
                include 'view/administrador/verRutasTuristicas.php';
            }
        } elseif(isset($_GET['gestionarSitios'])) {            
            if (isset($_GET['insertar'])){
                include 'view/administrador/insertarSitio.php';
            } elseif (isset($_GET['modificar'])){
                if (isset($_GET['modificarSitio'])){
                    include 'view/administrador/indexView.php';
                } else {
                    include 'view/administrador/modificarSitio.php';
                }
            } elseif (isset($_GET['eliminar'])){
                if (isset($_GET['eliminarSitio'])){
                    include 'view/administrador/indexView.php';
                } else {
                    include 'view/administrador/eliminarSitio.php';
                }
            } else {
                include 'view/administrador/verSitios.php';
            }
        } elseif(isset($_GET['cerrar'])) {            
            if (isset($_GET[''])){
                
            } 
            include '../../index.php';
        } else {            
            include 'view/administrador/indexView.php';
        }            
    }
}