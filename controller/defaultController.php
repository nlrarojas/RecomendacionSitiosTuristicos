<?php

include_once 'model/DefaultModel.php';

class DefaultController {

    private $model;

    public function __construct() {
        //Está clase controla la comunicación con la base de datos.
        $this->model = new DefaultModel();
    }

    public function invoke() {
        if (isset($_GET['administrador'])) {
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
                $sitio=$this->model->ObtenerSitiosMer();         
                if (isset($_GET['insertar'])){
                    if (isset($_GET['insertarSitio'])){
                    $sitioInsertado = $this->model->InsertarSitio($_POST['nombreSitio'],
                                        $_POST['provinciaSitio'], 
                                        $_POST['latitudSitio'], 
                                        $_POST['longitudSitio'],
                                        $_POST['imagenSitio'],
                                        $_POST['calificacionSitio'], 
                                        $_POST['descripcionSitio'], 
                                        $_POST['duracionSitio']);
                    include 'view/administrador/indexView.php';
                    } else {
                        include 'view/administrador/insertarSitio.php';
                    }
                } elseif (isset($_GET['modificar'])){
                    if (isset($_GET['modificarSitio'])){                        
                        include 'view/administrador/indexView.php';
                    } else {
                        $sitio = $this->model->obtenerSitioPorId($_GET['idSitio']);                           
                        include 'view/administrador/modificarSitio.php';
                    }
                } elseif (isset($_GET['eliminar'])){
                    if (isset($_GET['eliminarSitio'])){
                        include 'view/administrador/indexView.php';
                    } else {
                        $sitio = $this->model->obtenerSitioPorId($_GET['idSitio']);       
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
        } else {     
            if(isset($_GET['sitiosTuristicos'])) {
                if (isset($_GET[''])){

                }
                include 'view/sitiosTuristicos.php';
            } elseif(isset($_GET['sitioEspecifico'])) {
                if (isset($_GET[''])){

                }
                include 'view/sitioEspecifico.php';

            }elseif (isset($_GET['busquedaBayes'])){
                $calificacion = $_POST['calificacion']; 
                $distancia = $_POST['distancia']; 
                $provincia = $_POST['provincia']; 
                $duracion = $_POST['duracion']; 

                $ruta = $this->model->obtenerRuta($calificacion, $duracion, $distancia, $provincia)[0];
               include 'view/busquedaBayes.php';

            } elseif(isset($_GET['ingresar'])) {
                include 'view/login.php';
            } elseif(isset($_GET['busquedaSitio'])) {
                if (isset($_GET[''])){

                }
                include 'view/busquedaSitio.php';
            } elseif(isset($_GET['login'])) {            
                if (isset($_GET['validar'])){
                    $acceso = "";
                    if (isset($_POST['usuario']) != null and isset($_POST['contrasena']) != null) {
                        $acceso=$this->model->IniciarSesion($_POST['usuario'], $_POST['contrasena']);
                        if($acceso==FALSE){
                            session_start();
                            $_SESSION['usuario'] = $_POST['usuario'] ;
                            include 'view/login.php'; 
                        } else{
                            header("Location: ?administrador");
                            die(); 
                        }   
                    } else {
                        include 'view/login.php'; 
                    }
                                       
                } else {                
                    include 'view/login.php';
                }
            } else {  
                //esto hace llegar la info a la vista y va aqui por que se carga apaenas levanta              
                $top = $this->model->topTres();
                //print_r($top);
                           
                include 'view/indexView.php';
                   
               
            }
        }
    }
}
