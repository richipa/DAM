<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal - StreamWeb</title>
    <link rel="icon" href="../images/icons8-favicon-32.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5f81ff;
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
        <h1 style="color: white; font-family: monospace" class="mb-4 text-center">Bienvenido a StreamWeb, administrador.</h1>

        <!-- Tarjeta admin -->
        <div class="card shadow border-0" style="opacity: 0.8;"> <!-- Cambié la opacidad para que pase a segundo plano -->
            <div class="card-body text-center">
                <h5 class="card-title">Apartado administrador</h5>
                <p class="card-text">Consultar y gestionar usuarios.</p>
                <a href="vistas/login_admin.php" class="btn btn-outline-dark">Accede</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
