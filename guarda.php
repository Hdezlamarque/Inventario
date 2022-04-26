<?php
 
 require 'conexion.php';

 $nombre =($_POST['nombre']);
 $telefono =($_POST['telefono']);
 $correo =($_POST['correo']);
 $area =($_POST['area']);

 $sql= "INSERT INTO employee (nombre, telefono, correo, area) VALUES ('$nombre', '$telefono', '$correo', '$area')";
 //echo $sql;
 $resultado = $mysqli->query($sql);

 if($resultado>0){
    echo 'REGISTRO AGREGADO';
    } 
    else 
    {
    echo 'ERROR AL AGREGAR REGISTRO';}

    echo "<br/><a href='index.php' class='btn btn-primary' >Regresar</a>";
?>
