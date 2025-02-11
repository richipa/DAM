<?php
require_once '../modelo/class_usuario.php';
require_once '../config/class_conexion.php';

class UsuariosController {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    // Función para registrar usuarios
    public function registrarUsuario($nombre, $email, $contraseña) {
        if ($this->usuario->agregarUsuario($nombre, $email, $contraseña)) {
            header('Location: ../vistas/login_usuario.php');
            exit();
        } else {
            echo "Error al registrar el usuario";
        }
    }

    // Función para iniciar sesión
    public function loginUsuario($email, $contraseña) {
        $id_usuario = $this->usuario->iniciarSesion($email, $contraseña);
        if ($id_usuario) {
            session_start();
            $_SESSION['id'] = $id_usuario; // Guarda el ID del usuario en la sesión
            header('Location: ../vistas/tareas.php'); // Redirige al panel de tareas
            exit();
        } else {
            echo "Error al iniciar sesión";
        }
    }
}

// Procesar las acciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new UsuariosController();

    if ($_POST['accion'] == 'registrarUsuario') {
        $controller->registrarUsuario(
            $_POST['nombre'],
            $_POST['email'],
            $_POST['contraseña']
        );
    } elseif ($_POST['accion'] == 'loginUsuario') {
        $controller->loginUsuario(
            $_POST['email'],
            $_POST['contraseña']
        );
    }
}
?>