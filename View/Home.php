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
                  <h5>Cambia tu auto</h5>
                    <p>Puedes obtener una nueva experiencia por un precio accesible</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../View/img/carrusel2.webp" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carruselCont">
                  <h5>Nuevos límites</h5>
                    <p>Rompe el límite de tus expectativas</p>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../View/img/carrusel3.jpg" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block">
                <div class="carruselCont">
                  <h5>Un auto familiar</h5>
                    <p>Si buscas un carro accesible y práctico estás en el lugar correcto</p>
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

    <div class="HomeContenedor">
      <div class="HomeCard">
        <h5>
        ¿Por qué comprar un auto de segunda mano?
        </h5>
        <p>
        En el dinámico mercado automotriz actual, la compra de un auto de segunda mano se presenta como una decisión inteligente y económicamente viable. Desde una perspectiva corporativa, esta elección ofrece numerosos beneficios que van más allá del simple ahorro monetario, destacándose como una opción estratégicamente sólida tanto para individuos como para empresas. A continuación, se exploran las razones clave que hacen de la compra de un auto de segunda mano una alternativa convincente y ventajosa.
        </p>
      </div>

      <div class="HomeCard">
        <h5>
        Valor Económico Superior
        </h5>
        <p>
        El aspecto más evidente y significativo de adquirir un vehículo de segunda mano es el ahorro económico. Los autos nuevos se deprecian rápidamente, perdiendo aproximadamente un 20% de su valor en el primer año y hasta un 60% en los primeros cinco años. Al optar por un auto de segunda mano, usted evita esta depreciación inicial, permitiéndole obtener un vehículo de calidad a un precio significativamente reducido. Esta ventaja económica es particularmente importante para empresas que buscan optimizar su presupuesto de transporte y maximizar su retorno de inversión.
        </p>
      </div>
 

      <div class="HomeCard">
        <h5>
        Amplia Variedad y Disponibilidad
        </h5>
        <p>
        El mercado de autos de segunda mano ofrece una amplia gama de opciones en términos de marcas, modelos y años. Esto le permite a usted, como comprador, encontrar el vehículo que mejor se adapte a sus necesidades y preferencias específicas. Ya sea que esté buscando un sedán confiable para uso diario, un SUV espacioso para la familia o una camioneta robusta para su negocio, la diversidad del inventario de autos usados asegura que encontrará exactamente lo que busca.        
      </p>
      </div>

      <div class="HomeCard">
        <h5>
        Calidad y Fiabilidad
        </h5>
        <p>
        La percepción de que los autos de segunda mano son menos fiables que los nuevos es un mito. Gracias a los avances tecnológicos y a la mejora en los estándares de fabricación, los vehículos modernos están diseñados para durar más tiempo y mantener su rendimiento durante muchos años. Además, muchos autos usados pasan por rigurosas inspecciones y reacondicionamientos antes de ser puestos a la venta. Algunos concesionarios incluso ofrecen garantías extendidas y programas de certificación que proporcionan una mayor tranquilidad al comprador.        
      </p>
      </div>

      <div class="HomeCard">
        <h5>
        Comprar
        </h5>
        <p>
        Compra el auto que siempre deseaste
      </p><br>
      <button type="button" class="btn btn-dark">Ver autos</button>
      </div>

      <div class="HomeCard">
        <h5>
        Vender
        </h5>
        <p>
          Puedes vender tu coche, ponte en contacto con nosotros
      </p><br>
      <button type="button" class="btn btn-dark">Conoce más</button>
      </div>
    </div>

    <?php include 'Footer.php';?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
