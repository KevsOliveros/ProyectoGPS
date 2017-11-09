<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Cliente</title>
	<?php
		require_once 'libs.php';
	?>
	<!--CSS cliente-nuevo.php-->
	<link rel="stylesheet" href="css/cliente-nuevo.css">
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
							<p>Nuevo Cliente</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12">
					<div class="btn-group" role="group" aria-label="Opciones cliente" id="opcionesDatos">
						<button type="button" class="btn btn-light btnOpcion" id="btnDatosCliente">Cliente</button>
						<button type="button" class="btn btn-light btnOpcion" id="btnDatosOtros">Otros</button>
					</div>
					<form action="" method="post" id="formulario">
						<div id="datosCliente">
							<div class="form-group">
								<label for="nombre">Nombre del cliente:</label>
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
								<label for="nombre">Dirección de facturación:</label>
								<input class="form-control" type="text" placeholder="[Entrar dirección]" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Ciudad:</label>
								<input class="form-control" type="text" placeholder="p. ej., Morelia" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Estado:</label>
								<input class="form-control" type="text" placeholder="p. ej., Michoacán" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Código postal:</label>
								<input class="form-control" type="text" placeholder="p. ej., 58090" name="">
							</div>
							<div class="form-group">
								<label for="nombre">País:</label>
								<input class="form-control" type="text" placeholder="p. ej., México" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Teléfono (principal):</label>
								<input class="form-control" type="text" placeholder="p. ej., 55867812" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Teléfono (alternativo):</label>
								<input class="form-control" type="text" placeholder="p. ej., 55789014" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Fax:</label>
								<input class="form-control" type="text" placeholder="p. ej., 55121314" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Correo electrónico:</label>
								<input class="form-control" type="text" placeholder="p. ej., maria.perez@acme.com" name="">
							</div>
						</div>
						<div id="datosOtros">
							<div class="form-group">
								<label for="nombre">Dirección de envío:</label>
								<input class="form-control" type="text" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Ciudad:</label>
								<input class="form-control" type="text" placeholder="p. ej., Morelia" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Estado:</label>
								<input class="form-control" type="text" placeholder="p. ej., Michoacán" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Código postal:</label>
								<input class="form-control" type="text" placeholder="p. ej., 58090" name="">
							</div>
							<div class="form-group">
								<label for="nombre">País:</label>
								<input class="form-control" type="text" placeholder="p. ej., México" name="">
							</div>
							<div class="form-group">
								<label for="nombre">Vendedor:</label>
								<select name="" class="form-control">
									<option value="">Vendedor 1</option>
									<option value="">Vendedor 2</option>
									<option value="">Vendedor 3</option>
								</select>
							</div>
							<div class="form-group">
								<label for="nombre">Notas sobre el cliente:</label>
								<textarea class="form-control" rows="3" name="" placeholder="[Entre comentarios privados]"></textarea>
							</div>
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
		<!-- Mostrar/ocultar opciones del formulario -->
		<script src="js/nuevo-cliente.js"></script>
</body>
</html>