<?php
require_once '../modelo/class_usuario.php';
require_once '../modelo/class_plan.php';
require_once '../modelo/class_paquete.php';

class UsuariosController {
    private $usuario;
    private $plan;
    private $paquete;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->plan = new Plan();
        $this->paquete = new Paquete();
    }

    // Método para agregar un usuario
    public function agregarUsuario($nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $contraseña_usuario) {
        return $this->usuario->agregarUsuario($nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $contraseña_usuario);
    }

    // Método para listar todos los usuarios
    public function listarUsuarios() {
        // Obtener todos los usuarios
        $usuarios = $this->usuario->listarUsuarios();

        // Agregar información del plan, paquetes y costo total mensual
        foreach ($usuarios as &$usuario) {
            $id_usuario = $usuario['id_usuario'];

            // Inicializar valores predeterminados
            $usuario['plan'] = 'Sin plan';
            $usuario['paquetes'] = 'Sin paquetes';
            $usuario['costo_total_mensual'] = 0;

            // Consultar el resumen de suscripciones (tabla resumen_upp)
            $resumen = $this->usuario->obtenerResumenUsuario($id_usuario);

            if ($resumen) {
                // Obtener el plan
                $plan = $this->plan->obtenerPlanPorId($resumen['id_plan']);
                if ($plan) {
                    $usuario['plan'] = $plan['nombre_plan'];
                    $usuario['duracion_suscripcion'] = $plan['duracion_suscripcion'];
                    $usuario['precio_plan'] = $plan['precio_plan'];
                }

                // Obtener los paquetes seleccionados
                $paquetes_seleccionados = explode(',', $resumen['id_paquete']);
                $paquetes = [];
                $costo_paquetes = 0;

                foreach ($paquetes_seleccionados as $id_paquete) {
                    if (!empty($id_paquete)) {
                        $paquete = $this->paquete->obtenerPaquetePorId($id_paquete);
                        if ($paquete) {
                            $paquetes[] = $paquete['nombre_paquete'];
                            $costo_paquetes += $paquete['precio_paquete'];
                        }
                    }
                }

                $usuario['paquetes'] = implode(', ', $paquetes);
                $usuario['costo_paquetes'] = $costo_paquetes;

                // Calcular el costo total mensual
                $costo_plan = $plan['precio_plan'] ?? 0;
                if ($plan && $plan['duracion_suscripcion'] === 'Anual') {
                    $costo_plan /= 12; // Dividir el precio anual entre 12
                }
                $usuario['costo_total_mensual'] = $costo_plan + $costo_paquetes;
            }
        }

        return $usuarios;
    }

    // Método para obtener un usuario por su ID
    public function obtenerUsuarioPorId($id_usuario) {
        return $this->usuario->obtenerUsuarioPorId($id_usuario);
    }

    // Método para actualizar un usuario
    public function actualizarUsuario($id_usuario, $nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario) {
        $this->usuario->actualizarUsuario($id_usuario, $nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario);
    }

    // Método para eliminar un usuario
    public function eliminarUsuario($id_usuario, $nombre_usuario) {
        return $this->usuario->eliminarUsuario($id_usuario);
    }

    // Método para guardar el resumen de un usuario (plan y paquetes)
    public function guardarResumenUsuario($id_usuario, $id_plan, $id_paquetes) {
        return $this->usuario->guardarResumenUsuario($id_usuario, $id_plan, $id_paquetes);
    }

    // Método para eliminar el resumen de un usuario
    public function eliminarResumenUsuario($id_usuario) {
        return $this->usuario->eliminarResumenUsuario($id_usuario);
    }

    // NUEVO: Método para dar de baja a un usuario (quitar su plan)
        public function darDeBajaUsuario($id_usuario) {
            return $this->usuario->darDeBajaUsuario($id_usuario);
        }
}

// Manejo de solicitudes POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? null;
    $controller = new UsuariosController();
    switch ($action) {
        case 'agregarUsuario':
            $nombre_usuario = $_POST['nombre'];
            $apellidos_usuario = $_POST['apellido'];
            $email_usuario = $_POST['email'];
            $edad_usuario = $_POST['edad']; 
            $contraseña_usuario = $_POST['contraseña'];
            if (empty($nombre_usuario) || empty($apellidos_usuario) || empty($email_usuario) || empty($edad_usuario) || empty($contraseña_usuario)) {
                die("Error: Todos los campos son obligatorios.");
            }
            // Registrar al usuario y obtener el ID generado
            $id_usuario = $controller->agregarUsuario($nombre_usuario, $apellidos_usuario, $email_usuario, $edad_usuario, $contraseña_usuario);
            if ($id_usuario) {
                // Redirigir al usuario a seleccionar_plan.php con el ID del usuario
                header("Location: ../vistas/seleccionar_plan.php?id_usuario=" . $id_usuario);
                exit();
            } else {
                die("Error: No se pudo registrar el usuario.");
            }
            break;
        default:
            echo "Acción no válida.";
            break;
    }
}
?>