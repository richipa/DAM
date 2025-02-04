<?php
require_once '../controlador/planes_controller.php';
require_once '../controlador/paquetes_controller.php';
require_once '../controlador/usuarios_controller.php';

// Obtener datos del formulario
$id_usuario = $_POST['id_usuario'];
$plan_id = $_POST['plan_id'];
$paquetes_seleccionados = $_POST['paquetes'] ?? [];

// Instanciar controladores
$planesController = new PlanesController();
$paquetesController = new PaquetesController();
$usuariosController = new UsuariosController();

// Obtener datos del usuario, plan y paquetes
$usuario = $usuariosController->obtenerUsuarioPorId($id_usuario);
$plan = $planesController->obtenerPlanPorId($plan_id);
$paquetes = array_map(function ($id_paquete) use ($paquetesController) {
    return $paquetesController->obtenerPaquetePorId($id_paquete);
}, $paquetes_seleccionados);

// Validar restricciones
$errores = [];

// Restricción 1: Usuarios menores de 18 años solo pueden contratar el Pack Infantil
if ($usuario['edad_usuario'] < 18) {
    foreach ($paquetes as $paquete) {
        if ($paquete['nombre_paquete'] !== 'Infantil') {
            $errores[] = "Los usuarios menores de 18 años solo pueden contratar el Pack Infantil.";
            break;
        }
    }
}

// Restricción 2: Usuarios del Plan Básico solo pueden seleccionar un paquete adicional
if ($plan['nombre_plan'] === 'Básico' && count($paquetes) > 1) {
    $errores[] = "Los usuarios del Plan Básico solo pueden seleccionar un paquete adicional.";
}

// Restricción 3: El Pack Deporte solo puede ser contratado si la duración de la suscripción es de 1 año
foreach ($paquetes as $paquete) {
    if ($paquete['nombre_paquete'] === 'Deporte' && $plan['duracion_suscripcion'] !== 'Anual') {
        $errores[] = "El Pack Deporte solo puede ser contratado si la duración de la suscripción es de 1 año.";
        break;
    }
}

// Si no hay errores, calcular el costo total mensual y guardar el resumen
if (empty($errores)) {
    // Guardar el resumen de suscripción en la base de datos
    $guardado_exitoso = $usuariosController->guardarResumenUsuario($id_usuario, $plan_id, $paquetes_seleccionados);
    if (!$guardado_exitoso) {
        die("Error: No se pudo guardar el resumen de suscripción.");
    }

    // Calcular el costo total mensual
    $costo_plan = $plan['precio_plan'];
    if ($plan['duracion_suscripcion'] === 'Anual') {
        $costo_plan /= 12; // Dividir el precio anual entre 12
    }
    $costo_paquetes = 0;
    foreach ($paquetes as $paquete) {
        $costo_paquetes += $paquete['precio_paquete'];
    }
    $costo_total_mensual = $costo_plan + $costo_paquetes;

    // Mostrar los nombres de los paquetes seleccionados
    $nombres_paquetes = array_map(function ($paquete) {
        return htmlspecialchars($paquete['nombre_paquete']);
    }, $paquetes);
    $nombres_paquetes_string = !empty($nombres_paquetes) ? implode(', ', $nombres_paquetes) : 'Ninguno';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <title>Resumen de Suscripción - StreamWeb</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5f81ff;
            color: white;
            font-family: monospace;
        }
        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
            opacity: 0.9;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
        }
        .btn {
            font-family: monospace;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resumen de la Suscripción</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <p><strong>Plan:</strong> <?= htmlspecialchars($plan['nombre_plan']) ?> - $<?= number_format($plan['precio_plan'], 2) ?> (<?= htmlspecialchars($plan['duracion_suscripcion']) ?>)</p>
                <p><strong>Paquetes Seleccionados:</strong> <?= $nombres_paquetes_string ?></p>
                <p><strong>Costo de Paquetes Adicionales:</strong> $<?= number_format($costo_paquetes, 2) ?></p>
                <p><strong>Costo Total Mensual:</strong> $<?= number_format($costo_total_mensual, 2) ?></p>
                <a href="seleccionar_plan.php?id_usuario=<?= htmlspecialchars($id_usuario); ?>" class="btn btn-secondary w-100">Volver</a>
                <a href="lista_usuarios.php?id_usuario=<?= htmlspecialchars($id_usuario); ?>" class="btn btn-primary w-100 mt-3">Confirmar Suscripción</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errores en la Suscripción</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: red;
            color: white;
            font-family: monospace;
        }
        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
            opacity: 0.9;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p.error {
            color: red;
            font-weight: bold;
        }
        .btn {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Errores en la Suscripción</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <?php foreach ($errores as $error): ?>
                    <p class="error"><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
                <a href="seleccionar_plan.php?id_usuario=<?= htmlspecialchars($id_usuario); ?>" class="btn btn-secondary w-100">Volver</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
?>