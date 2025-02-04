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

// Procesar formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->actualizarUsuario(
        $_POST['id'],
        $_POST['nombre'], 
        $_POST['apellido'], 
        $_POST['email'], 
        $_POST['edad']
    );
    header("Location: lista_usuarios.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario - StreamWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5f81ff;
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
        <h3 style="color: #5f81ff" class="text-center mb-4">Editar Usuario</h3>
        <form method="POST" action="editar_usuario.php">
            <div class="mb-3">
                <label style="font-family: monospace;" for="id" class="form-label">ID</label>
                <input type="number" id="id" name="id" class="form-control" value="<?php echo htmlspecialchars($usuario['id_usuario'] ?? ''); ?>" readonly required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;"  for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo htmlspecialchars($usuario['nombre_usuario'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;"  for="apellido" class="form-label">Apellidos</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="<?php echo htmlspecialchars($usuario['apellidos_usuario'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;"  for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($usuario['email_usuario'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;"  for="edad" class="form-label">Edad</label>
                <input type="text" id="edad" name="edad" class="form-control" value="<?php echo htmlspecialchars($usuario['edad_usuario'] ?? ''); ?>" required>
            </div>
            <button style="font-family: monospace;"  type="submit" class="btn btn-success w-100">Guardar</button>
        </form>
        <a style="font-family: monospace;" href="seleccionar_plan.php?id_usuario=<?= htmlspecialchars($usuario['id_usuario']); ?>" class="btn btn-secondary w-100 mt-3">Modificar Plan</a>
        <a style="font-family: monospace;"  href="lista_usuarios.php" class="btn btn-secondary w-100 mt-3">Volver al listado</a>
    </div>
</body>
</html>
