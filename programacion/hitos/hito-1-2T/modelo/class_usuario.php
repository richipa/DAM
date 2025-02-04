<?php
require_once '../config/class_conexion.php';

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarUsuario($nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $contraseña_usuario) {
        $query = "INSERT INTO usuarios (nombre_usuario, apellidos_usuario, email_usuario, edad_usuario, contraseña_usuario) VALUES (?, ?, ?, ?, ?)";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("sssis", $nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $contraseña_usuario);

        if ($sentencia->execute()) {
            return $this->conexion->conexion->insert_id;
        } else {
            echo "Error al realizar el registro: " . $sentencia->error;
            return null;
        }

        $sentencia->close();
    }

    public function listarUsuarios() {
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->conexion->query($query);

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    public function obtenerUsuarioPorId($id_usuario) {
        $query = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("i", $id_usuario);
        $sentencia->execute();
        $resultado = $sentencia->get_result();

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }

        $sentencia->close();
    }
    // Actualiza los datos del usuario
    public function actualizarUsuario($id_usuario, $nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario) {
        $query = "UPDATE usuarios SET nombre_usuario = ?, apellidos_usuario = ?, email_usuario = ?, edad_usuario = ? WHERE id_usuario = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("sssii", $nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $id_usuario);

        if ($sentencia->execute()) {
            return true;
        } else {
            echo "Error al actualizar el usuario: " . $sentencia->error;
            return false;
        }

        $sentencia->close();
    }
    // Elimina un usuario
    public function eliminarUsuario($id_usuario) {
        // Primero, eliminar los registros relacionados en la tabla usuario_paquetes
        $query_eliminar_paquetes = "DELETE FROM usuario_paquetes WHERE id_usuario = ?";
        $sentencia_eliminar_paquetes = $this->conexion->conexion->prepare($query_eliminar_paquetes);
        $sentencia_eliminar_paquetes->bind_param("i", $id_usuario);
    
        if (!$sentencia_eliminar_paquetes->execute()) {
            echo "Error al eliminar los paquetes asociados: " . $sentencia_eliminar_paquetes->error;
            return false;
        }
    
        // Luego, eliminar el usuario de la tabla usuarios
        $query_eliminar_usuario = "DELETE FROM usuarios WHERE id_usuario = ?";
        $sentencia_eliminar_usuario = $this->conexion->conexion->prepare($query_eliminar_usuario);
        $sentencia_eliminar_usuario->bind_param("i", $id_usuario);
    
        if ($sentencia_eliminar_usuario->execute()) {
            return true;
        } else {
            echo "Error al eliminar el usuario: " . $sentencia_eliminar_usuario->error;
            return false;
        }
    
        $sentencia_eliminar_paquetes->close();
        $sentencia_eliminar_usuario->close();
    }
    
    public function obtenerUsuarioPorEmail($email_usuario) {
        $query = "SELECT * FROM usuarios WHERE email_usuario = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("s", $email_usuario);
        $sentencia->execute();
        $resultado = $sentencia->get_result();

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }

        $sentencia->close();
    }

    // Nuevo método para obtener el resumen de suscripciones de un usuario
    public function obtenerResumenUsuario($id_usuario) {
        $query = "SELECT * FROM resumen_upp WHERE id_usuario = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("i", $id_usuario);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
    
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    
        $sentencia->close();
    }
    public function guardarResumenUsuario($id_usuario, $id_plan, $id_paquete) {
        // Insertar el plan en la tabla resumen_upp
        $query_resumen = "INSERT INTO resumen_upp (id_usuario, id_plan, id_paquete) VALUES (?, ?, ?)";
        $sentencia_resumen = $this->conexion->conexion->prepare($query_resumen);
        $sentencia_resumen->bind_param("iii", $id_usuario, $id_plan, $id_paquete);
    
        if (!$sentencia_resumen->execute()) {
            echo "Error al guardar el resumen: " . $sentencia_resumen->error;
            return false;
        }
    
        // Insertar los paquetes en la tabla usuario_paquetes
        if (!empty($id_paquetes)) {
            $query_paquetes = "INSERT INTO usuario_paquetes (id_usuario, id_paquete) VALUES (?, ?)";
            $sentencia_paquetes = $this->conexion->conexion->prepare($query_paquetes);
    
            foreach ($id_paquetes as $id_paquete) {
                $sentencia_paquetes->bind_param("ii", $id_usuario, $id_paquete);
                if (!$sentencia_paquetes->execute()) {
                    echo "Error al guardar los paquetes: " . $sentencia_paquetes->error;
                    return false;
                }
            }
        }
    
        return true;
    }
    public function eliminarResumenUsuario($id_usuario) {
        $query = "DELETE FROM resumen_upp WHERE id_usuario = ?";
        $sentencia = $this->conexion->conexion->prepare($query);
        $sentencia->bind_param("i", $id_usuario);
    
        if ($sentencia->execute()) {
            return true;
        } else {
            echo "Error al eliminar el resumen: " . $sentencia->error;
            return false;
        }
    
        $sentencia->close();
    }
    public function darDeBajaUsuario($id_usuario) {
        // Consulta SQL para actualizar el campo 'id_plan' y 'id_paquete' a NULL
        $query = "UPDATE resumen_upp SET id_plan = NULL, id_paquete = NULL WHERE id_usuario = ?";
        
        // Preparar la consulta
        $sentencia = $this->conexion->conexion->prepare($query);
        
        if ($sentencia) {
            // Vincular parámetros y ejecutar la consulta
            $sentencia->bind_param("i", $id_usuario);
            $sentencia->execute();
            
            // Verificar si la actualización fue exitosa
            if ($sentencia->affected_rows > 0) {
                return true; // Éxito
            } else {
                echo "No se encontró ningún usuario con el ID proporcionado.";
                return false;
            }
        } else {
            echo "Error al preparar la consulta: " . $this->conexion->conexion->error;
            return false;
        }
    
        // Cerrar la sentencia
        $sentencia->close();
    }
    
}
?>