<?php 
if($_POST){
    header('Location:inicio.php');

}

?>



<!doctype html>
<html lang="en">
    <head>
        <title>Administrador de Bit a Bit</title>
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

<div class="container">
    <div class="row">

<div
    class="col-md-4      "
>
    
</div>


        <div
            class="col-md-4">

<br><br><br>
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                
            <form   method="POST">
            <div class = "form-group">
            <label >Usuario</label>

            <input type="text" class="form-control" name="usuario"  placeholder="Escribe tu usuario">
            
            </div>

            <div class="form-group">
            <label >Contraseña</label>
            <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
            </div>
           <br>
            <button type="submit" class="btn btn-primary">Entrar al sistema</button>
            </form>
            
            

            </div>
           
        </div>
        



        </div>
        
    </div>
</div>




    </body>
</html>
