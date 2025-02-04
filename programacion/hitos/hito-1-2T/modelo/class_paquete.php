<?php
require_once '../config/class_conexion.php';

class Paquete {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    // Obtener todos los paquetes disponibles
    public function listarPaquetes() {
        $query = "SELECT * FROM paquetes";
        $resultado = $this->conexion->conexion->query($query);
        $paquetes = [];
        while ($fila = $resultado->fetch_assoc()) {
            $paquetes[] = $fila;
        }
        return $paquetes;
    }

    // Obtener un paquete por su ID
    public function obtenerPaquetePorId($id_paquete) {
        $query = "SELECT * FROM paquetes WHERE id_paquete = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("i", $id_paquete);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
    
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    
        $sentencia->close();
    }
}
?>