<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lista de Cliente</title>
	<?php
		require_once 'libs.php';
	?>
		<!--CSS proveedor-nuevo.php-->
		<link rel="stylesheet" href="css/cliente-lista.css">
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
							<p>Lista Cliente</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="main" class="col-12">
					<div class="row" id="f">
						<div class="col-12" id="tablaDiv">
							<div class="btn btn-danger col-12" id="botonExportar">
								<i class="fa fa-file-pdf-o" aria-hidden="true">   Exportar</i>
							</div>
							<table class="table" id="tablaLista">
								<thead>
									<tr>
										<th>Cliente</th>
										<th>Nota</th>
                                        <th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Rafael Gómez</td>
										<td>Texto de Nota</td>
										<td>
											<div class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
										</td>
										<td>
											<div class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></div>
										</td>
									</tr>
									<tr>
										<td>Eduardo López</td>
										<td>Texto de nota</td>
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
			</div>
	</div>
	<!--Scripts-->
	<?php
		require_once 'scripts.php';
	?>
		<!--Data Table: tablaAlmacenes-->
		<script src="js/dt-tablaLista.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>