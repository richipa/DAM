<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal - TareasWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(255, 179, 0);
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
            max-width: 400px; /* Ajusta el ancho máximo de las tarjetas */
            margin-bottom: 20px; /* Espaciado entre tarjetas */
        }
    </style>
</head>
<body>
    <div class="container vertical-cards-container">
        <h1 style="color: white; font-family:monospace" class="mb-4 text-center">Bienvenido a TareasWeb.</h1>

        <!-- Tarjeta registro -->
        <div class="card shadow border-0" style="opacity: 1;"> 
            <div class="card-body text-center">
                <h5 class="card-title">Registrate</h5>
                <p class="card-text">No tienes cuenta? Registrate.</p>
                <a href="vistas/alta_usuario.php" class="btn btn-outline-dark">Registrarse</a>
            </div>
        </div>
                <!-- Tarjeta registro -->
                <div class="card shadow border-0" style="opacity: 1;"> 
            <div class="card-body text-center">
                <h5 class="card-title">Inicia Sesión</h5>
                <p class="card-text">Ya tienes una cuenta? Inicia sesión.</p>
                <a href="vistas/login_usuario.php" class="btn btn-outline-dark">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
