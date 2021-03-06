<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lista de proveedores</title>
	<?php
		require_once 'libs.php';
	?>
		<!--CSS proveedor-nuevo.php-->
		<link rel="stylesheet" href="css/provedor-lista.css">
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
							<p>Lista Proveedor</p>
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
							<?php
								//Conexion a la bd
								require_once 'conectar.php';
								$conexion = mysqli_connect($servername, $username, $password);
								if(mysqli_connect_errno()) {
									echo "Error en la conexión";
									exit();
								}
								//Selecionar db
								mysqli_select_db($conexion, $dbname) or die("Error al conectar con la BD");
								mysqli_set_charset($conexion, "utf8");
								$sql = "SELECT 
											nombre_proveedor,
											direccion_proveedor,
											telefonop_proveedor
											FROM proveedor";
								// preparar consulta
								$resultado = mysqli_prepare($conexion, $sql);
								// ejecutar sql
								$estatus = mysqli_stmt_execute($resultado);
							?>
							<table class="table" id="tablaLista">
								<thead>
									<tr>
										<th>Proveedor</th>
										<th>Dirección</th>
										<th>Teléfono</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
								<?php
									if($estatus == false)
										echo "Error al ejecutar la consulta";
									else {
										// asociar variables
										$estatus = mysqli_stmt_bind_result(
											$resultado, $nombre, $direccion, $telefono);
										// leer resultados
										while(mysqli_stmt_fetch($resultado)) {
											echo
												"<tr>".
													"<td>".
														$nombre.
													"</td>".
													"<td>".
														$direccion.
													"</td>".
													"<td>".
														$telefono.
													"</td>".
													"<td>".
														"<a href='editarproveedor.php'>".
														"<div class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i> </div>".
														"</a>".
													"</td>".
													"<td>".
														"<a href='eliminarproveedor.php?nom_proveedor=\"$nombre\"'>".
															"<div class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </div>".
														"</a>".
													"</td>".
												"</tr>";
										}
									}
									mysqli_stmt_close($resultado);
								?>
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
