<?php
require_once '../modelo/class_tareas.php';
require_once '../config/class_conexion.php';

class TareasController { 
    private $tarea;

    public function __construct() {
        $this->tarea = new Tarea();
    }

    // Método para agregar una tarea
    public function agregarTarea($titulo, $descripcion, $id_usuario) {
        $estado = 'pendiente'; // Estado predeterminado
        $this->tarea->agregarTarea($titulo, $descripcion, $id_usuario);
        header('Location: ../vistas/tareas.php');
        exit();
    }

    // Método para obtener las tareas de un usuario
    public function listarTareas($id_usuario) {
        return $this->tarea->obtenerTareasPorUsuario($id_usuario);
    }

    // Método para marcar una tarea como completada
    public function completarTarea($id_tarea) {
        header('Location: ../vistas/tareas.php');
        return $this->tarea->completarTarea($id_tarea);
    }

    // Método para eliminar una tarea
    public function eliminarTarea($id_tarea) {
        header('Location: ../vistas/tareas.php');
        return $this->tarea->eliminarTarea($id_tarea);
    }
}
// Procesar las acciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new TareasController();

    if ($_POST['accion'] == 'agregarTarea') {
        $controller->agregarTarea(
            $_POST['titulo'],
            $_POST['descripcion'],
            $_POST['id_usuario']
        );
    } elseif ($_POST['accion'] == 'completarTarea') {
        $controller->completarTarea($_POST['id_tarea']);
    } elseif ($_POST['accion'] == 'eliminarTarea') {
        $controller->eliminarTarea($_POST['id_tarea']);
    }
}
?>
