<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="http://localhost/carwap/View/css/headerstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="Principal">
        <header class="divHeader">
            <nav class="navegador">
                <a class="a" href="Home.php">
                    <img src="..\View\img\logo.jpg" alt="logo carwap" class="logo">
                </a>
                <a href="AutoView.php"><input type="button" class="btn btn-light" value="Comprar"></a>
                <a href="Vender.php"><input type="button" class="btn btn-light" value="Vender"></a>
                <a href="Conocenos.php"><input type="button" class="btn btn-light" value="Conócenos"></a>
                
            </nav>
            <div class="log">
                <a href="../View/LoginView.php"><input type="button" class="btn btn-light" value="Iniciar sesión"></a>
                <a href="../View/CarritoView.php">
                    <img src="..\View\img\cart-fill.svg" alt="logo carwap" class="logobasket">
                </a>
            </div> 
    
        </header>
    </main>
</body>
</html>
