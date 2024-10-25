<?php include("../template/header.php"); ?>

<?php
  
 
  
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
<input type="text" class="form-control" name="txtNombreJuego" id="txtNombreJuego"  placeholder="Nombre del dato en Juegos" autofocus>

</div>

<br>

<div class = "form-group">
 <label for="txtImagenJuego">Imagen:</label>
 <input type="file" class="form-control" name="txtImagenJuego" id="txtImagenJuego" placeholder="Nombre del dato en Juegos">

 </div>

<br>

<div class = "form-group">
<label for="txtDescJuego">Descripción</label>
<textarea class="form-control" name="txtDescJuego"id="txtDescJuego" rows="3" style="height: 17px;" placeholder="Descripción del dato en Juegos"></textarea>

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