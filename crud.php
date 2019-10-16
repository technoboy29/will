<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/crud.css">
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="create.php" method="POST" enctype="multipart/form-data" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						CRUD PC GAMER
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre">
						<span class="focus-input100" data-placeholder="Nombre PC"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="procesador">
						<span class="focus-input100" data-placeholder="Procesador"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tarjetag">
						<span class="focus-input100" data-placeholder="Tarjeta Gráfica"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tarjetam">
						<span class="focus-input100" data-placeholder="Tarjeta Madre"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="memram">
						<span class="focus-input100" data-placeholder="Memoria Ram"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="disco">
						<span class="focus-input100" data-placeholder="Tipo de disco de almacenamiento"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tipo">
						<span class="focus-input100" data-placeholder="Capacidad de almacenamiento"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="fuente">
						<span class="focus-input100" data-placeholder="Fuente de poder"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="monitor">
						<span class="focus-input100" data-placeholder="Monitor"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="caja">
						<span class="focus-input100" data-placeholder="Case"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="teclado">
						<span class="focus-input100" data-placeholder="Teclado"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="raton">
						<span class="focus-input100" data-placeholder="Raton"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="disi">
						<span class="focus-input100" data-placeholder="Disipación"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="alta">
						<span class="focus-input100" data-placeholder="Altavoces"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="ventil">
						<span class="focus-input100" data-placeholder="Ventiladores"></span>
					</div>

					<div >
						<input class="input100" type="file" name="img">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="crear">
								Crear
							</button>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" name="ver" href="tabla.php">
								Ver
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" name="act" href="actualizar.php">
								Actualizar
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" name="elim" href="eliminar.php">
								Eliminar
							</a>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>