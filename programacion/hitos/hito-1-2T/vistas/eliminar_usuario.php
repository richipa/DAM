<?php 
require_once '../controlador/usuarios_controller.php';
$controller = new UsuariosController();
$usuario = null;

// Comprobamos si recibimos el ID por GET para obtener los datos del usuario
if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];
    $usuario = $controller->obtenerUsuarioPorId($id_usuario);
    if (!$usuario) {
        die("Usuario no encontrado.");
    }
}

// Procesar la eliminación del usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'eliminar') {
        $controller->eliminarUsuario(
            $_POST['id'],
            $_POST['nombre'], 
        );
        header("Location: lista_usuarios.php");
        exit();
    } elseif ($_POST['action'] === 'dar_de_baja') {
        // Redirigir a dar_de_baja_usuario.php o llamar al método directamente
        header("Location: dar_de_baja_usuario.php?id=" . htmlspecialchars($usuario['id_usuario']));
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario - StreamWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #AA4A44;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            opacity: 0.8;
        }
        h3, p {
            color: white;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="card shadow-lg border-0">
        <h3 style="color: #AA4A44; font-family:monospace" class="text-center mb-4">Gestión de Usuario</h3>
        <h6 style="font-family:monospace" class="text-center mb-4"><strong>Selecciona una acción:</strong></h6>

        <!-- Formulario para eliminar al usuario -->
        <form method="POST" action="eliminar_usuario.php">
            <input type="hidden" name="action" value="eliminar">
            <div class="mb-3">
                <label style="font-family: monospace;" for="id" class="form-label">ID</label>
                <input type="number" id="id" name="id" class="form-control" value="<?php echo htmlspecialchars($usuario['id_usuario'] ?? ''); ?>" readonly required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;" for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo htmlspecialchars($usuario['nombre_usuario'] ?? ''); ?>" required>
            </div>
            <button style="font-family: monospace;" type="submit" class="btn btn-danger w-100">Eliminar</button>
        </form>

        <!-- Botón para dar de baja al usuario -->
        <form method="POST" action="dar_de_baja.php" class="mt-3">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id_usuario'] ?? ''); ?>">
            <button style="font-family: monospace;" type="submit" class="btn btn-danger w-100">Dar de baja el plan</button>
        </form>

        <!-- Volver al listado -->
        <a style="font-family: monospace;" href="lista_usuarios.php" class="btn btn-secondary w-100 mt-3">Volver al listado</a>
    </div>
</body>
</html>