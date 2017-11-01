<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Departamento y Area</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS almacen-nuevo.php-->
	<link rel="stylesheet" href="css/almacen-nuevo.css">
</head>

<body>
	<?php
		require_once 'menu-superior.php';
		require_once 'dashboard.php';
	?>
		<div class="container">
			<div class="row">
				<div class="col-12" id="tituloVentana">
					<div class="row">
						<div class="col-2" id="iconoVentana">
							<img class="align-middle" src="images/iconos/nuevo.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Nuevo Departamento y Area</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<form action="" id="formulario">
						<div class="form-group">
							<label for="nombre">Nombre del Departamento:</label>
							<input class="form-control" type="text" placeholder="Introduzca un nombre">
						</div>
						<div class="form-group">
							<label for="nombre">Areas:</label>
							<textarea disabled="true" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							<input class="btn btn-info" type="button" value="Añadir Area">
							<input class="btn btn-warning" type="button" value="Quitar Area">
							<!--
							<input class="btn btn-success" type="button" value="Añadir Area">
							<input class="btn btn-danger" type="button" value="Quitar Area">
							-->
						</div>
						<div class="form-group" id="botones">
							<input class="btn btn-success" type="submit" value="Aceptar">
							<input class="btn btn-danger" type="submit" value="Cancelar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--Scripts-->
		<?php
		require_once 'scripts.php';
	?>
</body>

</html>