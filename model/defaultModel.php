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

    public function obtenerSitios() {
        //Se ejecuta el procedimiento 
        $procedimiento = "call sp_obtener_nombres_sitios()";
        $query = mysqli_query($this->conn, $procedimiento);
        $sitios = array();
        //Se obtienen los datos de la base de datos y se almacenan en un arreglo
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($sitios, $data);
        }        
        return $sitios;
    }


    public function obtenerRuta($calificacion, $duracion, $distancia, $provincia){
        //Se ejecuta el procedimiento 
        $procedimiento = "call sp_bayes('$calificacion', '$duracion', '$distancia', '$provincia')";
        $query = mysqli_query($this->conn, $procedimiento);
        $ruta = array();
        //Se obtienen los datos de la base de datos y se almacenan en un arreglo
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($ruta, $data);
        }        
        $this->conn = $this->conexion->reconectar();  
        return $ruta;
    }

    public function obtenerSitiosPorRuta($idRuta){
        //Se ejecuta el procedimiento 
        $procedimiento = "call sp_obtener_sitios_por_ruta('$idRuta')";
        $query = mysqli_query($this->conn, $procedimiento);
        $sitios = array();
        //Se obtienen los datos de la base de datos y se almacenan en un arreglo
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($sitios, $data);
        }        
        return $sitios;
    }
    public function topTres(){
        //Se ejecuta el procedimiento 
        $procedimiento = "call top_tres();";
        $query = mysqli_query($this->conn, $procedimiento);
        $top = array();
        //Se obtienen los datos de la base de datos y se almacenan en un arreglo
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($top, $data);
        }      
        //mysqli_close($this->conn);
        return $top;
        
    }
}
?>