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

    public function IniciarSesion($usuario,$contrasena) {
        $query = "";

        $query = mysqli_query($this->conn, "call sp_inicio_sesion('" . $usuario . "','" . $contrasena . "')") or die("se cayo en iniciar sesion");
        while ($sesion = $query->fetch_array(MYSQLI_BOTH)) {
            return TRUE;
        }//while
        return FALSE;
    }//IniciarSesion

    public function InsertarSitio($nombreSitio, $provinciaSitio, $latitudSitio, $longitudSitio, $imagenSitio, $calificacionSitio, $descripcionSitio, $duracionSitio){
        $query = "";

        $query = mysqli_query($this->conn, "call sp_insertar_sitio('$nombreSitio', '$provinciaSitio', '$latitudSitio', '$longitudSitio', '$imagenSitio', '$calificacionSitio', '$descripcionSitio', '$duracionSitio')") or die ("NO FUNCIONOOO");
             
        if ($query) {
            return "Se inserto de manera correcta el sitio";
        } else {
            return "El sitio no se pudo insertar exitosamente";
        }
    }//Insertar

    public function ObtenerSitiosMer(){

        $query = "";

        $query = mysqli_query($this->conn, "call sp_obtener_sitio()");

        return $query;
    }

    public function obtenerSitioPorId($id) {        
        $result = array();                
        $this->conn = $this->conexion->reconectar();
        $procedimiento = "call sp_sitio_id('$id')";
        
        $query = mysqli_query($this->conn, $procedimiento);
        
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($result, $data);                     
        }            
        return $result;
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
        $procedimiento = "call sp_bayes(1, 2, 2, 1)";
        $query = mysqli_query($this->conn, $procedimiento);
        $ruta = array();
        //Se obtienen los datos de la base de datos y se almacenan en un arreglo
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($ruta, $data);
        }        
        return $ruta;
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