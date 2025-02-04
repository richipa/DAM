<?php
require_once '../modelo/class_plan.php';

class PlanesController {
    private $plan;

    public function __construct() {
        $this->plan = new Plan();
    }

    // Listar todos los planes
    public function listarPlanes() {
        return $this->plan->listarPlanes();
    }

    // Obtener un plan por su ID
    public function obtenerPlanPorId($id_plan) {
        return $this->plan->obtenerPlanPorId($id_plan);
    }
}
?>