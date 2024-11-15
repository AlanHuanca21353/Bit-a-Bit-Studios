<?php include("../template/header.php"); ?>

<?php
 
 $txtIDBit=(isset($_POST['txtIDBit']))?$_POST['txtIDBit']:"";
 $txtNombreBit=(isset($_POST['txtNombreBit']))?$_POST['txtNombreBit']:"";
 $txtDescBit=(isset($_POST['txtDescBit']))?$_POST['txtDescBit']:"";
 $txtImagenBit=(isset($_FILES['txtImagenBit']['name']))?$_FILES['txtImagenBit']['name']:"";
 $accionBit=(isset($_POST['accionBit']))?$_POST['accionBit']:"";




?>




<div class="col-md-5">
 

            <div class="card">
                <div class="card-header">
                    Datos de Bit-a-Bit
                </div>

                <div class="card-body">
                
            

                <form method="POST" enctype="multipart/form-data">

        <div class = "form-group">
        <label for="txtIDBit">ID:</label>
        <input type="text" class="form-control" name="txtIDBit" id="txtIDBit" placeholder="ID">

        </div>

        <br>

        <div class = "form-group">
        <label for="txtNombreBit">Nombre:</label>
        <input type="text" class="form-control" name="txtNombreBit" id="txtNombreBit" placeholder="Nombre del dato en Bit-a-Bit" autofocus>

        </div>

        <br>

        <div class = "form-group">
        <label for="txtImagenBit">Imagen:</label>
        <input type="file" class="form-control" name="txtImagenBit" id="txtImagenBit" placeholder="Nombre del dato en Bit-a-Bit">

        </div>

        <br>


        <div class = "form-group">



        <label for="txtDescBit" >Descripción:</label>
        <textarea class="form-control" name="txtDescBit"id="txtDescBit" rows="3" style="height: 17px;" placeholder="Descripción del dato en Bit-a-Bit"></textarea>
        </div>

        <br>








        <div class="btn-group" role="group" aria-label="">
            <button type="sumbit" name="accionBit" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="sumbit" name="accionBit" value="Modificar" class="btn btn-warning">Modificar</button>
            <button type="sumbit" name="accionBit" value="Cancelar" class="btn btn-info">Cancelar</button>
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
                <th>Descripcion</th>
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