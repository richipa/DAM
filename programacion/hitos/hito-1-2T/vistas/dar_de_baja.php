<?php
require_once '../controlador/usuarios_controller.php';

// Iniciamos la sesión para poder usar variables de sesión y almacenar mensajes temporales
session_start();

// Verificamos si la solicitud es de tipo POST y si se ha enviado un ID de usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    // Obtenemos el ID del usuario a dar de baja desde los datos enviados por POST
    $id_usuario = $_POST['id'];

    // Llamamos al método "darDeBajaUsuario" del controlador pasándole el ID del usuario
    if ($controller->darDeBajaUsuario($id_usuario)) {
        // Si la operación fue exitosa, guardamos un mensaje de éxito en la variable de sesión
        $_SESSION['success_message'] = "El plan ha sido dado de baja correctamente.";
    } else {
        // Si ocurrió un error, guardamos un mensaje de error en la variable de sesión
        $_SESSION['error_message'] = "No se pudo dar de baja al plan.";
    }
}

header("Location: lista_usuarios.php");

exit();
?>