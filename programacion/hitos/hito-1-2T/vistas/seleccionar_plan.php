<?php
require_once '../controlador/planes_controller.php';
require_once '../controlador/paquetes_controller.php';
require_once '../controlador/usuarios_controller.php';

// Obtener el ID del usuario desde la URL
$id_usuario = $_GET['id_usuario'] ?? null;

if (!$id_usuario) {
    die("Error: No se proporcionó un ID de usuario válido.");
}

// Instanciar controladores
$planesController = new PlanesController();
$paquetesController = new PaquetesController();
$usuariosController = new UsuariosController();

// Obtener datos del usuario
$usuario = $usuariosController->obtenerUsuarioPorId($id_usuario);

if (!$usuario) {
    die("Error: No se encontró ningún usuario con el ID proporcionado.");
}

// Obtener listas de planes y paquetes
$planes = $planesController->listarPlanes();
$paquetes = $paquetesController->listarPaquetes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Plan - StreamWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5f81ff;
            font-family: 'Arial', sans-serif;
        }
        .vertical-cards-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
            opacity: 0.9;
        }
        h1, h2, h3 {
            color: black;
            font-family: monospace;
        }
        label {
            color: black;
            font-family: monospace;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container vertical-cards-container">
        <h2 style="font-family: monospace; color: white">Bienvenido, <?php echo htmlspecialchars($usuario['nombre_usuario']); ?>!</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <form action="costo_y_restricciones.php" method="POST">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
                    <h3>Planes Disponibles</h3>
                    <?php foreach ($planes as $plan): ?>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="plan_id" value="<?php echo $plan['id_plan']; ?>" required>
                            <label class="form-check-label">
                                <?php echo $plan['nombre_plan'] . " - $" . $plan['precio_plan'] . " (" . $plan['duracion_suscripcion'] . ")"; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>

                    <h3>Paquetes Adicionales</h3>
                    <?php foreach ($paquetes as $paquete): ?>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="paquetes[]" value="<?php echo $paquete['id_paquete']; ?>">
                            <label class="form-check-label">
                                <?php echo $paquete['nombre_paquete'] . " - $" . $paquete['precio_paquete']; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Calcular Costo</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>