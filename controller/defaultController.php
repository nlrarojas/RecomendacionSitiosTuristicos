<?php

include_once 'model/DefaultModel.php';

class DefaultController {

    private $model;

    public function __construct() {
        //Está clase controla la comunicación con la base de datos.
        $this->model = new DefaultModel();        
    }

    public function invoke() {  
        if(isset($_GET['sitiosTuristicos'])) {
            if (isset($_GET[''])){
                
            } 
            include 'view/sitiosTuristicos.php';
        } else {            
            include 'view/indexView.php';
        }        
    }
}