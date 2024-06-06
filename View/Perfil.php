<?php 
include 'Header.php';

if(isset($_POST['cerrar_sesion'])) {
    // Destruye la sesión
    session_destroy();
    // Redirige al usuario a la página de inicio o a donde desees
    header("Location: LoginView.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
</head>
<body>

<div class="container mt-5">
        <?php if(isset($_SESSION['user_id'])): ?>
            <h3>Bienvenido, <?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_apellido']; ?></h3>
            <p>Tu correo electrónico es: <?php echo $_SESSION['user_mail']; ?></p><br>

            <a class="btn btn-info" href="http://localhost/carwap/View/CarritoView.php">Ver carrito</a>

            <a class="btn btn-success" href="http://localhost/carwap/View/AutoView.php">Ir a Catálogo</a><br><br>

            <form method="post">
                <button type="submit" name="cerrar_sesion" class="btn btn-danger">Cerrar sesión</button>
            </form>
        <?php else: ?>
            <p>No has iniciado sesión.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <footer>
    <?php include 'Footer.php'; ?>
    </footer>

</body>
</html>