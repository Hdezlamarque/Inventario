<?php
	
	require 'conexion.php';
	
	$id = ($_GET['id']);
	
	$sql = "SELECT nombre, telefono, correo, area  FROM employee WHERE id=$id LIMIT 1";
	$resultado = $mysqli->query($sql);
	
	$fila = $resultado->fetch_assoc();
	
	
	
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Whoop</title>
	</head>
	<body>
        
		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3>Edit employee</h3>
            <form id="registro" name="registro" method="POST" action="editar2.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Name</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" value="<?php echo $fila['nombre']; ?>" required>
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"
                    />
                </div>

                    </br>

                <div class="form-group">
                    <label for="telefono">Phone</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce el telefono" value="<?php echo $fila['telefono']; ?>" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Introduce el correo" value="<?php echo $fila['correo']; ?>" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="area">Area</label>
                    <select id="area" class="form-control" name="area">
                        <option value = "Assembly" <?php if('Assembly' == $fila['area']) { echo 'selected'; } ?>>Assembly</option>
                        <option value = "ATE" <?php if('ATE' == $fila['area']) { echo 'selected'; } ?>>ATE</option>
                        <option value = "Customer" <?php if('Customer' == $fila['area']) { echo 'selected'; } ?>>Customer service</option>
                        <option value = "Engineering" <?php if('Engineering' == $fila['area']) { echo 'selected'; } ?>>Engineering</option>
                        <option value = "Fulffillment" <?php if('Fulffillment' == $fila['area']) { echo 'selected'; } ?>>Fulffillment</option>
                        <option value = "Import/Export" <?php if('Import/Export' == $fila['area']) { echo 'selected'; } ?>>Import/Export</option>
                        <option value = "IT" <?php if('IT' == $fila['area']) { echo 'selected'; } ?>>IT</option>
                        <option value = "Mantence" <?php if('Mantence' == $fila['area']) { echo 'selected'; } ?>>Mantence</option>
                        <option value = "Operation" <?php if('Operation' == $fila['area']) { echo 'selected'; } ?>>Operation</option>
                        <option value = "Quality" <?php if('Quality' == $fila['area']) { echo 'selected'; } ?>>Quality</option>
                        <option value = "Receiving" <?php if('Receiving' == $fila['area']) { echo 'selected'; } ?>>Receiving</option>
                        <option value = "RH" <?php if('RH' == $fila['area']) { echo 'selected'; } ?>>RH</option>
                        <option value = "RMA" <?php if('RMA' == $fila['area']) { echo 'selected'; } ?>>RMA</option>
                        <option value = "Shipping" <?php if('Shipping' == $fila['area']) { echo 'selected'; } ?>>Shipping</option>
                        <option value = "SMT"<?php if('SMT' == $fila['area']) { echo 'selected'; } ?>>SMT</option>
                        <option value = "Supply"<?php if('Supply' == $fila['area']) { echo 'selected'; } ?>>Supply Chain</option>
                    </select>
                </div>

                    </br>

                    <div class="form-group">
							<button class="btn btn-outline-primary" id="guarda" name="guarda" type="submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				