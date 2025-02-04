<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador - StreamWeb</title>
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
        <h3 style="color: #5f81ff" class="text-center mb-4">Acceso Administrador</h3>
        <i><p style="color:black" class="text-center mb-4">Muestro los datos de acceso para el profesor</p></i>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admin_name = "admin";
            $admin_password = "1234";
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username === $admin_name && $password === $admin_password) {
                header("Location: lista_usuarios.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">Nombre o contraseña incorrectos.</div>';
            }
        }
        ?>
        <form method="POST" action="lista_usuarios.php">
            <div class="mb-3">
                <label style="font-family: monospace;" for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre: admin" required>
            </div>
            <div class="mb-3">
                <label style="font-family: monospace;" for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña: 1234" required>
            </div>
            <button style="font-family: monospace;" type="submit" class="btn btn-outline-dark w-100 mt-3">Acceder</button>
        </form>
        <a style="font-family: monospace;" href="../index.php" class="btn btn-secondary w-100 mt-3">Volver</a>
    </div>
</body>
</html>
