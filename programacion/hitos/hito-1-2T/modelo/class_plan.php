<?php
require_once '../config/class_conexion.php';

class Plan {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    // Obtener todos los planes disponibles
    public function listarPlanes() {
        $query = "SELECT * FROM planes";
        $resultado = $this->conexion->conexion->query($query);
        $planes = [];
        while ($fila = $resultado->fetch_assoc()) {
            $planes[] = $fila;
        }
        return $planes;
    }

    // Obtener un plan por su ID
    public function obtenerPlanPorId($id_plan) {
        $query = "SELECT * FROM planes WHERE id_plan = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("i", $id_plan);
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