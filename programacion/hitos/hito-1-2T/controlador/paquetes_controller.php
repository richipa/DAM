<?php
require_once '../modelo/class_paquete.php';

class PaquetesController {
    private $paquete;

    public function __construct() {
        $this->paquete = new Paquete();
    }

    // Listar todos los paquetes
    public function listarPaquetes() {
        return $this->paquete->listarPaquetes();
    }

    // Obtener un paquete por su ID
    public function obtenerPaquetePorId($id_paquete) {
        return $this->paquete->obtenerPaquetePorId($id_paquete);
    }
}
?>