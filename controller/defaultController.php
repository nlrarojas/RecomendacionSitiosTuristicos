<?php

include_once 'model/DefaultModel.php';

class DefaultController {

    private $model;

    public function __construct() {
        //Está clase controla la comunicación con la base de datos.
        $this->model = new DefaultModel();        
    }

    public function invoke() {  
        if(isset($_GET[''])) {
            if (isset($_GET[''])){
                
            } 
        } 
        elseif(isset($_GET['busquedaSitio'])) {
            if (isset($_GET[''])){
                
            } 
            include 'view/busquedaSitio.php';
        }
        else {            
            include 'view/indexView.php';
            
        } 
        
    }
}