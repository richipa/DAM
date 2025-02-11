<?php
require_once '../config/class_conexion.php';

class Tarea {
    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->conexion;
    }

    // Agregar una tarea
    public function agregarTarea($titulo, $descripcion, $id_usuario) {
        $estado = 'pendiente'; // Estado predeterminado
        $query = "INSERT INTO tareas (titulo, descripcion, estado, id_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sssi", $titulo, $descripcion, $estado, $id_usuario);
        return $stmt->execute();
    }

    // Obtener tareas de un usuario
    public function obtenerTareasPorUsuario($id_usuario) {
        $query = "SELECT id, titulo, descripcion, estado FROM tareas WHERE id_usuario = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //  Marcar tarea como completada
    public function completarTarea($id_tarea) {
        $query = "UPDATE tareas SET estado = 'completada' WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id_tarea);
        return $stmt->execute();
    }

    //  Eliminar tarea
    public function eliminarTarea($id_tarea) {
        $query = "DELETE FROM tareas WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id_tarea);
        return $stmt->execute();
    }
}

?>
