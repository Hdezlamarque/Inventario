<?php
	
	require 'conexion.php';
	
	$sql = "SELECT id, nombre, telefono, correo, area FROM employee";
	$resultado = $mysqli->query($sql);
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.6.0.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Whoop</title>
		
		<script>
			$(document).ready(function() {
			$('#tableemployee').DataTable();
			} );
			
		</script>
		
		<style>
			body {
			background: white;
			}
		</style>
		
	</head>
	 
	<body>
		<!-- navbar -->
        <?php include 'navbar.php'; ?>

		<!-- Tabla empleados -->
		<div class="container">
			<div class="row">
				<h1>Inventory IT</h1>
			</div>
			
			<table id="tableemployee" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Area</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $fila['nombre']; ?></td>
							<td><?php echo $fila['telefono']; ?></td>
							<td><?php echo $fila['correo']; ?></td>
							<td><?php echo $fila['area']; ?></td>
							<td><a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-outline-warning" >Edit</a> </td>
							<i class="fa-light fa-trash"></i>
							<td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-outline-danger">Delete</a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	
	</body>
</html>	