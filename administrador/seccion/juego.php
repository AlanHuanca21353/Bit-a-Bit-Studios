<?php include("../template/header.php"); ?>

<?php
  

  $txtIDJuego=(isset($_POST['txtIDJuego']))?$_POST['txtIDJuego']:"";
  $txtNombreJuego=(isset($_POST['txtNombreJuego']))?$_POST['txtNombreJuego']:"";
  $txtImagenJuego=(isset($_FILES['txtImagenJuego']['name']))?$_FILES['txtImagenJuego']['name']:"";
  $accionJuego=(isset($_POST['accionJuego']))?$_POST['accionJuego']:"";
 
 
  echo $txtIDJuego."<br/>";
  echo $txtNombreJuego."<br/>";
  echo $txtImagenJuego."<br/>";
  echo $accionJuego."<br/>";
 

   


  switch($accionJuego){

    case "Agregar":
        echo "Presionado botón agregar";
        break;
    
        case "Modificar":
        echo "Presionado botón modificar";
         break;


        case "Cancelar":
        echo "Presionado botón cancelar";
        break;


        }




?>




<div class="col-md-5">
 

    <div class="card">
        <div class="card-header">
            Datos de Juegos
        </div>

        <div class="card-body">
         

        <form method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for="txtIDJuego">ID:</label>
<input type="text" class="form-control" name="txtIDJuego" id="txtIDJuego"  placeholder="ID">

</div>

<br>

<div class = "form-group">
<label for="txtNombreJuego">Nombre:</label>
<input type="text" class="form-control" name="txtNombreJuego" id="txtNombreJuego"  placeholder="Nombre del dato en Juegos">

</div>

<br>

<div class = "form-group">
 <label for="txtImagenJuego">Imagen:</label>
 <input type="file" class="form-control" name="txtImagenJuego" id="txtImagenJuego" placeholder="Nombre del dato en Bit-a-Bit">

 </div>

<br>




 <div class="btn-group" role="group" aria-label="">
        <button type="sumbit" name="accionJuego" value="Agregar" class="btn btn-success">Agregar</button>
        <button type="sumbit" name="accionJuego" value="Modificar" class="btn btn-warning">Modificar</button>
        <button type="sumbit" name="accionJuego" value="Cancelar" class="btn btn-info">Cancelar</button>
    </div>

</form>



        </div>

     
    </div>






</div>

<div class="col-md-7">
    



    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>2</td>
                <td>Hola como estas</td>
                <td>imagen.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>
         
        </tbody>
    </table>


</div>


<?php include("../template/footer.php"); ?>