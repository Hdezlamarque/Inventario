<?php
	
	require 'conexion.php';
	
	$id = ($_POST['id']);
	$nombre = ($_POST['nombre']);
	$telefono = ($_POST['telefono']);
	$correo = ($_POST['correo']);
	$area = ($_POST['area']);
	
	$sql = "UPDATE employee SET nombre='$nombre', telefono='$telefono',correo='$correo',area='$area' WHERE id=$id ";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO MODIFICADO';
		} else {
		echo 'ERROR AL MODIFICAR REGISTRO';
	}
	
	echo "<br/><a href='index.php' class='btn btn-primary' >Regresar</a>";
?>