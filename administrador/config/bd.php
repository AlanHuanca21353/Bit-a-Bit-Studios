


<?php
try {
        
        $conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasenia); 
        if($conexion){
            echo "Conectado a sistema";
        }

    } catch ( Exception $ex) {

        echo $ex -> getMessage();
    }





 switch($accionBit){

        case "Agregar":

            $sentenciaSQL= $conexion ->prepare("");
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