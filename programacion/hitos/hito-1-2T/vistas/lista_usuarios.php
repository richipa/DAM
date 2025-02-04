<?php
require_once '../controlador/usuarios_controller.php';
$controller = new UsuariosController();
$usuarios = $controller->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios - StreamWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5f81ff;
            color: white;
            font-family: monospace;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: white;
            border-radius: 10px;
            opacity: 0.9;
        }
        .btn {
            font-family: monospace;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Usuarios Registrados</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido/s</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Contraseña</th>
                    <th>Plan</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td class="text-center"><?= htmlspecialchars($usuario['id_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['nombre_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['apellidos_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['email_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['edad_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['contraseña_usuario']) ?></td>
        <td><?= htmlspecialchars($usuario['plan']) ?></td>

        <td>
            <a href="editar_usuario.php?id=<?= htmlspecialchars($usuario['id_usuario']) ?>" class="btn btn-outline-dark btn-sm">Editar</a>
            <a href="eliminar_usuario.php?id=<?= htmlspecialchars($usuario['id_usuario']) ?>" class="btn btn-outline-danger btn-sm">Eliminar</a>
        </td>
    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
        <a href="alta_usuario.php" class="btn btn-outline-light btn-sm d-block text-center mt-3">Añadir / Registrar nuevo usuario</a>
        <a href="../index.php" class="btn btn-outline-light btn-sm d-block text-center mt-3">Volver a la página principal</a>      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>