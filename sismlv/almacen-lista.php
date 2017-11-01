<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nuevo Almacén</title>
	<?php
		require_once 'libs.php';
	?>
		<!--CSS almacen-nuevo.php-->
		<link rel="stylesheet" href="css/almacen-lista.css">
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
							<img class="align-middle" src="images/iconos/ver.png" alt="nuevo">
						</div>
						<div class="col-10" id="nombreVentana">
							<p>Abrir Lista Almacenes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="main">
			<div class="row" id="f">
				<div class="col-12" id="tablaDiv">
					<div class="btn btn-danger">
						<i class="fa fa-file-pdf-o" aria-hidden="true">   Exportar</i>
					</div>
					<table class="table" id="tablaAlmacenes">
						<thead>
							<tr>
								<th>Almacén</th>
								<th>Dirección</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Almacén Principal</td>
								<td>Lorem ipsum dolor sit amet</td>
								<td>
									<div class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
								</td>
								<td>
									<div class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></div>
								</td>
							</tr>
							<tr>
								<td>Almacén 2do piso</td>
								<td>Lorem ipsum dolor sit amet</td>
								<td>
									<div class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
								</td>
								<td>
									<div class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></div>
								</td>
							</tr>
							<tr>
								<td>Almacén Rayos X</td>
								<td>Lorem ipsum dolor sit amet</td>
								<td>
									<div class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
								</td>
								<td>
									<div class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--Scripts-->
		<?php
			require_once 'scripts.php';
		?>
			<!--Data Table: tablaAlmacenes-->
			<script src="js/dt-tablaAlmacenes.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>