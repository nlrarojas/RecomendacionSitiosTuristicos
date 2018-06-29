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

    public function ObtenerSitios(){

        $query = "";

        $query = mysqli_query($this->conn, "call sp_obtener_sitio('')");

        return $query;
    }
}
?>