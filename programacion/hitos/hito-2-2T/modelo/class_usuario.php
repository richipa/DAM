<?php
require_once '../config/class_conexion.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->conexion;
    }

    // Agregar un nuevo usuario
    public function agregarUsuario($nombre, $email, $contraseña) {
        $query = "INSERT INTO usuarios (nombre, email, contraseña) VALUES (?, ?, ?)";
        $sentencia = $this->conexion->prepare($query);
        $sentencia->bind_param("sss", $nombre, $email, password_hash($contraseña, PASSWORD_BCRYPT));
        return $sentencia->execute();
    }

    // Iniciar sesión
    public function iniciarSesion($email, $contraseña) {
        $query = "SELECT id, contraseña FROM usuarios WHERE email = ?";
        $sentencia = $this->conexion->prepare($query);
        $sentencia->bind_param("s", $email);
        $sentencia->execute();
        $sentencia->store_result();
        $sentencia->bind_result($id, $contraseña_cifrada);
        $sentencia->fetch();

        if ($sentencia->num_rows > 0 && password_verify($contraseña, $contraseña_cifrada)) {
            return $id; // Devuelve el ID del usuario si las credenciales son válidas
        }
        return false; // Retorna falso si las credenciales son incorrectas
    }
}
?>