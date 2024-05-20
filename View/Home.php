<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/css/homestyle.css" rel ="stylesheet">
    <style>

    </style>
</head>
<body>
    <?php include 'Header.php';?>

    <!-- Carrusel de Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../View/img/carrusel1.webp" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                  <div class="carruselCont">
                  <h5>Título de la imagen</h5>
                    <p>Descripción de la imagen 1</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../View/img/carrusel2.webp" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <<div class="carruselCont">
                  <h5>Título de la imagen</h5>
                    <p>Descripción de la imagen 1</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../View/img/carrusel3.jpg" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block">
                <div class="carruselCont">
                  <h5>Título de la imagen</h5>
                    <p>Descripción de la imagen 1</p>
                  </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="cardContainer">
      <p>Hola mundo</p>
    </div>

    <?php include 'Footer.php';?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
