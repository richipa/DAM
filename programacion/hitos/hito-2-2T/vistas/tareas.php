<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id'])) {
    header('Location: ../vistas/login_usuario.php');
    exit();
}

// Obtén el ID del usuario de la sesión
$id_usuario = $_SESSION['id'];

// Incluye el controlador y obtén las tareas
include "../controlador/TareasController.php";
$tareasController = new TareasController();
$tareas = $tareasController->listarTareas($id_usuario);

// Obtén el nombre del usuario desde la base de datos (para mostrar en la interfaz)
include "../modelo/class_usuario.php";
$usuarioModelo = new Usuario();
$conexion = new Conexion();
$sentencia = $conexion->conexion->prepare("SELECT nombre FROM usuarios WHERE id = ? ");
$sentencia->bind_param("i", $id_usuario);
$sentencia->execute();
$resultado = $sentencia->get_result();
$usuario = $resultado->fetch_assoc();
$nombre_usuario = $usuario['nombre'] ?? 'Usuario'; // Si no se encuentra el nombre, usa "Usuario"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <title>Panel de Usuario</title>
    <style>
        body {
            background-color: rgb(255, 179, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .panel-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .btn-custom {
            background-color: #5f81ff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #4a6ddf;
        }
    </style>
</head>
<body>
    <div class="panel-container">
        <!-- Muestra el nombre del usuario para saber quien está accediendo -->
        <h2 style="font-family: monospace;">Tus Tareas, <?php echo htmlspecialchars($nombre_usuario); ?></h2>

        <!-- Botón para cerrar sesión -->
        <a href="../logout.php" class="btn btn-danger mb-3">Cerrar sesión</a>

        <!-- Formulario para agregar una nueva tarea -->
        <form action="../controlador/TareasController.php" method="POST" class="mb-3">
            <input type="hidden" name="accion" value="agregarTarea">
            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <div class="mb-2">
                <input type="text" name="titulo" class="form-control" placeholder="Título" required>
            </div>
            <div class="mb-2">
                <textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>
            </div>
            <button type="submit" class="btn btn-warning w-100">Agregar Tarea</button>
        </form>

        <!-- Lista de tareas -->
        <?php if (empty($tareas)): ?>
            <p>No tienes tareas registradas.</p>
        <?php else: ?>
            <ul class="list-group">
                <?php foreach ($tareas as $tarea): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <?php echo htmlspecialchars($tarea['titulo']); ?> - 
                            <?php echo htmlspecialchars($tarea['descripcion']); ?> 
                            (<?php echo $tarea['estado']; ?>)
                        </span>
                        <div style="display: flex; gap: 5px;">
                            <!-- Botón para marcar como completada -->
                            <form action="../controlador/TareasController.php" method="POST" style="display:inline;">
                                <input type="hidden" name="accion" value="completarTarea">
                                <input type="hidden" name="id_tarea" value="<?php echo $tarea['id']; ?>">
                                <button type="submit" class="btn btn-success btn-sm">Completada</button>
                            </form>

                            <!-- Botón para eliminar -->
                            <form action="../controlador/TareasController.php" method="POST" style="display:inline;">
                                <input type="hidden" name="accion" value="eliminarTarea">
                                <input type="hidden" name="id_tarea" value="<?php echo $tarea['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>