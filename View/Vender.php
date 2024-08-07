<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Vender</title>
</head>
<style>
.contenedorVenta{
    display: flex;
    justify-content: center;
}
    form{
        margin-top: 40px;
        padding: 30px;
        width: 60%;
        background-color: #D7D8D8;
    }
    </style>
<?php include 'Header.php';?>
<body>

<div class="contenedorVenta">

    <form>

    <h3>Formulario para vender su vehículo</h3>
    <h6>Nos pondremos en contacto con usted</h6>
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Nombre completo del dueño</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        
        <div class="form-group">
        <label for="exampleInputPassword1">Marca del auto</label>
            <select class="form-control">
                <option>Otra marca</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Mazda</option>
                <option>Volkswagen</option>
            </select>
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <label for="exampleInputPassword1">Marca del auto</label>
            <select class="form-control">
                <option>Otro modelo</option>
                <option>Corolla</option>
                <option>Yaris</option>
                <option>mx-5</option>
                <option>golf</option>
                <option>Sentra</option>
            </select>
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Año</label>
        <input type="number" class="form-control" id="yearInput" name="year" min="1900" max="2024" step="1" required>
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Dirección donde se encuantra el auto</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Calle principal 433">
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
        <label for="exampleFormControlFile1">Subir fotografía del auto</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <a class="btn btn-success" href="CheckoutView.php">Enviar</a>
    </form>
    </div>


    <?php include 'Footer.php';?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>