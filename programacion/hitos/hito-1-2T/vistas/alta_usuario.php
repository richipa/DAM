<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">

    <title>Registro - StreamWeb</title>
    <style>
        body {
            background-color: #5f81ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .register-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .register-container h1 {
            text-align: center;
            color: #5f81ff;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #5f81ff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #4a6ddf;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h1 style="font-family: monospace;">Registro</h1>
        <form method="POST" action="../controlador/usuarios_controller.php">
            <input type="hidden" name="action" value="agregarUsuario"> <!-- Acción para el controlador -->

            <div class="mb-3">
                <label style="font-family: monospace;" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label style="font-family: monospace;" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido"  required>
            </div>

            <div class="mb-3">
                <label style="font-family: monospace;" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"  required>
            </div>

            <div class="mb-3">
                <label style="font-family: monospace;" class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad"  required>
            </div>

            <div class="mb-3">
                <label style="font-family: monospace;" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña" placeholder="Mínimo 5 caracteres" required>
            </div>

            <div class="d-grid">
                <button style="font-family: monospace;" type="submit" class="btn btn-custom">Guardar registro</button>
            </div>

            <div class="text-center mt-3">
                <a style="font-family: monospace;" href="lista_usuarios.php" class="btn btn-secondary btn-sm">Volver atrás</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
