<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../View/css/loginStyle.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200;300;400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
 
</head>
<body>
    <?php include 'Header.php';?>
    <div class="formContainer" id="formContainer">
        <div class="formulario" id="loginForm">
            <form action="../Model/Login.php" method="post">
                <div class="form-group">
                    <label for="loginInputEmail1">Correo electrónico</label>
                    <input type="email" name="LoginMail" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos este correo con alguien más.</small>
                </div>
                <div class="form-group">
                    <label for="loginInputPassword1">Contraseña</label>
                    <input type="password" name="LoginPassword" class="form-control" id="loginInputPassword1" placeholder="Contraseña">
                </div>
                <div class="form-group form-check">
<<<<<<< HEAD
                    <input type="checkbox" class="form-check-input" id="loginCheck1">
                    <label class="form-check-label" for="loginCheck1">Recuérdame</label>
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
                <button type="button" class="btn btn-secondary" onclick="showRegisterForm()">Crear cuenta</button>
=======
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
                <!-- <button type="button" class="btn btn-secondary" onclick="showRegisterForm()">Crear cuenta</button> -->
>>>>>>> master
            </form>
        </div>

        <div class="formulario" id="registerForm">
            <form>
                <div class="form-group">
                    <label for="registerInputName">Nombres</label>
                    <input type="text" class="form-control" id="registerInputName" aria-describedby="nameHelp" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="registerInputApellido">Apellidos</label>
                    <input type="text" class="form-control" id="registerInputApellido" aria-describedby="apellidoHelp" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <label for="registerInputEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="registerInputEmail1" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos este correo con alguien más.</small>
                </div>
                <div class="form-group">
                    <label for="registerInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="registerInputPassword1" placeholder="Contraseña">
                </div>
                <button type="button" class="btn btn-secondary" onclick="showLoginForm()">Ya tengo una cuenta</button>
                <button type="submit" class="btn btn-primary">Crear cuenta</button>
            </form>
        </div>
    </div>

    <footer>
        <?php include 'Footer.php';?>
    </footer>

    <script>
        function showLoginForm() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('formContainer').style.marginBottom = '17%';
        }

        function showRegisterForm() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
            document.getElementById('formContainer').style.marginBottom = '8.8%';
        }

        // Initial setup based on the current form displayed
        document.addEventListener('DOMContentLoaded', (event) => {
            if (document.getElementById('registerForm').style.display === 'block') {
                document.getElementById('formContainer').style.marginBottom = '8.8%';
            } else {
                document.getElementById('formContainer').style.marginBottom = '17%';
            }
        });
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
