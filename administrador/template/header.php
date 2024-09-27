<!doctype html>
<html lang="en">
    <head>
        <title>Inicio</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       
    <?php $url="http://".$_SERVER['HTTP_HOST']."/Bit-a-Bit-Studios" ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del Sistema <span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>

        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/bit-a-bit.php">Bit-a-Bit-Studios</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/juego.php">Juego</a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar Sesión</a>

        <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
    </div>
</nav>


<div class="container">
    <br>
    <div class="row">