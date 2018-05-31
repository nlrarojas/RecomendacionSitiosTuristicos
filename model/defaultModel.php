<?php

require_once 'utility/ConexionDB.php';

class DefaultModel {

    private $conn;
    private $conexion;

    public function __construct() {      
        //Se obtienen los datos del servidor de base de datos
        $this->conexion = new ConexionDB();        
        //Se establece la conexión con la base de datos
        $this->conn = $this->conexion->conectar();                
    }
}
?>