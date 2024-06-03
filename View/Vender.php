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
        width: 70%;
    }
    </style>
<?php include 'Header.php';?>
<body>

<div class="contenedorVenta">

    <form>
    <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Nombre completo del dueño</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
                <option>Ottro modelo</option>
                <option>Corolla</option>
                <option>Yaris</option>
                <option>mx-5</option>
                <option>golf</option>
                <option>Sentra</option>
            </select>
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Año</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Dirección donde se encuantra el auto</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Correo</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentario</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
        <label for="exampleFormControlFile1">Subir fotografía del auto</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

    </form>
    </div>


    <?php include 'Footer.php';?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>