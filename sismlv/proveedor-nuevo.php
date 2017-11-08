<?php   
   session_start();
    if(!isset($_SESSION['token_Id'])) header('Location: index.php');  
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Proveedor</title>
	<?php
		require_once 'libs.php';
	?>
		<!--CSS proveedor-nuevo.php-->
		<link rel="stylesheet" href="css/provedor-nuevo.css">
</head>

<body>
	<div class="container-fluid">
		<?php
			require_once 'menu-superior.php';
			require_once 'dashboard.php';
		?>
			<div class="row">
				<div class="col-12" id="tituloVentana">
					<div class="row">
						<div class="col-2" id="iconoVentana">
							<img class="align-middle" src="images/iconos/nuevo.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Nuevo Proveedor</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="main" class="col-12">
					<div class="row" id="f">
						<div class="col-12">
							<form action="" method="post" id="formulario">
								<div class="form-group">
									<label for="nombre">Nombre del provedor:</label>
									<input class="form-control" type="text" placeholder="p. ej., Acme, Inc" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Persona del contacto:</label>
									<input class="form-control" type="text" placeholder="p. ej., María Pérez" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Nombre del contacto:</label>
									<input class="form-control" type="text" placeholder="p. ej., María" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Dirección:</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion_almacen" placeholder="[Agregar Dirección]"></textarea>
								</div>
								<div class="form-group">
									<label for="nombre">Teléfono (principal):</label>
									<input class="form-control" type="text" placeholder="p. ej., 0444433704731" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Teléfono (alternativo):</label>
									<input class="form-control" type="text" placeholder="p. ej., 0444427598714" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Fax:</label>
									<input class="form-control" type="text" placeholder="p. ej., 0444432195109" name="nombre_almacen">
								</div>
								<div class="form-group">
									<label for="nombre">Correo electrónico:</label>
									<input class="form-control" type="email" placeholder="p. ej., maria.perez@correo.com" name="nombre_almacen">
								</div>
								<div class="form-group">
									<input class="btn btn-danger col-12" type="submit" value="Cancelar">
								</div>
								<div class="form-group" id="botones">
									<input class="btn btn-success col-12" type="submit" value="Aceptar">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!--Scripts-->
	<?php
		require_once 'scripts.php';
	?>
</body>

</html>
