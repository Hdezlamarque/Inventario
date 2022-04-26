<?php
	
	require 'conexion.php';
	
	$id = ($_GET['id']);
	
	
	$sql = "DELETE FROM employee WHERE id=$id";
	//$sql = "UPDATE employee SET activo=0 WHERE id=$id";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO ELIMINADO';
		} else {
		echo 'ERROR AL ELIMINAR REGISTRO';
	}
	
	echo "<br/><a href='index.php' class='btn btn-primary' >Regresar</a>";
	
?>

