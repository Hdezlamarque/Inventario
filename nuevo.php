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
        <!-- navbar -->
        <?php include 'navbar.php'; ?>
        
		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3>Add employee</h3>
            <form id="registro" name="registro" method="POST" action="guarda.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Name</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre" required>
                </div>

                    </br>

                <div class="form-group">
                    <label for="telefono">Phone</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce el telefono" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Introduce el correo" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="area">Area</label>
                    <select id="area" class="form-control" name="area">
                        <option value = "Assembly">Assembly</option>
                        <option value = "ATE">ATE</option>
                        <option value = "Customer">Customer service</option>
                        <option value = "Engineering">Engineering</option>
                        <option value = "Fulffillment">Fulffillment</option>
                        <option value = "Import/Export">Import/Export</option>
                        <option value = "IT">IT</option>
                        <option value = "Mantence">Mantence</option>
                        <option value = "Operation">Operation</option>
                        <option value = "Quality">Quality</option>
                        <option value = "Receiving">Receiving</option>
                        <option value = "RH">RH</option>
                        <option value = "RMA">RMA</option>
                        <option value = "Shipping">Shipping</option>
                        <option value = "SMT">SMT</option>
                        <option value = "Supply">Supply Chain</option>
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