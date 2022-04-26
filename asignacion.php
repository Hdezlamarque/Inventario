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
        <!-- navbar dinamico -->
        <?php include 'navbar.php'; ?>

		<div class="container">
            <div class="row">
            <div class="col-md-8">
            <h3>Add assignment</h3>
            <form id="asignacion" name="asignacion" method="POST" action="guarda.php" autocomplete="off">
                <div class="form-group">
                    <label for="equipo">Equipment</label>
                    <input type="text" class="form-control" id="equipo" name="equipo" placeholder="Tipo de equipo" required>
                </div>

                    </br>

                <div class="form-group">
                    <label for="marca">Branch</label>
                    <input type="text" class="form-control" id=" marca" name="marca" placeholder="Introduce la marca del equipo" required>
                </div>
                
                    </br>

                <div class="form-group">
                    <label for="modelo">Model</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Introduce el modelo del equipo" required>
                </div>

                    </br> 

                <div class="form-group">
                    <label for="serial">Serial Number</label>
                    <input type="text" class="form-control" id="serial" name="serial" placeholder="Introduce el serial del equipo" required>
                </div>

                    </br>

                <div class="form-group">
                    <label for="nom_asig">Assignment</label>
                    <input type="text" class="form-control" id="nom_asig" name="nom_asig" placeholder="" required>
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
